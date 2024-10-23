<?php

namespace App\Http\Controllers;

use App\Models\Contracts;
use Illuminate\Http\Request;

class ContractsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contracts=Contracts::orderBy('id','DESC')->paginate();
        return view('backend.contracts.index')->with('contracts',$contracts);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.contracts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,
        [
            'name'=>'string',
            'reference'=>'string',
            'type'=>'string',
            
            'contract_start_date'=>'date',
            'contract_expiration_date'=>'date',
            'responsible'=>'string',
            'included_services'=>'string',
           
            
            
        ]);

        $data=$request->all();
        // return $data;
        $status=Contracts::create($data);
        if($status){
            request()->session()->flash('success','contracts successfully created');
        }
        else{
            request()->session()->flash('error','Error, Please try again');
        }
        return redirect()->route('contracts.index');
           
    }

    /**
     * Display the specified resource.
     */
    public function show(Contracts $contracts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contracts $contracts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contracts $contracts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contracts $contracts)
    {
        //
    }
}
