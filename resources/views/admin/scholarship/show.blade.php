@extends('layouts.admin.app')
@section('title', 'Contact Inquiries')
@section('css')
@endsection
@section('content')
    <div class="content">
        <h2 class="content-heading">Scholarship # {{ $scholarship->id }} <a href="{{url('panel/scholarships')}}" class="btn btn-alt-primary pull-right">Back</a></h2>
        <div class="block">
            <div class="block-content">
                <table class="table table-hover table-vcenter">
                    <tbody>
                        <tr>
                            <th>Name :</th>
                            <td>{{$scholarship->name}} </td>
                        </tr>
                        <tr>
                            <th>Date of Birth :</th>
                            <td>{{$scholarship->date_of_birth}}</td>
                        </tr>

                        <tr>
                            <th>Address :</th>
                            <td>{{$scholarship->address_1}} </td>
                        </tr>
                        <tr>
                            <th>Address 2 :</th>
                            <td>{{$scholarship->address_2}} </td>
                        </tr>
                        {{-- <tr>
                            <th>Phone :</th>
                            <td>{{$scholarship->phone}}</td>
                        </tr> --}}
                        <tr>
                            <th>Address :</th>
                            <td>{{$scholarship->address}}</td>
                        </tr>
                        <tr>
                            <th>City :</th>
                            <td>{{$scholarship->city}}</td>
                        </tr>
                        <tr>
                            <th>State/Province :</th>
                            <td>{{$scholarship->state_province}}</td>
                        </tr>
                        <tr>
                            <th>Zip Code :</th>
                            <td>{{$scholarship->zipcode}}</td>
                        </tr>
                        <tr>
                            <th>Institute :</th>
                            <td>{{$scholarship->institute}}</td>
                        </tr>
                        <tr>
                            <th>Institute Address :</th>
                            <td>{{$scholarship->institute_address_1}}</td>
                        </tr>
                        <tr>
                            <th>Institute Address 2:</th>
                            <td>{{$scholarship->institute_address_2}}</td>
                        </tr>
                        <tr>
                            <th>Institute Email:</th>
                            <td>{{$scholarship->institute_email}}</td>
                        </tr>
                        <tr>
                            <th>Institute Phone:</th>
                            <td>{{$scholarship->institute_phone}}</td>
                        </tr>
                        <tr>
                            <th>GPA:</th>
                            <td>{{$scholarship->gpa}}</td>
                        </tr>
                        <tr>
                            <th>Transcript:</th>
                            <td><a href="{{ asset($scholarship->transcript)}}" download>Download Transcript</a></td>
                        </tr>
                        <tr>
                            <th>Reference 1 Name:</th>
                            <td>{{$scholarship->ref1_name}}</td>
                        </tr>
                        <tr>
                            <th>Reference 1 Phone:</th>
                            <td>{{$scholarship->ref1_phone}}</td>
                        </tr>
                        <tr>
                            <th>Reference 2 Name:</th>
                            <td>{{$scholarship->ref2_name}}</td>
                        </tr>
                        <tr>
                            <th>Reference 2 Phone:</th>
                            <td>{{$scholarship->ref2_phone}}</td>
                        </tr>
                        <tr>
                            <th>Statement Document:</th>
                            <td><a href="{{ asset($scholarship->statement_doc)}}" download>Download Statement File</a></td>
                        </tr>
                        <tr>
                            <th>Scholarship Type:</th>
                            <td>{{$scholarship->sickle_cell_disease}}</td>
                        </tr>
                        <tr>
                            <th>Other Ilnesses:</th>
                            <td>{{$scholarship->illness}}</td>
                        </tr>
                       
                  
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('js')
@endsection
