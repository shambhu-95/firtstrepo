@extends('backend.layouts.master')
@section('title','RideU || sales Create')
@section('main-content')

<div class="card">
    <h5 class="card-header">Add rental</h5>
    <div class="card-body">
      <form method="post" action="{{route('sales.store')}}">
        {{csrf_field()}}
        <div class="form-group">
        <label for="cust_id">cust id</label>
        <select name="cust_id" id="cust_id" class="form-control">
            <option value="">--Select any customer id--</option>
            @foreach($customer as $key=>$customer)
                <option value='{{$customer->id}}'>{{$customer->first_name}}</option>
            @endforeach
        </select>
        </div>

        <div class="form-group">
        <label for="inventory_id">inventory id</label>
        <select name="inventory_id" id="inventory_id" class="form-control">
            <option value="">--Select any inventory id--</option>
            @foreach($inventory as $key=>$inventory)
                <option value='{{$inventory->id}}'>{{$inventory->item_name}}</option>
            @endforeach
        </select>
        </div>

        <div class="form-group">
        </select>sales_date
        <label for="inputTitle" class="col-form-label">rental_start <span class="text-danger">*</span></label>
        <input id="inputTitle" type="date" name="sales_date" placeholder="Enter sales_date"  class="form-control">
        @error('sales_date')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>


        <div class="form-group">
        <label for="loc_id">location id</label>
        <select name="loc_id" id="loc_id" class="form-control">
            <option value="">--Select any loc_id--</option>
            @foreach($location as $key=>$loc_data)
                <option value='{{$loc_data->id}}'>{{$loc_data->location}}</option>
            @endforeach
        </select>
        </div>

       

        

        <div class="form-group">
        </select>quantity
        <label for="inputTitle" class="col-form-label">quantity <span class="text-danger">*</span></label>
        <input id="inputTitle" type="number" name="quantity" placeholder="Enter quantity"  class="form-control">
        @error('quantity')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>

        <div class="form-group">
        </select>total_amount
        <label for="inputTitle" class="col-form-label">total_amount <span class="text-danger">*</span></label>
        <input id="inputTitle" type="number" name="total_amount" placeholder="Enter total_amount"  class="form-control">
        @error('total_amount')
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