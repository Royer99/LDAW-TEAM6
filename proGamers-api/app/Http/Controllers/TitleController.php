<?php

namespace App\Http\Controllers;

use App\Models\Title;
use Illuminate\Http\Request;

class TitleController extends Controller
{
    /**
     * @group Title management
     * Title.index
     *
     * Este endpoint permite consultar todos los titulos registrados.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Title::all();
    }

    /**
     * @group Title management
     * Title.store
     * 
     * Este endpoint permite registart un nuevo titulo.
     * 
     * 
     * @param required title Example: Minecraft.
     * @param required description Example: Minecraft es un juego multiplataforma de exploracion.
     * @param required edition Example: Java.
     * @param required versio Example: 3.4.
     * @param required image Example: path.  
     * 
     *
     * 
     * @response 200 
     *       {"id" : "1",
     *       "success" : "true",
     *       "message" : "Se ha registrado el nuevo titulo correctamente."}
     *  
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
     * @group Title management
     * title.show
     *
     * Este endpoint permite visualizar un titulo en especifico.
     * 
     * @param  \App\Models\Title  $title
     * @return \Illuminate\Http\Response
     * 
     * @response 200 
     *       {
     *          "id":"1",
     *          "title":"Minecraft",
     *          "description":"Minecraft es un juego multiplataforma de exploracion",
     *          "edition":"java",
     *          "version":"2.3",
     *          "image":"path"
     *          }
     */
    public function show(Title $title)
    {
        return $title;
    }

    /**
     * @group Title management
     * Update the specified title.
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
     * @hideFromAPIDocumentation
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
