<?php

namespace App\Http\Controllers;

use App\Models\warehouses;
use Illuminate\Http\Request;

class WarehousesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $warehouse=warehouses::orderBy('id','DESC')->paginate();
        return view('backend.warehouse.index')->with('warehouse',$warehouse);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.warehouse.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,
        [
            'warehouse'=>'string|required',
            'location'=>'string|required',
            'address'=>'string|required',
            'company'=>'string|required',
            
        ]);

        $data=$request->all();
        // return $data;
        $status=warehouses::create($data);
        if($status){
            request()->session()->flash('success','Warehouse successfully created');
        }
        else{
            request()->session()->flash('error','Error, Please try again');
        }
        return redirect()->route('warehouse.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(warehouses $warehouses)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(warehouses $warehouses)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, warehouses $warehouses)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(warehouses $warehouses)
    {
        //
    }
}
