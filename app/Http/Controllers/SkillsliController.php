<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;

class SkillsliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skillslis = Skill::all();
        return view('backoffice.Skillsli', compact('skillslis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.pages.create.createSkillsli');
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
            "nom" => 'required',
            "pourcent" => 'required',
            "airav" => 'required',
            "airam" => 'required'

        ]);

        $store = new Skill;
        $store->icone = $request->icone;
        $store->li = $request->li;

        $store->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Skillsli  $socialicone
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show = Skill::find($id);
        return view('backoffice.pages.show.showSkillsli', compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Skillsli  $socialicone
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Skill::find($id);
        return view('backoffice.pages.edit.editSkillsli', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Skillsli  $socialicone
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validate
        $validation = $request->validate([
            "nom" => 'required',
            "pourcent" => 'required',
            "airav" => 'required',
            "airam" => 'required',


        ]);

        $update = Skill::find($id);
        $update->icone = $request->icone;
        $update->li = $request->li;
        $update->save();
        return redirect('/skillslis');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Skillsli  $socialicone
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = Skill::find($id);
        $destroy->delete();
        return redirect('/skillslis');
    }
    public function destroyAllSkillsli()
    {
        $destroyall = Skill::all();
        foreach ($destroyall as $destroy) {
            $destroy->delete();
        }
        return redirect('/skillslis');
    }
}
