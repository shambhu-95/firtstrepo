@extends('backend.layouts.master')
@section('title','RideU || maintenance Create')
@section('main-content')

<div class="card">
    <h5 class="card-header">Add maintenance</h5>
    <div class="card-body">
      <form method="post" action="{{route('maintenance.store')}}">
        {{csrf_field()}}
        <div class="form-group">
        <label for="bikecar_id">bike id</label>
        <select name="bikecar_id" id="bikecar_id" class="form-control">
            <option value="">--Select any bikecar id--</option>
            @foreach($products as $key=>$products)
                <option value='{{$products->id}}'>{{$products->title}}</option>
            @endforeach
        </select>
        </div>

        <div class="form-group">
        </select>maintenance_date
        <label for="inputTitle" class="col-form-label">maintenance_date <span class="text-danger">*</span></label>
        <input id="inputTitle" type="date" name="maintenance_date" placeholder="Enter maintenance_date"  class="form-control">
        @error('maintenance_date')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>

        <div class="form-group">
        </select>issue_reported
        <label for="inputTitle" class="col-form-label">issue_reported <span class="text-danger">*</span></label>
        <input id="inputTitle" type="text" name="issue_reported" placeholder="Enter issue_reported"  class="form-control">
        @error('issue_reported')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>


        <div class="form-group">
        </select>repair_cost
        <label for="inputTitle" class="col-form-label">repair_cost <span class="text-danger">*</span></label>
        <input id="inputTitle" type="number" name="repair_cost" placeholder="Enter repair_cost"  class="form-control">
        @error('repair_cost')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>

        


        <div class="form-group">
        <label for="locat_id">location id</label>
        <select name="locat_id" id="locat_id" class="form-control">
            <option value="">--Select any locat_id--</option>
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