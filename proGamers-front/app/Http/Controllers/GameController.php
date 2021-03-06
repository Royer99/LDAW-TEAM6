<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Title;
use App\Models\Platform;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $titles=Title::getTitles();
        $platforms=Platform::getPlatforms();
        $token = Auth::user()->token;
        $user=User::requestUser($token);
        return view('createGame',['titles'=>$titles,'platforms'=>$platforms,'user'=>$user]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator=Validator::make($request->all(),[
            'title_id'=>'required|max:255',
            'user_id'=>'required|max:255',
            'platform_id'=>'required|max:255',
            'description'=>'required|max:255'
         ]);
         
         if($validator->fails()){
             return redirect('game/create')
                     ->withErrors($validator)
                     ->withInput();
         }
         
         $game=Game::insertGame($request->title_id,$request->user_id,$request->platform_id,$request->description);    
         $wasSuccessful = $game[0];
         $message = $game[1];
 
         if ($wasSuccessful) {
             return redirect()->route('title.index')
                     ->with('success', $message);
         };
 
         return redirect()->route('game.create')
             ->with('error', $message);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function show(Game $game)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function edit(Game $game)
    {
        //
    }

    /**
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
