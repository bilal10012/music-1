@extends('layouts.admin.app')
@section('title', 'titleVolunteers')
@section('content')
    <div class="content">
        <h2 class="content-heading">Volunteer # {{ $volunteer->id }} <a href="{{url('panel/inquiries')}}" class="btn btn-alt-primary pull-right">Back</a></h2>
        <div class="block">
            <div class="block-content">
                <table class="table table-hover table-vcenter">
                    <tbody>
                        <tr>
                            <th>First Name :</th>
                            <td>{{$volunteer->name}} </td>
                        </tr>
                       
                        @if($volunteer->subject !=null)
                        <tr>
                            <th>Subject :</th>
                            <td>{{$volunteer->subject}}</td>
                        </tr>
                        @endif
                        <tr>
                            <th>Email :</th>
                            <td>{{$volunteer->email}}</td>
                        </tr>
                        <tr>
                            <th>Phone :</th>
                            <td>{{$volunteer->phone}}</td>
                        </tr>
                        <tr>
                            <th>Experience :</th>
                            <td>{{$volunteer->experience}}</td>
                        </tr>
              
                       
                  
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('js')
@endsection
