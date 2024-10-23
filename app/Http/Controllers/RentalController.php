<?php

namespace App\Http\Controllers;

use App\Models\Rental;
use App\Models\Locations;
use App\Models\Product;
use Illuminate\Http\Request;

class RentalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.rental.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $product=Product::get();
        $location=Locations::orderBy('id','DESC')->paginate();
        return view('backend.rental.create')->with('location',$location)->with('product',$product);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,
        [
            'customer'=>'string|required',
            'pickup_loc'=>'exists:locations,id',
            'drop_loc'=>'exists:locations,id',
            'bike_id'=>'exists:products,id',
            'rental_start'=>'date',
            'rental_end'=>'date',
            'total_amount'=>"required|numeric",
            'status'=>'required|in:active,inactive',
            
            
            
            
        ]);

        $data=$request->all();
        // return $data;
        $status=Rental::create($data);
        if($status){
            request()->session()->flash('success','rental successfully created');
        }
        else{
            request()->session()->flash('error','Error, Please try again');
        }
        return redirect()->route('rental.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Rental $rental)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rental $rental)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rental $rental)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rental $rental)
    {
        //
    }
}
