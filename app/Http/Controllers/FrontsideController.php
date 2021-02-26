<?php

namespace App\Http\Controllers;

use App\Models\Frontside;
use Illuminate\Http\Request;
use App\Models\Navlink;
use App\Models\Headtiltle;
use App\Models\Secondtitle;
use App\Models\Socialicone;
use App\Models\Sectiontiltle;
use App\Models\Aboutdescription;
use App\Models\Aboutimg;
use App\Models\Aboutli;


class FrontsideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Home
        $navlink = Navlink::all();
        $headtitle = Headtiltle::all();
        $secondtitle = Secondtitle::all();
        $socialicone = Socialicone::all();
        // About + All titles
        $sectiontitle = Sectiontiltle::all();
        $aboutdescription = Aboutdescription::all();
        $aboutimg = Aboutimg::all();
        $aboutli = Aboutli::all();
        // Skills
        


        return view('welcome', compact('navlink','headtitle','secondtitle','socialicone','sectiontitle','aboutdescription','aboutimg','aboutli'));
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
     * @param  \App\Models\Frontside  $frontside
     * @return \Illuminate\Http\Response
     */
    public function show(Frontside $frontside)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Frontside  $frontside
     * @return \Illuminate\Http\Response
     */
    public function edit(Frontside $frontside)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Frontside  $frontside
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Frontside $frontside)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Frontside  $frontside
     * @return \Illuminate\Http\Response
     */
    public function destroy(Frontside $frontside)
    {
        //
    }
}
