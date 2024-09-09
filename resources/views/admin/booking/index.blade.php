@extends('layouts.admin.app')
@section('title', 'Bookings ')
@section('css')
<link rel="stylesheet" href="{{asset('a-asset/css/plugins/dataTables.bootstrap4.css')}}">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/rowreorder/1.3.1/css/rowReorder.dataTables.css" />
@endsection
@section('content')
    <div class="content">
        <h2 class="content-heading">Contact Inquiries</h2>
        <div class="block">
            <div class="block-content">
            <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Event Date</th>
                        <th>Booked Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($bookings as $key => $booking)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$booking->name}}</td>
                            <td>{{date('F j, Y', strtotime($booking->slot->date))}}</td>

                            <td>{{date('F j, Y, g:i a', strtotime($booking->created_at))}}</td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <a href="{{url('panel/bookings', $booking->id)}}" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="View booking">
                                        <i class="fa fa-eye text-primary"></i>
                                    </a>
                                    <a href="javascript:;" onclick="if(confirm('Are you sure about deleting this booking?') == true) document.getElementById('delete-'+{{$booking->id}}).submit();" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Delete booking">
                                        <i class="fa fa-trash text-danger"></i>
                                    </a>
                                </div>
                            </td>
                            <form id="delete-{{$booking->id}}" action="{{ url('panel/bookings/delete',  $booking->id) }}" style="display:none" method="POST">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                        </form>
                        </tr>

                    @empty
                    <tr>
                        <td colspan="7" class="text-center"><p class="text-uppercase m-20 font-weight-bold">No Contact booking Received.</p></td>
                    </tr>
                    @endforelse
                    </tbody>
                </table>
                {!! $bookings->links() !!}
            </div>
        </div>
    </div>
@endsection
@section('js')
<script src="{{asset('a-asset/js/plugins/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('a-asset/js/plugins/dataTables.bootstrap4.min.js')}}"></script>


<script>
$(document).ready( function () {
  var table = $('.js-dataTable-full').DataTable({
    rowReorder: true,
    lengthMenu:[[10,25,50,-1],[10,25,50,"All"]]
  });





} );
</script>
@endsection
