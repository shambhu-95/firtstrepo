<?php

namespace App\Http\Controllers;

use App\Models\Locations;
use Illuminate\Http\Request;

class LocationsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $location=Locations::orderBy('id','DESC')->paginate();
        return view('backend.location.index')->with('location',$location);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.location.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,
        [
            'location'=>'string|required',
            'parentlocation'=>'string',
            
            
        ]);

        $data=$request->all();
        // return $data;
        $status=Locations::create($data);
        if($status){
            request()->session()->flash('success','Locations successfully created');
        }
        else{
            request()->session()->flash('error','Error, Please try again');
        }
        return redirect()->route('location.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Locations $locations)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Locations $locations)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Locations $locations)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Locations $locations)
    {
        //
    }
}
