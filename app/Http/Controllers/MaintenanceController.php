<?php

namespace App\Http\Controllers;

use App\Models\Maintenance;
use App\Models\Product;
use App\Models\Locations;
use Illuminate\Http\Request;

class MaintenanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.maintenance.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products=Product::get();
      
        $location=Locations::get();
        return view('backend.maintenance.create')->with('products',$products)->with('location',$location);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,
        [
            'bikecar_id'=>'exists:products,id',        
            'maintenance_date'=>'date',        
            'issue_reported'=>"required|string",
            'repair_cost'=>"required|numeric",
            'locat_id'=>'exists:locations,id',
            
        ]);

        $data=$request->all();
        // return $data;
        $status=Maintenance::create($data);
        if($status){
            request()->session()->flash('success','maintenance successfully created');
        }
        else{
            request()->session()->flash('error','Error, Please try again');
        }
        return redirect()->route('maintenance.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Maintenance $maintenance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Maintenance $maintenance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Maintenance $maintenance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Maintenance $maintenance)
    {
        //
    }
}
