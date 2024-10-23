@extends('backend.layouts.master')
@section('title','RideU || stock Create')
@section('main-content')

<div class="card">
    <h5 class="card-header">Add stock</h5>
    <div class="card-body">
      <form method="post" action="{{route('stockpicking.store')}}">
        {{csrf_field()}}
        <div class="form-group">
          <label for="inputTitle" class="col-form-label">reference <span class="text-danger">*</span></label>
        <input id="inputTitle" type="text" name="reference" placeholder="Enter reference" class="form-control">
        @error('reference')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>  

        <div class="form-group">
          <label for="inputTitle" class="col-form-label">from <span class="text-danger">*</span></label>
        <input id="inputTitle" type="text" name="from" placeholder="Enter from" class="form-control">
        @error('from')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>   

        <div class="form-group">
          <label for="inputTitle" class="col-form-label">to <span class="text-danger">*</span></label>
        <input id="inputTitle" type="text" name="to" placeholder="Enter to" class="form-control">
        @error('to')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div> 

        <div class="form-group">
          <label for="inputTitle" class="col-form-label">contact <span class="text-danger">*</span></label>
        <input id="inputTitle" type="text" name="contact" placeholder="Enter contact" class="form-control">
        @error('contact')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div> 

        <div class="form-group">
          <label for="inputTitle" class="col-form-label">Date <span class="text-danger">*</span></label>
        <input id="inputTitle" type="date" name="Date" placeholder="Enter date" class="form-control">
        @error('Date')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div> 

        <div class="form-group">
          <label for="inputTitle" class="col-form-label">document <span class="text-danger">*</span></label>
        <input id="inputTitle" type="text" name="document" placeholder="Enter document" class="form-control">
        @error('document')
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