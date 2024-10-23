<?php

namespace App\Http\Controllers;

use App\Models\Fleetcontgract;
use Illuminate\Http\Request;

class FleetcontgractController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fleetcontgract=Fleetcontgract::orderBy('id','DESC')->paginate();
        return view('backend.fleetcontgract.index')->with('fleetcontgract',$fleetcontgract);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.fleetcontgract.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,
        [
            
            'rentbyhour'=>'',
            'rentstartdate'=>'date',
            
            'rentenddate'=>'date',
            'vehicle'=>'string',
            'sales_person'=>'string',
            'attachment'=>'string',
            'firstpayment'=>'string',
            'fleet_color'=>'string',
            'fleet_brand'=>'string',
            'recurring_cost'=>'',
           
            
            
        ]);

        $data=$request->all();
        // return $data;
        $status=Fleetcontgract::create($data);
        if($status){
            request()->session()->flash('success','Fleetcontgract successfully created');
        }
        else{
            request()->session()->flash('error','Error, Please try again');
        }
        return redirect()->route('fleetcontracts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Fleetcontgract $fleetcontgract)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fleetcontgract $fleetcontgract)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Fleetcontgract $fleetcontgract)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fleetcontgract $fleetcontgract)
    {
        //
    }
}
