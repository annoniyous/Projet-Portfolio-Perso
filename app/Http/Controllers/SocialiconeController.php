<?php

namespace App\Http\Controllers;

use App\Models\Socialicone;
use Illuminate\Http\Request;

class SocialiconeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $socialicones = Socialicone::all();
        return view('backoffice.backoffice', compact('socialicones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.pages.create.createSocialicone');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate
        $validation = $request->validate([
            "href"=>'required',
            "class"=>'required',
            "icone"=>'required'
        ]);

        $store = new Socialicone;
        $store->href = $request->href;
        $store->class = $request->class;
        $store->icone = $request->icone;
        $store->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Socialicone  $socialicone
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show = Socialicone::find($id);
         return view('backoffice.pages.show.showSocialicone', compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Socialicone  $socialicone
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Socialicone::find($id);
        return view('backoffice.pages.edit.editSocialicone', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Socialicone  $socialicone
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validate
        $validation = $request->validate([
            "href"=>'required',
            "class"=>'required',
            "icone"=>'required'
        ]);

        $update = Socialicone::find($id);
        $update->href = $request->href;
        $update->class = $request->class;
        $update->icone = $request->icone;
        $update->save();
        return redirect('/socialicones');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Socialicone  $socialicone
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = Socialicone::find($id);
        $destroy->delete();
        return redirect('/socialicones');
    }
    public function destroyAllSocialicones()
    {
        $destroyall = Socialicone::all();
        foreach ($destroyall as $destroy){
            $destroy->delete();
        }
        return redirect('/socialicones');
        
        
    }
}
