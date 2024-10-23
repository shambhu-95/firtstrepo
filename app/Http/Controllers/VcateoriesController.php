<?php

namespace App\Http\Controllers;

use App\Models\Vcateories;
use Illuminate\Http\Request;

class VcateoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $vcateories=Vcateories::orderBy('id','DESC')->paginate();
        return view('backend.vcateories.index')->with('vcateories',$vcateories);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Vcateories $vcateories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vcateories $vcateories)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vcateories $vcateories)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vcateories $vcateories)
    {
        //
    }
}
