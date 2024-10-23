<?php

namespace App\Http\Controllers;

use App\Models\Stockpicking;
use Illuminate\Http\Request;

class StockpickingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stockpicking=Stockpicking::orderBy('id','DESC')->paginate();
        return view('backend.stockpicking.index')->with('stockpicking',$stockpicking);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.stockpicking.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,
        [
            'reference'=>'string',
            'from'=>'string',
            'to'=>'string',
            'contact'=>'string',
            'Date'=>'date',
            'document'=>'string',
           
            
            
        ]);

        $data=$request->all();
        // return $data;
        $status=Stockpicking::create($data);
        if($status){
            request()->session()->flash('success','operationtype successfully created');
        }
        else{
            request()->session()->flash('error','Error, Please try again');
        }
        return redirect()->route('stockpicking.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Stockpicking $stockpicking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Stockpicking $stockpicking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Stockpicking $stockpicking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Stockpicking $stockpicking)
    {
        //
    }
}
