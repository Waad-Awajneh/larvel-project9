<?php

namespace App\Http\Controllers;

use App\Models\Lifestyle;
use Illuminate\Http\Request;

class LifestyleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $lifestyle = Lifestyle::all();

        return response()->json($lifestyle);
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
     * @param  \App\Models\Lifestyle  $lifestyle
     * @return \Illuminate\Http\Response
     */
    public function show(Lifestyle $lifestyle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lifestyle  $lifestyle
     * @return \Illuminate\Http\Response
     */
    public function edit(Lifestyle $lifestyle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lifestyle  $lifestyle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lifestyle $lifestyle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lifestyle  $lifestyle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lifestyle $lifestyle)
    {
        //
    }
}