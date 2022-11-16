<?php

namespace App\Http\Controllers;

use App\Models\World;
use Doctrine\Inflector\Rules\Word;
use Illuminate\Http\Request;

class WorldController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $world = World::all();

        return response()->json($world);
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

        $data = World::create($request->all());

        return response()->json($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\World  $world
     * @return \Illuminate\Http\Response
     */
    public function show(World $world)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\World  $world
     * @return \Illuminate\Http\Response
     */
    public function edit(World $world)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\World  $world
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, World $world)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\World  $world
     * @return \Illuminate\Http\Response
     */
    public function destroy(World $world)
    {
        //
    }
}