<?php

namespace App\Http\Controllers;

use App\Models\Operation;
use Illuminate\Http\Request;

class OperationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $operation=Operation::orderBy('id','DESC')->paginate();
        return view('backend.operation.index')->with('operation',$operation);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.operation.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,
        [
            'operationtype'=>'string|required',
           
            
            
        ]);

        $data=$request->all();
        // return $data;
        $status=Operation::create($data);
        if($status){
            request()->session()->flash('success','operationtype successfully created');
        }
        else{
            request()->session()->flash('error','Error, Please try again');
        }
        return redirect()->route('operation.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Operation $operation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Operation $operation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Operation $operation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Operation $operation)
    {
        //
    }
}
