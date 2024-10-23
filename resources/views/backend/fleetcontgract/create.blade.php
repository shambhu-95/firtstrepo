@extends('backend.layouts.master')
@section('title','RideU || fleetcontracts Create')
@section('main-content')

<div class="card">
    <h5 class="card-header">Add fleetcontracts</h5>
    <div class="card-body">
      <form method="post" action="{{route('fleetcontracts.store')}}">
        {{csrf_field()}}
        <div class="form-group">
          <label for="inputTitle" class="col-form-label">rentbyhour <span class="text-danger">*</span></label>
        <input id="inputTitle" type="number" name="rentbyhour" placeholder="Enter rentbyhour" class="form-control">
        @error('rentbyhour')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>  

        <div class="form-group">
          <label for="inputTitle" class="col-form-label">rentstartdate <span class="text-danger">*</span></label>
        <input id="inputTitle" type="date" name="rentstartdate" placeholder="Enter rentstartdate" class="form-control">
        @error('rentstartdate')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>   

        <div class="form-group">
          <label for="inputTitle" class="col-form-label">rentenddate <span class="text-danger">*</span></label>
        <input id="inputTitle" type="date" name="rentenddate" placeholder="Enter rentenddate" class="form-control">
        @error('rentenddate')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div> 

        <div class="form-group">
          <label for="inputTitle" class="col-form-label">vehicle <span class="text-danger">*</span></label>
        <input id="inputTitle" type="text" name="vehicle" placeholder="Enter vehicle" class="form-control">
        @error('vehicle')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div> 

        <div class="form-group">
          <label for="inputTitle" class="col-form-label">sales_person <span class="text-danger">*</span></label>
        <input id="inputTitle" type="text" name="sales_person" placeholder="Enter sales_person" class="form-control">
        @error('sales_person')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div> 

        <div class="form-group">
          <label for="inputTitle" class="col-form-label">attachment <span class="text-danger">*</span></label>
        <input id="inputTitle" type="text" name="attachment" placeholder="Enter attachment" class="form-control">
        @error('attachment')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div> 

        <div class="form-group">
          <label for="inputTitle" class="col-form-label">firstpayment <span class="text-danger">*</span></label>
        <input id="inputTitle" type="text" name="firstpayment" placeholder="Enter firstpayment" class="form-control">
        @error('firstpayment')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>
        
        

        <div class="form-group">
          <label for="inputTitle" class="col-form-label">fleet_color <span class="text-danger">*</span></label>
        <input id="inputTitle" type="text" name="fleet_color" placeholder="Enter fleet_color" class="form-control">
        @error('fleet_color')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div> 

        <div class="form-group">
          <label for="inputTitle" class="col-form-label">fleet_brand <span class="text-danger">*</span></label>
        <input id="inputTitle" type="text" name="fleet_brand" placeholder="Enter fleet_brand" class="form-control">
        @error('fleet_brand')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>

        <div class="form-group">
          <label for="inputTitle" class="col-form-label">recurring_cost <span class="text-danger">*</span></label>
        <input id="inputTitle" type="number" name="recurring_cost" placeholder="Enter recurring_cost" class="form-control">
        @error('recurring_cost')
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