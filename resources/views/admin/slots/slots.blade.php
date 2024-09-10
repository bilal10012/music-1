@extends('layouts.admin.app')

@section('title', 'Manage Slots')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css">
    <style>
        #calendar {
            background-color: white;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .existing-date {
            background-color: #28a745 !important;
            /* Original color for existing slots */
            border-color: #28a745 !important;
        }

        .new-date {
            background-color: #007bff !important;
            /* Color for new slots */
            border-color: #007bff !important;
        }

        .booked-date {
            background-color: #ffff00 !important;
            /* Yellow color for booked slots */
            border-color: #ffff00 !important;
        }
    </style>
@endsection


@section('content')
    <div class="container">
        <h1 class="mb-4">Manage Slots</h1>

        <!-- Legends Section -->
        <div class="legends mb-4">
            <div style="display: flex; align-items: center; margin-bottom: 10px;">
                <div
                    style="width: 20px; height: 20px; background-color: #ffff00; border: 1px solid #ffff00; margin-right: 10px;">
                </div>
                <span>Booked Dates</span>
            </div>
            <div style="display: flex; align-items: center;">
                <div
                    style="width: 20px; height: 20px; background-color: #28a745; border: 1px solid #28a745; margin-right: 10px;">
                </div>
                <span>Already Available Dates</span>
            </div>
            <div style="display: flex; align-items: center;">
                <div
                    style="width: 20px; height: 20px; background-color: #fdfdfd; border: 1px solid #eeeeee; margin-right: 10px;">
                </div> <br> <br>
                <span>Empty Slots</span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div id="calendar" class="mb-4"></div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Slot Changes</h5>
                        <ul id="slotChangesList" class="list-group mb-3"></ul>
                        <form id="slotForm" method="POST" action="{{ route('admin.slots.update') }}">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="added_slots" id="addedSlots">
                            <input type="hidden" name="removed_slots" id="removedSlots">
                            <button type="submit" class="btn btn-primary btn-block">Update Slots</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <script>
        $(document).ready(function() {
            var existingSlots = @json($existingSlots); // Existing slots
            var bookedSlots = @json($bookedSlots); // Booked slots
            var addedSlots = [];
            var removedSlots = [];

            $('#calendar').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },
                selectable: true,
                dayClick: function(date, jsEvent, view) {
                    var clickedDate = date.format('YYYY-MM-DD');

                    if (date.isBefore(moment(), 'day')) {
                        alert('You cannot select a past date.');
                        return;
                    }

                    // Handle date selection based on the current state of the slot
                    if (bookedSlots.includes(clickedDate)) {
                        // Show confirmation dialog for booked slots
                        if (confirm(
                                'This slot is currently booked. Clicking "OK" will remove the booking and make it available for booking again.'
                                )) {
                            // Remove booking and update slot status
                            toggleDateSelection(clickedDate, true); // true indicates it's a booked slot
                        }
                    } else {
                        // Handle date selection for other slots
                        toggleDateSelection(clickedDate);
                    }
                },
                events: function(start, end, timezone, callback) {
                    var events = [
                        ...existingSlots.map(function(date) {
                            return {
                                start: date,
                                allDay: true,
                                className: 'existing-date'
                            };
                        }),
                        ...bookedSlots.map(function(date) {
                            return {
                                start: date,
                                allDay: true,
                                className: 'booked-date'
                            };
                        }),
                        ...addedSlots.map(function(date) {
                            return {
                                start: date,
                                allDay: true,
                                className: 'new-date'
                            };
                        })
                    ];
                    callback(events);
                },
                selectConstraint: {
                    start: moment().format('YYYY-MM-DD')
                }
            });

            function toggleDateSelection(date, isBooked = false) {
                var existingIndex = existingSlots.indexOf(date);
                var bookedIndex = bookedSlots.indexOf(date);
                var addedIndex = addedSlots.indexOf(date);
                var removedIndex = removedSlots.indexOf(date);

                if (isBooked) {
                    // Date is booked, remove booking
                    if (bookedIndex > -1) {
                        bookedSlots.splice(bookedIndex, 1);
                        addedSlots.push(date);
                    }
                } else {
                    // Handle existing, newly added, and removed slots
                    if (existingIndex > -1) {
                        existingSlots.splice(existingIndex, 1);
                        removedSlots.push(date);
                    } else if (addedIndex > -1) {
                        addedSlots.splice(addedIndex, 1);
                    } else if (removedIndex > -1) {
                        removedSlots.splice(removedIndex, 1);
                        existingSlots.push(date);
                    } else {
                        addedSlots.push(date);
                    }
                }

                updateCalendarEvents();
                updateSlotChangesList();
            }

            function updateCalendarEvents() {
                $('#calendar').fullCalendar('removeEvents');
                $('#calendar').fullCalendar('refetchEvents');
            }

            function updateSlotChangesList() {
                $('#addedSlots').val(JSON.stringify(addedSlots));
                $('#removedSlots').val(JSON.stringify(removedSlots));
                $('#slotChangesList').empty();
                addedSlots.sort().forEach(function(date) {
                    $('#slotChangesList').append('<li class="list-group-item text-primary">' + date +
                        ' (Added)</li>');
                });
                removedSlots.sort().forEach(function(date) {
                    $('#slotChangesList').append('<li class="list-group-item text-danger">' + date +
                        ' (Removed)</li>');
                });
            }

            $('#slotForm').on('submit', function(e) {
                if (addedSlots.length === 0 && removedSlots.length === 0) {
                    e.preventDefault();
                    alert('No changes have been made to the slots.');
                }
            });
        });
    </script>
@endsection
