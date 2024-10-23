<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $vehicle=Vehicle::orderBy('id','DESC')->paginate();
        return view('backend.vehicle.index')->with('vehicle',$vehicle);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.vehicle.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'model'=>'string|required',
            'licence_plate'=>'string|nullable',
            'tag'=>'string|nullable',
            'category'=>'string|nullable',
            'driver'=>'string|required',
            'assignment_date'=>'string|nullable',
            'order_date'=>'date',
            'chasis_number'=>'string|nullable',
            'fleet_manager'=>'string|nullable',
            'location'=>'string|nullable',
        ]);

        $data=$request->all();
        // return $data;
        $status=Vehicle::create($data);
        if($status){
            request()->session()->flash('success','Vehicle successfully created');
        }
        else{
            request()->session()->flash('error','Error, Please try again');
        }
        return redirect()->route('vehicles.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Vehicle $vehicle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vehicle $vehicle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vehicle $vehicle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vehicle $vehicle)
    {
        //
    }
}
