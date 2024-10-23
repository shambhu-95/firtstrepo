@extends('backend.layouts.master')
@section('title','RideU || inventory Create')
@section('main-content')
<div class="card">
    <h5 class="card-header">Add inventory</h5>
    <div class="card-body">
      <form method="post" action="{{route('inventory.store')}}">
        {{csrf_field()}}
        <div class="form-group">
          <label for="inputTitle" class="col-form-label">item_name <span class="text-danger">*</span></label>
        <input id="inputTitle" type="text" name="item_name" placeholder="Enter item_name" class="form-control">
        @error('item_name')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>


        <div class="form-group">
          <label for="type">type</label>
          <select name="type" class="form-control">
              <option value="">--Select type--</option>
              <option value="bikes">bikes</option>
              <option value="car">car</option>
              
          </select>
        </div>


        <div class="form-group">
          <label for="inputTitle" class="col-form-label">stock_level <span class="text-danger">*</span></label>
        <input id="inputTitle" type="number" name="stock_level" placeholder="Enter stock_level" class="form-control">
        @error('stock_level')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>

        <div class="form-group">
          <label for="inputTitle" class="col-form-label">purchase_price <span class="text-danger">*</span></label>
        <input id="inputTitle" type="number" name="purchase_price" placeholder="Enter purchase_price" class="form-control">
        @error('purchase_price')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>

        <div class="form-group">
          <label for="inputTitle" class="col-form-label">selling_price <span class="text-danger">*</span></label>
        <input id="inputTitle" type="number" name="selling_price" placeholder="Enter selling_price" class="form-control">
        @error('selling_price')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>

        {{-- {{$location}} --}}

        <div class="form-group">
        <label for="loc_id">location</label>
        <select name="loc_id" id="loc_id" class="form-control">
            <option value="">--Select any location--</option>
            @foreach($location as $key=>$loc_data)
                <option value='{{$loc_data->id}}'>{{$loc_data->location}}</option>
            @endforeach
        </select>
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