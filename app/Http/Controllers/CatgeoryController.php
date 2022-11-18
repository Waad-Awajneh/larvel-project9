<?php

namespace App\Http\Controllers;

use App\Models\catgeory;
use Illuminate\Http\Request;

class CatgeoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $catgeory = catgeory::all();

        return response()->json($catgeory);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\catgeory  $catgeory
     * @return \Illuminate\Http\Response
     */
    public function show(catgeory $catgeory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\catgeory  $catgeory
     * @return \Illuminate\Http\Response
     */
    public function edit(catgeory $catgeory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\catgeory  $catgeory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, catgeory $catgeory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\catgeory  $catgeory
     * @return \Illuminate\Http\Response
     */
    public function destroy(catgeory $catgeory)
    {
        //
    }
}