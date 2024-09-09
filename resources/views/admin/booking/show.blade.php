@extends('layouts.admin.app')
@section('title', 'Booking Details')
@section('css')
@endsection
@section('content')
    <div class="content">
        <h2 class="content-heading">Booking # {{ $bookings->id }} <a href="{{url('panel/bookings')}}" class="btn btn-alt-primary pull-right">Back</a></h2>
        <div class="block">
            <div class="block-content">
                <table class="table table-hover table-vcenter">
                    <tbody>
                        <tr>
                            <th>First Name :</th>
                            <td>{{$bookings->name}} </td>
                        </tr>
                        <tr>
                            <th>Phone :</th>
                            <td>{{$bookings->phone}}</td>
                        </tr>
                        {{-- @if($bookings->subject !=null)
                        <tr>
                            <th>Subject :</th>
                            <td>{{$bookings->subject}}</td>
                        </tr>
                        @endif --}}
                        <tr>
                            <th>Service :</th>
                            <td>{{$bookings->services}}</td>
                        </tr>
                        <tr>
                            <th>Event Date :</th>
                            <td>{{date('F j, Y', strtotime($bookings->slot->date))}}</td>
                        </tr>
                        <tr>
                            <th>Message :</th>
                            <td>{{$bookings->message}}</td>
                        </tr>



                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('js')
@endsection
