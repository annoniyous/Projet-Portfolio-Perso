<?php

namespace App\Http\Controllers;

use App\Models\Aboutli;
use Illuminate\Http\Request;

class AboutliController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aboutlis = Aboutli::all();
        return view('backoffice.Aboutli', compact('aboutlis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.pages.create.createAboutli');
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
            "icone"=>'required',
            "li"=>'required'
            
        ]);

        $store = new Aboutli;
        $store->icone = $request->icone;
        $store->li = $request->li;
       
        $store->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Aboutli  $socialicone
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show = Aboutli::find($id);
         return view('backoffice.pages.show.showAboutli', compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Aboutli  $socialicone
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Aboutli::find($id);
        return view('backoffice.pages.edit.editAboutli', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Aboutli  $socialicone
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validate
        $validation = $request->validate([
            "icone"=>'required',
            "li"=>'required',
            
        ]);

        $update = Aboutli::find($id);
        $update->icone = $request->icone;
        $update->li = $request->li;
        $update->save();
        return redirect('/aboutlis');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aboutli  $socialicone
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = Aboutli::find($id);
        $destroy->delete();
        return redirect('/aboutlis');
    }
    public function destroyAllAboulis()
    {
        $destroyall = Aboutli::all();
        foreach ($destroyall as $destroy){
            $destroy->delete();
        }
        return redirect('/aboutlis');
        
        
    }
}
