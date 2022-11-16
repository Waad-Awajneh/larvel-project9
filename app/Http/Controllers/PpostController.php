<?php

namespace App\Http\Controllers;

use App\Models\Ppost;
use Illuminate\Http\Request;

class PpostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $Ppost = Ppost::all();

        return response()->json($Ppost);
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
        $data = Ppost::create($request->all());

        return response()->json($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ppost  $ppost
     * @return \Illuminate\Http\Response
     */
    public function show(Ppost $ppost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ppost  $ppost
     * @return \Illuminate\Http\Response
     */
    public function edit(Ppost $ppost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ppost  $ppost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ppost $ppost)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ppost  $ppost
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ppost $ppost)
    {
        //
    }
}