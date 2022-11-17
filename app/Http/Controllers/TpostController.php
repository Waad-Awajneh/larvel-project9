<?php

namespace App\Http\Controllers;

use App\Models\Tpost;
use Illuminate\Http\Request;

class TpostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $tpost = Tpost::all();

        return response()->json($tpost);
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
     * @param  \App\Models\Tpost  $tpost
     * @return \Illuminate\Http\Response
     */
    public function show(Tpost $tpost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tpost  $tpost
     * @return \Illuminate\Http\Response
     */
    public function edit(Tpost $tpost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tpost  $tpost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tpost $tpost)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tpost  $tpost
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tpost $tpost)
    {
        //
    }
}