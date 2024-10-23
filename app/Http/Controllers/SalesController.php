<?php

namespace App\Http\Controllers;

use App\Models\Sales;
use App\Models\Customer;
use App\Models\Inventory;
use App\Models\Locations;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.sales.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $customer=Customer::get();
        $inventory=Inventory::get();
        $location=Locations::get();
        return view('backend.sales.create')->with('customer',$customer)->with('inventory',$inventory)->with('location',$location);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,
        [
            'cust_id'=>'exists:customers,id',
            'inventory_id'=>'exists:inventories,id',
            'sales_date'=>'date',
            'loc_id'=>'exists:locations,id',
            'quantity'=>"required|numeric",
            'total_amount'=>"required|numeric",
            
        ]);

        $data=$request->all();
        // return $data;
        $status=Sales::create($data);
        if($status){
            request()->session()->flash('success','sales successfully created');
        }
        else{
            request()->session()->flash('error','Error, Please try again');
        }
        return redirect()->route('sales.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sales $sales)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sales $sales)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sales $sales)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sales $sales)
    {
        //
    }
}
