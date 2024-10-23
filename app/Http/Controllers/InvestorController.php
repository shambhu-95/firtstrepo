<?php

namespace App\Http\Controllers;

use App\Models\Investor;
use Illuminate\Http\Request;

class InvestorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.investor.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.investor.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,
        [
            
            'investor_name'=>'required|string',
            'phone'=>'required|numeric',
            
            'email'=>'required|email',
            'investment'=>"required|numeric",
            'Address'=>'required|string',
            'date_of_invest'=>'required|date',
            
           
            
            
        ]);

        $data=$request->all();
        // return $data;
        $status=Investor::create($data);
        if($status){
            request()->session()->flash('success','Investor successfully created');
        }
        else{
            request()->session()->flash('error','Error, Please try again');
        }
        return redirect()->route('investor.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Investor $investor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Investor $investor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Investor $investor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Investor $investor)
    {
        //
    }
}
