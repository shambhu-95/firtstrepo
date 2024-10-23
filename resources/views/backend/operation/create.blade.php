@extends('backend.layouts.master')
@section('title','RideU || Brand Create')
@section('main-content')

<div class="card">
    <h5 class="card-header">Add location</h5>
    <div class="card-body">
      <form method="post" action="{{route('operation.store')}}">
        {{csrf_field()}}
        <div class="form-group">
          <label for="inputTitle" class="col-form-label">operationtype <span class="text-danger">*</span></label>
        <input id="inputTitle" type="text" name="operationtype" placeholder="Enter operationtype" class="form-control">
        @error('location')
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