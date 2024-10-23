@extends('backend.layouts.master')
@section('title','RideU || contracts Create')
@section('main-content')

<div class="card">
    <h5 class="card-header">Add contracts</h5>
    <div class="card-body">
      <form method="post" action="{{route('contracts.store')}}">
        {{csrf_field()}}
        <div class="form-group">
          <label for="inputTitle" class="col-form-label">name <span class="text-danger">*</span></label>
        <input id="inputTitle" type="text" name="name" placeholder="Enter name" class="form-control">
        @error('name')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>  

        <div class="form-group">
          <label for="inputTitle" class="col-form-label">reference <span class="text-danger">*</span></label>
        <input id="inputTitle" type="text" name="reference" placeholder="Enter reference" class="form-control">
        @error('reference')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>   

        <div class="form-group">
          <label for="inputTitle" class="col-form-label">type <span class="text-danger">*</span></label>
        <input id="inputTitle" type="text" name="type" placeholder="Enter type" class="form-control">
        @error('type')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div> 

        <div class="form-group">
          <label for="inputTitle" class="col-form-label">contract_start_date <span class="text-danger">*</span></label>
        <input id="inputTitle" type="date" name="contract_start_date" placeholder="Enter contract_start_date" class="form-control">
        @error('contract_start_date')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div> 

        <div class="form-group">
          <label for="inputTitle" class="col-form-label">contract_expiration_date <span class="text-danger">*</span></label>
        <input id="inputTitle" type="date" name="contract_expiration_date" placeholder="Enter contract_expiration_date" class="form-control">
        @error('contract_expiration_date')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div> 

        <div class="form-group">
          <label for="inputTitle" class="col-form-label">responsible <span class="text-danger">*</span></label>
        <input id="inputTitle" type="text" name="responsible" placeholder="Enter responsible" class="form-control">
        @error('responsible')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div> 

        <div class="form-group">
          <label for="inputTitle" class="col-form-label">included_services <span class="text-danger">*</span></label>
        <input id="inputTitle" type="text" name="included_services" placeholder="Enter included_services" class="form-control">
        @error('included_services')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div> 
        
        <div class="form-group mb-3">
          <button type="reset" class="btn btn-warning">Reset</button>
           <button class="btn btn-success" type="submit">Submit</button>
        </div>
      </form>
    </div>
</div>

@endsection

@push('styles')
<link rel="stylesheet" href="{{asset('backend/summernote/summernote.min.css')}}">
@endpush
@push('scripts')
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script src="{{asset('backend/summernote/summernote.min.js')}}"></script>
<script>
    $('#lfm').filemanager('image');

    $(document).ready(function() {
    $('#description').summernote({
      placeholder: "Write short description.....",
        tabsize: 2,
        height: 150
    });
    });
</script>
@endpush