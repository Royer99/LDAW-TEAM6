<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

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
        return Game::all();
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
        $game=new Game;
        $game->title_id=$request->game['title_id'];
        $game->user_id=$request->game['user_id'];
        $game->platform_id=$request->game['platform_id'];
        $game->description=$request->game['description'];
        $game->save();
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

    public function getGamesTitle($id){
        $games = Game::where('games.title_id', $id)->get();
        $gamesData = [];
        foreach ($games as $game) {
            $gamesData [] = [
                "title_name" => $game->title->title,
                "description" => $game->description,
                "platform" => $game->platform->description,
                "user_name" => $game->user->name
            ];
        }
            
        return $gamesData;
    }
}
