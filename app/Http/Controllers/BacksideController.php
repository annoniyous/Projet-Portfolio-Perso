<?php

namespace App\Http\Controllers;

use App\Models\Backside;
use Illuminate\Http\Request;

class BacksideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backoffice.backoffice');
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
     * @param  \App\Models\Backside  $backside
     * @return \Illuminate\Http\Response
     */
    public function show(Backside $backside)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Backside  $backside
     * @return \Illuminate\Http\Response
     */
    public function edit(Backside $backside)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Backside  $backside
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Backside $backside)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Backside  $backside
     * @return \Illuminate\Http\Response
     */
    public function destroy(Backside $backside)
    {
        //
    }
}
