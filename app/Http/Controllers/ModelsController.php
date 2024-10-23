<?php

namespace App\Http\Controllers;

use App\Models\Models;
use Illuminate\Http\Request;

class ModelsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $models=Models::orderBy('id','DESC')->paginate();
        return view('backend.models.index')->with('models',$models);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.models.create');
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
        $status=Models::create($data);
        if($status){
            request()->session()->flash('success','accessories successfully created');
        }
        else{
            request()->session()->flash('error','Error, Please try again');
        }
        return redirect()->route('models.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Models $models)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Models $models)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Models $models)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Models $models)
    {
        //
    }
}
