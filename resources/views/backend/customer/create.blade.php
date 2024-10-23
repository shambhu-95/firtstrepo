@extends('backend.layouts.master')
@section('title','RideU || Brand Create')
@section('main-content')
<div class="card">
    <h5 class="card-header">Add location</h5>
    <div class="card-body">
      <form method="post" action="{{route('customers.store')}}">
        {{csrf_field()}}
        <div class="form-group">
          <label for="inputTitle" class="col-form-label">first_name <span class="text-danger">*</span></label>
        <input id="inputTitle" type="text" name="first_name" placeholder="Enter first_name" class="form-control">
        @error('first_name')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>


        <div class="form-group">
          <label for="inputTitle" class="col-form-label">last_name </label>
        <input id="inputTitle" type="text" name="last_name" placeholder="Enter last_name" class="form-control">
        @error('last_name')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>

       
        <div class="form-group">
          <label for="inputTitle" class="col-form-label">email </label>
        <input id="inputTitle" type="email" name="email" placeholder="Enter email" class="form-control">
        @error('email')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>

        <div class="form-group">
          <label for="inputTitle" class="col-form-label">number </label>
        <input id="inputTitle" type="number" name="number" placeholder="Enter number" class="form-control">
        @error('number')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>

        <div class="form-group">
          <label for="inputTitle" class="col-form-label">Address </label>
        <input id="inputTitle" type="text" name="Address" placeholder="Enter Address" class="form-control">
        @error('Address')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>

        <div class="form-group">
          <label for="inputTitle" class="col-form-label">date_of_birth </label>
        <input id="inputTitle" type="date" name="date_of_birth" placeholder="Enter date_of_birth" class="form-control">
        @error('date_of_birth')
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