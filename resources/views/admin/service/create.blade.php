<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendar Booking</title>
    <link href="https://fonts.googleapis.com/css?family=Baloo|Ubuntu" rel="stylesheet">
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            font-family: "Baloo";
            padding-top: 60px;
        }
        input, textarea {
            padding: 0;
            border: none;
            transition: .4s;
        }
        .flex {
            display: flex;
        }
        .flex.center-v {
            align-items: center;
        }
        .flex.center-h {
            justify-content: center;
        }
        .flex.center-vh {
            align-items: center;
            justify-content: center;
        }
        .flex.start {
            justify-content: flex-start;
        }
        .flex.end {
            justify-content: flex-end;
        }
        .flex.around {
            justify-content: space-around;
        }
        .flex.between {
            justify-content: space-between;
        }
        .flex.row {
            flex-direction: row;
        }
        .flex.column {
            flex-direction: column;
        }
        .flex.wrap {
            flex-wrap: wrap;
        }
        .disable-select {
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
        .clickable, #calender-title,
        #calender-panel, #calender-buttons {
            cursor: pointer;
        }
        .colorRed {
            color: #FF6B6B;
        }
        .bgColorRed {
            background-color: #FF6B6B;
        }
        .bgColorDarkRed {
            background-color: #bc6969;
        }
        .width-full {
            width: 100%;
        }
        .width-half {
            width: 50%;
        }
        .width-3-4 {
            width: 75%;
        }
        .width-1-4 {
            width: 25%;
        }
        .overflow-hidden {
            overflow: hidden;
        }

        #calender-wrapper {
            position: relative;
            border: 6px solid #FF6B6B;
            border-radius: 10px;
            overflow: hidden;
        }

        #calender-panel {
            z-index: 5;
            position: relative;
            background: #FF6B6B;
            border-top: 6px solid #FF6B6B;
            color: white;
            font-size: 30pt;
            height: 60px;
        }

        #calender-panel p {
            padding-right: 20px;
        }
        #calender-panel p:hover {
            cursor: pointer;
            transition: .2s;
        }

        #calender-title {
            background: #FF6B6B;
            color: white;
            font-size: 30pt;
            height: 60px;
        }

        #calender-title div {
            height: 60px;
            width: 60px;
        }
        #calender-title p {
            height: 60px;
            width: 150px;
        }

        #calender-title #left:hover span {
            padding-right: 10px;
            transition: .2s;
        }
        #calender-title #right:hover span {
            padding-left: 10px;
            transition: .2s;
        }

        #calender-content {
            width: 700px;
            padding: 10px;
        }
        #calender-panel #info {
            border-right: 6px solid #FF6B6B;
            height: 100%;
            width: 75%;
            font-size: 13pt;
        }
        #calender-panel #info div {
            padding-left: 20px;
            width: 100%;
            height: 50%;
        }
        #calender-panel #info div p {
            width: 50%;
            height: 100%;
            border-right: 6px solid #FF6B6B;
        }

        #calender-panel #clear {
            height: 100%;
            width: 25%;
            line-height: 12px;
            font-size: 14pt;
            text-align: center;
            transition: .4s;
        }
        #calender-panel #clear:hover {
            background: #965252;
        }
        #calender-panel #clear p {
            padding: 0;
            margin: 0;
        }

        #calender-buttons {
            margin-top: 20px;
            width: 720px;
            height: 60px;
            background: #FF6B6B;
            border: 6px solid #FF6B6B;
            border-radius: 10px;
            transition: .4s;
        }
        #calender-buttons:hover {
            height: 70px;
        }
        #make-booking {
            width: 100%;
            height: 100%;
            font-size: 20pt;
            color: white;
        }
        #booking-wrapper {
            position: absolute;
            height: 650px;
            width: 720px;
            background: white;
            border-radius: 10px 10px 0 0;
            margin-top: 150px;
            transition: .4s;
            overflow: hidden;
        }
        #booking-wrapper.opened {
            margin-top: -645px;
        }
        #booking-title {
            color: white;
            font-size: 30pt;
            height: 60px;
            width: 100%;
        }
        #booking-form {
            height: 685px;
            width: 98%;
            padding: 10px;
            background: #FF6B6B;
        }
        #booking-form p {
            margin: 20px 0 0 0;
            color: white;
            font-size: 14pt;
        }
        #booking-form > div:nth-child(1) p {
            margin: 0;
        }
        #booking-form input {
            height: 45px;
        }
        #booking-form textarea {
            height: 235px;
            resize: none;
        }
        #booking-form textarea, #booking-form input {
            padding-left: 10px;
            width: calc(100% - 12px);
            background: white;
            color: #FF6B6B;
            font-family: "Baloo";
            font-size: 14pt;
        }
        textarea.formError, input.formError {
            transition: .4s;
            background: #ffdddd !important;
            box-shadow: inset 0px 0px 0px 5px rgba(205, 108, 108, 0.92);
        }
        #booking-form .width-3-4 {
            border-right: 6px solid #FF6B6B;
        }

        .month {
            width: 100px;
            height: 100px;
            transition: .4s;
        }

        #days p {
            width: 100px;
            text-align: center;
            font-size: 15pt;
        }

        .month-selector {
            width: 100%;
            height: 100%;
            transition: .4s;
            position: relative;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        .month-selector.clicked {
            background: #FF6B6B;
            color: white;
        }
        .month-selector.booked {
            background: #743131;
            color: white;
            overflow: hidden;
        }
        .month-selector.booked:after {
            content: 'X';
            position: absolute;
            margin-top: -3px;
            font-size: 100pt;
            font-family: "Ubuntu";
            opacity: 0.1;
        }
        .clickable:hover {
            z-index: 3;
            height: 110px;
            width: 110px;
            box-shadow: 0px 0px 13px 4px rgba(0, 0, 0, 0.14);
            background: #FF6B6B;
            color: white;
        }
    </style>
</head>
<body>
    <div id="calender-wrapper">
        <div id="calender-title" class="disable-select flex row center-v around">
            <div id="left" class="flex row center-vh"><span><</span></div>
            <p class="flex row center-vh"></p>
            <div id="right" class="flex row center-vh"><span>></span></div>
        </div>
        <div id="days" class="flex row center-vh colorRed disable-select">
            <p>MON</p>
            <p>TUE</p>
            <p>WEDS</p>
            <p>THURS</p>
            <p>FRI</p>
            <p>SAT</p>
            <p>SUN</p>
        </div>
        <div id="calender-content" class="overflow-hidden">
            <!-- Calendar will be dynamically loaded here -->
        </div>
        <div id="calender-panel" class="flex row">
            <div id="info" class="flex row start">
                <div>
                    <p>Available Slots:</p>
                </div>
                <div>
                    <p>Booked Slots:</p>
                </div>
            </div>
            <div id="clear">
                <p>Clear</p>
            </div>
        </div>
        <div id="calender-buttons" class="flex row center-v around">
            <p id="make-booking">Make Booking</p>
        </div>
    </div>

    <div id="booking-wrapper">
        <div id="booking-title" class="flex center-vh">
            <p>Booking Form</p>
        </div>
        <form id="booking-form" class="flex column center-vh">
            <!-- Booking form content -->
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const calendarContent = document.getElementById('calender-content');
            const calenderTitle = document.getElementById('calender-title').getElementsByTagName('p')[0];
            const days = ['MON', 'TUE', 'WEDS', 'THURS', 'FRI', 'SAT', 'SUN'];
            const months = [
                { name: 'January', days: 31 }, { name: 'February', days: 28 },
                { name: 'March', days: 31 }, { name: 'April', days: 30 },
                { name: 'May', days: 31 }, { name: 'June', days: 30 },
                { name: 'July', days: 31 }, { name: 'August', days: 31 },
                { name: 'September', days: 30 }, { name: 'October', days: 31 },
                { name: 'November', days: 30 }, { name: 'December', days: 31 }
            ];

            let currentMonth = new Date().getMonth();
            let currentYear = new Date().getFullYear();

            function renderCalendar(month, year) {
                calendarContent.innerHTML = '';
                calenderTitle.innerHTML = `${months[month].name} ${year}`;
                const firstDay = new Date(year, month, 1).getDay();
                const lastDay = new Date(year, month + 1, 0).getDate();

                for (let i = 0; i < firstDay; i++) {
                    const day = document.createElement('div');
                    calendarContent.appendChild(day);
                }

                for (let day = 1; day <= lastDay; day++) {
                    const dayElement = document.createElement('div');
                    dayElement.classList.add('month-selector', 'clickable');
                    dayElement.textContent = day;
                    dayElement.addEventListener('click', function() {
                        this.classList.toggle('booked');
                    });
                    calendarContent.appendChild(dayElement);
                }
            }

            document.getElementById('left').addEventListener('click', function() {
                if (currentMonth === 0) {
                    currentMonth = 11;
                    currentYear--;
                } else {
                    currentMonth--;
                }
                renderCalendar(currentMonth, currentYear);
            });

            document.getElementById('right').addEventListener('click', function() {
                if (currentMonth === 11) {
                    currentMonth = 0;
                    currentYear++;
                } else {
                    currentMonth++;
                }
                renderCalendar(currentMonth, currentYear);
            });

            renderCalendar(currentMonth, currentYear);
        });
    </script>
</body>
</html>
