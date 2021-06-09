<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * @hideFromAPIDocumentation
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * @group User management
     * User.store
     * 
     * 
     * Este endpoint permite registart un nuevo usuario.
     * 
     * @response 200 
     *       {"id" : "1",
     *       "success" : "true",
     *       "message" : "Se ha registrado el nuevo titulo correctamente."}
     *  
     */
    public function store(Request $request)
    {
        $user=new user;
        $user->name=$request->user['name'];
        $user->last_name=$request->user['last_name'];
        $user->last_name2=$request->user['last_name2'];
        $user->phone_number=$request->user['phone_number'];
        $user->email=$request->user['email'];
        $user->role_id=2;
        $user->password=hash::make($request->user['password']);
        $user->save();
        
        //return ($user);
        return response([
            "id" => $user->id,
            "success" => true,
            "message" => "Se ha registrado el nuevo juego fisico correctamente."
        ], 200);
    }

    /**
     * @hideFromAPIDocumentation
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * @hideFromAPIDocumentation
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * @hideFromAPIDocumentation
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
