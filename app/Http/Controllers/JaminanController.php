<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreJaminanRequest;
use App\Http\Requests\UpdateJaminanRequest;
use App\Models\Jaminan;

class JaminanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreJaminanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreJaminanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jaminan  $jaminan
     * @return \Illuminate\Http\Response
     */
    public function show(Jaminan $jaminan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jaminan  $jaminan
     * @return \Illuminate\Http\Response
     */
    public function edit(Jaminan $jaminan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateJaminanRequest  $request
     * @param  \App\Models\Jaminan  $jaminan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateJaminanRequest $request, Jaminan $jaminan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jaminan  $jaminan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jaminan $jaminan)
    {
        //
    }
}
