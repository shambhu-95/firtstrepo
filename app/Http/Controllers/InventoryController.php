<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use App\Models\Locations;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inventory=Inventory::orderBy('id','DESC')->paginate();
        // return "Inventory index";
        return view('backend.inventory.index')->with('inventory',$inventory);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
        $location=Locations::orderBy('id','DESC')->paginate();
        // return "Inventory";
        return view('backend.inventory.create')->with('location',$location);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,
        [
            'item_name'=>'string|required',
            'type'=>'in:bikes,car',
            'stock_level'=>"required|numeric",
            'purchase_price'=>"required|numeric",
            'selling_price'=>"required|numeric",
            'loc_id'=>'exists:locations,id',
            
            
        ]);

        $data=$request->all();
        // return $data;
        $status=Inventory::create($data);
        if($status){
            request()->session()->flash('success','inventory successfully created');
        }
        else{
            request()->session()->flash('error','Error, Please try again');
        }
        return redirect()->route('inventory.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Inventory $inventory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Inventory $inventory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Inventory $inventory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Inventory $inventory)
    {
        //
    }
}
