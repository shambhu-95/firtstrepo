@extends('backend.layouts.master')
@section('title','RideU || investors Create')
@section('main-content')
<div class="card">
    <h5 class="card-header">Add investors</h5>
    <div class="card-body">
      <form method="post" action="{{route('investor.store')}}">
        {{csrf_field()}}
        <div class="form-group">
          <label for="inputTitle" class="col-form-label">investor_name <span class="text-danger">*</span></label>
        <input id="inputTitle" type="text" name="investor_name" placeholder="Enter investor_name" class="form-control">
        @error('investor_name')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>


        <div class="form-group">
          <label for="inputTitle" class="col-form-label">phone </label>
        <input id="inputTitle" type="number" name="phone" placeholder="Enter phone" class="form-control">
        @error('phone')
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
          <label for="inputTitle" class="col-form-label">investment </label>
        <input id="inputTitle" type="number" name="investment" placeholder="Enter investment" class="form-control">
        @error('investment')
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
          <label for="inputTitle" class="col-form-label">date_of_invest </label>
        <input id="inputTitle" type="date" name="date_of_invest" placeholder="Enter date_of_invest" class="form-control">
        @error('date_of_invest')
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