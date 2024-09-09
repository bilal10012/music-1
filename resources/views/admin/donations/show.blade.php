@extends('layouts.admin.app')
@section('title', 'Contact Inquiries')
@section('css')
@endsection
@section('content')
    <div class="content">
        <h2 class="content-heading">Donor # {{ $donor->id }} <a href="{{url('panel/donors')}}" class="btn btn-alt-primary pull-right">Back</a></h2>
        <div class="block">
            <div class="block-content">
                <table class="table table-hover table-vcenter">
                    <tbody>
                        <tr>
                            <th>First Name :</th>
                            <td>{{$donor->first_name}} </td>
                        </tr>
                        <tr>
                            <th>Last Name :</th>
                            <td>{{$donor->last_name}}</td>
                        </tr>
                        @if($donor->subject !=null)
                        <tr>
                            <th>Subject :</th>
                            <td>{{$donor->subject}}</td>
                        </tr>
                        @endif
                        <tr>
                            <th>Donated Amount :</th>
                            <td>{{$donor->amount}}</td>
                        </tr>
                        <tr>
                            <th>Phone :</th>
                            <td>{{$donor->phone}}</td>
                        </tr>
                        <tr>
                            <th>Address :</th>
                            <td>{{$donor->address}}</td>
                        </tr>
                        <tr>
                            <th>City :</th>
                            <td>{{$donor->city}}</td>
                        </tr>
                        <tr>
                            <th>Email :</th>
                            <td>{{$donor->email}}</td>
                        </tr>
                        <tr>
                            <th>Transaction ID :</th>
                            <td>{{$donor->transaction_id}}</td>
                        </tr>
              
                       
                  
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('js')
@endsection
