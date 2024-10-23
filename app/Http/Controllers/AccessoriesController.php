<?php

namespace App\Http\Controllers;

use App\Models\Accessories;
use Illuminate\Http\Request;

class AccessoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $accessories=Accessories::orderBy('id','DESC')->paginate();
        return view('backend.accessories.index')->with('accessories',$accessories);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.accessories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request->all();
        $this->validate($request,[
            'name'=>'string|required',
            'price'=>'numeric|nullable',
            
        ]);
        $data=$request->all();
        // return $data;
        $status=Accessories::create($data);
        if($status){
            request()->session()->flash('success','accessories successfully created');
        }
        else{
            request()->session()->flash('error','Error, Please try again');
        }
        return redirect()->route('accessories.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Accessories $accessories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Accessories $accessories)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Accessories $accessories)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Accessories $accessories)
    {
        //
    }
}
