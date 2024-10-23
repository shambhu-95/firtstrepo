@extends('backend.layouts.master')
@section('title','RideU || Brand Create')
@section('main-content')
<div class="card">
    <h5 class="card-header">Add warehouse</h5>
    <div class="card-body">
      <form method="post" action="{{route('warehouse.store')}}">
        {{csrf_field()}}
        <div class="form-group">
          <label for="inputTitle" class="col-form-label">warehouse <span class="text-danger">*</span></label>
        <input id="inputTitle" type="text" name="warehouse" placeholder="Enter warehouse" class="form-control">
        @error('title')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>


        <div class="form-group">
          <label for="inputTitle" class="col-form-label">location <span class="text-danger">*</span></label>
        <input id="inputTitle" type="text" name="location" placeholder="Enter location"  value="{{old('address')}}" class="form-control">
        @error('title')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>


        <div class="form-group">
          <label for="inputTitle" class="col-form-label">address <span class="text-danger">*</span></label>
        <input id="inputTitle" type="text" name="address" placeholder="Enter address"  value="{{old('address')}}" class="form-control">
        @error('title')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>
        
        <div class="form-group">
          <label for="inputTitle" class="col-form-label">company <span class="text-danger">*</span></label>
        <input id="inputTitle" type="text" name="company" placeholder="Enter company"  value="{{old('company')}}" class="form-control">
        @error('title')
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