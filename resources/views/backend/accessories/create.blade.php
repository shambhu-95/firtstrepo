@extends('backend.layouts.master')
@section('title','RideU || accessories Create')
@section('main-content')

<div class="card">
    <h5 class="card-header">Add accessories</h5>
    <div class="card-body">
      <form method="post" action="{{route('accessories.store')}}">
        {{csrf_field()}}
        <div class="form-group">
          <label for="inputTitle" class="col-form-label">name <span class="text-danger">*</span></label>
        <input id="inputTitle" type="text" name="name" placeholder="Enter name" class="form-control">
        @error('name')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>  

        <div class="form-group">
          <label for="inputTitle" class="col-form-label">price <span class="text-danger">*</span></label>
        <input id="inputTitle" type="number" name="price" placeholder="Enter price" class="form-control">
        @error('rentstartdate')
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