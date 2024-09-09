@extends('layouts.admin.app')
@section('title', 'Donations')
@section('css')
<link rel="stylesheet" href="{{asset('a-asset/css/plugins/dataTables.bootstrap4.css')}}">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/rowreorder/1.3.1/css/rowReorder.dataTables.css" />
@endsection
@section('content')
    <div class="content">
        <h2 class="content-heading">Donations</h2>
        <div class="block">
            <div class="block-content">
            <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Amount Donated</th>
                        <th>Transaction ID</th>
                        <th>Donated on</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($donors as $key => $donor)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$donor->first_name}} {{$donor->last_name}} </td>
                            <td>{{$donor->amount}}</td>
                            <td>{{$donor->transaction_id}}</td>
                            <td>{{date('F j, Y, g:i a', strtotime($donor->created_at))}}</td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <a href="{{url('panel/donor', $donor->id)}}" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="View donor">
                                        <i class="fa fa-eye text-primary"></i>
                                    </a>
                                    <a href="javascript:;" onclick="if(confirm('Are you sure about deleting this Inquiry?') == true) document.getElementById('delete-'+{{$donor->id}}).submit();" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Delete Inquiry">
                                        <i class="fa fa-trash text-danger"></i>
                                    </a>
                                </div>
                            </td>
                            <form id="delete-{{$donor->id}}" action="{{ url('panel/donor/delete',  $donor->id) }}" style="display:none" method="POST">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                        </form>
                        </tr>
                   
                    @empty
                    <tr>
                        <td colspan="7" class="text-center"><p class="text-uppercase m-20 font-weight-bold">No Donations Yet</p></td>
                    </tr>
                    @endforelse
                    </tbody>
                </table>
                {!! $donors->links() !!}
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
