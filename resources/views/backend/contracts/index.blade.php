@extends('backend.layouts.master')
@section('title','RideU || contracts Page')

@section('main-content')
<div class="card shadow mb-4">
     <div class="row">
         <div class="col-md-12">
            @include('backend.layouts.notification')
         </div>
     </div>
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary float-left">contracts List</h6>
      <a href="{{route('stockpicking.create')}}" class="btn btn-primary btn-sm float-right" data-toggle="tooltip" data-placement="bottom" title="Add User"><i class="fas fa-plus"></i> Add stock</a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        @if(count($contracts)>0)
        <table class="table table-bordered" id="banner-dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>S.N.</th>
              <th>name</th>
              <th>reference</th>
              <th>type</th>
              <th>contract_start_date</th>
              <th>contract_expiration_date</th>
              <th>responsible</th>
              <th>included_services</th>
              
              <th>Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
            <th>S.N.</th>
              <th>name</th>
              <th>reference</th>
              <th>type</th>
              <th>contract_start_date</th>
              <th>contract_expiration_date</th>
              <th>responsible</th>
              <th>included_services</th>
             
              <th>Action</th>
              </tr>
          </tfoot>
          <tbody>
            @foreach($contracts as $contracts)   
                <tr>
                    <td>{{$contracts->id}}</td>
                    <td>{{$contracts->name}}</td>
                    
                    
                    <td>{{$contracts->reference}}</td> 
                
                    <td>{{$contracts->type}}</td>
                    
                    <td>{{$contracts->contract_start_date}}</td>
                    
                    <td>{{$contracts->contract_expiration_date}}</td>
                    <td>{{$contracts->responsible}}</td>
                    <td>{{$contracts->included_services}}</td>
                    
                    <td>
                        <a href="{{route('contracts.edit',$contracts->id)}}" class="btn btn-primary btn-sm float-left mr-1" style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip" title="edit" data-placement="bottom"><i class="fas fa-edit"></i></a>
                        <form method="POST" action="{{route('contracts.destroy',[$contracts->id])}}">
                          @csrf 
                          @method('delete')
                              <button class="btn btn-danger btn-sm dltBtn" data-id={{$contracts->id}} style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fas fa-trash-alt"></i></button>
                        </form>
                    </td>
                    {{-- Delete Modal --}}
                    {{-- <div class="modal fade" id="delModal{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="#delModal{{$user->id}}Label" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="#delModal{{$user->id}}Label">Delete user</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <form method="post" action="{{ route('contracts.destroy',$user->id) }}">
                                @csrf 
                                @method('delete')
                                <button type="submit" class="btn btn-danger" style="margin:auto; text-align:center">Parmanent delete user</button>
                              </form>
                            </div>
                          </div>
                        </div>
                    </div> --}}
                </tr>  
            @endforeach
          </tbody>
        </table>
        @else
          <h6 class="text-center">No stock picking found!!! Please create stock picking</h6>
        @endif
      </div>
    </div>
</div>

    @include('backend.layouts.notification')
    <!-- Page Heading -->
    
   
  
@endsection