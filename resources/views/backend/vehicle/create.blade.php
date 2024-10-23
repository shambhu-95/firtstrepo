@extends('backend.layouts.master')
@section('title','RideU || vehicles Create')
@section('main-content')

<div class="card">
    <h5 class="card-header">Add vehicles</h5>
    <div class="card-body">
      <form method="post" action="{{route('vehicles.store')}}">
        {{csrf_field()}}
        <div class="form-group">
          <label for="inputTitle" class="col-form-label">model <span class="text-danger">*</span></label>
        <input id="inputTitle" type="text" name="model" placeholder="Enter model" class="form-control">
        @error('model')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>  

        <div class="form-group">
          <label for="inputTitle" class="col-form-label">licence_plate <span class="text-danger">*</span></label>
        <input id="inputTitle" type="text" name="licence_plate" placeholder="Enter licence_plate" class="form-control">
        @error('licence_plate')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>   

        <div class="form-group">
          <label for="inputTitle" class="col-form-label">Tag <span class="text-danger">*</span></label>
        <input id="inputTitle" type="text" name="tag" placeholder="Enter tag" class="form-control">
        @error('tag')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div> 

        <div class="form-group">
          <label for="inputTitle" class="col-form-label">category <span class="text-danger">*</span></label>
        <input id="inputTitle" type="text" name="category" placeholder="Enter category" class="form-control">
        @error('category')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div> 

        <div class="form-group">
          <label for="inputTitle" class="col-form-label">driver <span class="text-danger">*</span></label>
        <input id="inputTitle" type="text" name="driver" placeholder="Enter driver" class="form-control">
        @error('driver')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div> 

        <div class="form-group">
          <label for="inputTitle" class="col-form-label">assignment_date <span class="text-danger">*</span></label>
        <input id="inputTitle" type="text" name="assignment_date" placeholder="Enter assignment_date" class="form-control">
        @error('assignment_date')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div> 

        <div class="form-group">
          <label for="inputTitle" class="col-form-label">order_date <span class="text-danger">*</span></label>
        <input id="inputTitle" type="date" name="order_date" placeholder="Enter included_services" class="form-control">
        @error('order_date')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div> 
        
        <div class="form-group">
          <label for="inputTitle" class="col-form-label">chasis_number <span class="text-danger">*</span></label>
        <input id="inputTitle" type="text" name="chasis_number" placeholder="Enter chasis_number" class="form-control">
        @error('chasis_number')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>

        <div class="form-group">
          <label for="inputTitle" class="col-form-label">fleet_manager <span class="text-danger">*</span></label>
        <input id="inputTitle" type="text" name="fleet_manager" placeholder="Enter fleet_manager" class="form-control">
        @error('fleet_manager')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>
        
        <div class="form-group">
          <label for="inputTitle" class="col-form-label">location <span class="text-danger">*</span></label>
        <input id="inputTitle" type="text" name="location" placeholder="Enter location" class="form-control">
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