<?php

namespace App\Http\Controllers;

use App\Models\Title;
use Illuminate\Http\Request;

class TitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Title::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $title=new Title;
        $title->title=$request->title['title'];
        $title->description=$request->title['description'];
        $title->edition=$request->title['edition'];
        $title->version=$request->title['version'];
        $title->image=$request->title['image'];
        $title->save();
        return response([
            "id" => $title->id,
            "success" => true,
            "message" => "Se ha registrado el nuevo titulo correctamente."
        ], 200);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Title  $title
     * @return \Illuminate\Http\Response
     */
    public function show(Title $title)
    {
        return $title;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Title  $title
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Title $title)
    {
        $title->title=$request->title['title'];
        $title->description=$request->title['description'];
        $title->edition=$request->title['edition'];
        $title->version=$request->title['version'];
        $title->image=$request->title['image'];
        $title->save();
        return response([
            "id" => $title->id,
            "success" => true,
            "message" => "Se ha registrado el nuevo titulo correctamente."
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Title  $title
     * @return \Illuminate\Http\Response
     */
    public function destroy(Title $title)
    {
        //
    }
}
