<?php

namespace App\Http\Controllers;

use App\Models\Portfolioimg;
use Illuminate\Http\Request;

class PortfolioimgController extends Controller
{
          /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolioimgs = Portfolioimg::all();
        return view('backoffice.Portfolioimg', compact('portfolioimgs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.pages.create.createPortfolioimg');
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
            "src"=>'required',
            "name"=>'required',
            "p"=>'required',
            "href"=>'required',
            "filter"=>'required'
            
        ]);

        $store = new Portfolioimg;
        $store->src = $request->src;
        $store->name = $request->name;
        $store->p = $request->p;
        $store->href = $request->href;
        $store->filter = $request->filter;
       
        $store->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Portfolioimg  $socialicone
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show = Portfolioimg::find($id);
         return view('backoffice.pages.show.showPortfolioimg', compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portfolioimg  $socialicone
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Portfolioimg::find($id);
        return view('backoffice.pages.edit.editPortfolioimg', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portfolioimg  $socialicone
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validate
        $validation = $request->validate([
            "src"=>'required',
            "name"=>'required',
            "p"=>'required',
            "href"=>'required',
            "filter"=>'required'
            
        ]);

        $update = Portfolioimg::find($id);
        $update->src = $request->src;
        $update->li = $request->li;
        $update->p = $request->p;
        $update->href = $request->href;
        $update->filter = $request->filter;
        $update->save();
        return redirect('/portfolioimgs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portfolioimg  $socialicone
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = Portfolioimg::find($id);
        $destroy->delete();
        return redirect('/portfolioimgs');
    }
    public function destroyAllPortfolioimgs()
    {
        $destroyall = Portfolioimg::all();
        foreach ($destroyall as $destroy){
            $destroy->delete();
        }
        return redirect('/portfolioimgs');
        
        
    }
}
