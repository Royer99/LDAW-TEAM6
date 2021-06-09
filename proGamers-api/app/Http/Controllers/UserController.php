<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'last_name' => 'required',
            'last_name2' => 'required',
            'phone_number' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return response([
                "id" => null,
                "success" => false,
                "message" => 'Los campos no cumplen las validaciones.'
            ], 422);
        }

        $user=new user;
        $user->name=$request->name;
        $user->last_name=$request->last_name;
        $user->last_name2=$request->last_name2;
        $user->phone_number=$request->phone_number;
        $user->email=$request->email;
        $user->role_id=2;
        $user->password=hash::make($request->password);
        try {
        $user->save();
        }catch(\Exception $e) {
            return response([
                'id' => null,
                'success' => false,
                'message' => "Hubo un error al crear el usuario, Intente con otro correo."
            ], 400);
        }
        return response([
            "id" => $user->id,
            "success" => true,
            "message" => "Se ha registrado el nuevo usuario correctamente."
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
