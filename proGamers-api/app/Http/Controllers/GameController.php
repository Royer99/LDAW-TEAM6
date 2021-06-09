<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GameController extends Controller
{
    /**
     * @group Game management
     * Game.index
     *
     * Este endpoint permite consultar todos los juegos fisicos registrados por usuario.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

   /**
     * @group Game management
     * Game.store
     * 
     * Este endpoint permite registart un nuevo juego fisico.
     * 
     * 
     * @param required title_id Example: '1'.
     * @param required user_id Example: '1'.
     * @param required platform_id Example: '1'.
     * @param required description Example: 'presenta pequenos defectos'. 
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
        $validator = Validator::make($request->all(), [
            'title_id' => 'required',
            'user_id' => 'required',
            'platform_id' => 'required',
            'description' => 'required',
        ]);

        if ($validator->fails()) {
            return response([
                "id" => null,
                "success" => false,
                "message" => 'Los campos no cumplen las validaciones.'
            ], 422);
        }
        $game=new Game;
        $game->title_id=$request->title_id;
        $game->user_id=$request->user_id;
        $game->platform_id=$request->platform_id;
        $game->description=$request->description;
        try {
        $game->save();
        }catch(\Exception $e) {
            return response([
                'id' => null,
                'success' => false,
                'message' => "Hubo un error al crear el juego fisico."
            ], 400);
        }
        return response([
            "id" => $game->id,
            "success" => true,
            "message" => "Se ha registrado el nuevo juego fisico correctamente."
        ], 200);
    }

    /**
     * @hideFromAPIDocumentation
     * @group Game management
     * Game.show
     *
     * 
     * Este endpoint permite visualizar un juego fisico en especifico.
     * 
     * @param  \App\Models\Title  $title
     * @return \Illuminate\Http\Response
     * 
     * @response 200 
     *       {
     *          "id":"1",
     *          "title_id": "1",
     *          "user_id": "1",
     *          "platform_id": "1",
     *          "description": "presenta pequenos defectos."
     *        }
     */
    public function show(Game $game)
    {
        //
    }

    /**
     * @hideFromAPIDocumentation
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Game $game)
    {
        //
    }

    /**
     * @hideFromAPIDocumentation
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function destroy(Game $game)
    {
        //
    }
}
