@extends('backend.layouts.master')
@section('title','RideU || rental Create')
@section('main-content')

<div class="card">
    <h5 class="card-header">Add rental</h5>
    <div class="card-body">
      <form method="post" action="{{route('rental.store')}}">
        {{csrf_field()}}
        <div class="form-group">
          <label for="inputTitle" class="col-form-label">customer <span class="text-danger">*</span></label>
        <input id="inputTitle" type="text" name="customer" placeholder="Enter customer"  class="form-control">
        @error('customer')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>


        <div class="form-group">
        <label for="loc_id">pickup_loc</label>
        <select name="pickup_loc" id="loc_id" class="form-control">
            <option value="">--Select any drop_loc--</option>
            @foreach($location as $key=>$loc_data)
                <option value='{{$loc_data->id}}'>{{$loc_data->location}}</option>
            @endforeach
        </select>
        </div>

        <div class="form-group">
        <label for="drop_loc">drop_loc</label>
        <select name="drop_loc" id="loc_id" class="form-control">
            <option value="">--Select any drop_loc--</option>
            @foreach($location as $key=>$loc_data)
                <option value='{{$loc_data->id}}'>{{$loc_data->location}}</option>
            @endforeach
        </select>
        </div>

        {{-- {{$product}} --}}

        <div class="form-group">
        <label for="bike_id">bike_id</label>
        <select name="bike_id" id="bike_id" class="form-control">
            <option value="">--Select any bike_id--</option>
            @foreach($product as $key=>$pro)
                <option value='{{$pro->id}}'>{{$pro->title}}</option>
            @endforeach
        </div>

        <div class="form-group">
        </select>rental_start
        <label for="inputTitle" class="col-form-label">rental_start <span class="text-danger">*</span></label>
        <input id="inputTitle" type="date" name="rental_start" placeholder="Enter rental_start"  class="form-control">
        @error('rental_start')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>


        <div class="form-group">
        </select>rental_start
        <label for="inputTitle" class="col-form-label">rental_end <span class="text-danger">*</span></label>
        <input id="inputTitle" type="date" name="rental_end" placeholder="Enter rental_end"  class="form-control">
        @error('rental_end')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>

        <div class="form-group">
        </select>rental_start
        <label for="inputTitle" class="col-form-label">total_amount <span class="text-danger">*</span></label>
        <input id="inputTitle" type="number" name="total_amount" placeholder="Enter total_amount"  class="form-control">
        @error('total_amount')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>
        
        <div class="form-group">
          <label for="status" class="col-form-label">Status <span class="text-danger">*</span></label>
          <select name="status" class="form-control">
              <option value="active">Active</option>
              <option value="inactive">Inactive</option>
          </select>
          @error('status')
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