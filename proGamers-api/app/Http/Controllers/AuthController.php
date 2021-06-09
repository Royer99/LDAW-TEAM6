<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Se importa el modelo de usuario para usar sus métodos en la autenticación
use App\Models\User;

//Importar la clase HASH para manejar el hasheo de contraseñas
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller{
    function test(Request $request){
        return "weeeeee";
    }
    
    /**
     * @group Auth management
     * Auth.login
     * 
     *
     * Este endpoint permite autenticar a los usarios.
     * 
     * @response 200 
     *       {"token" : "2|0WPiVJEofvAesg3VwkX99UOoMgaZoscX65XU44jJ"}
     */
    function login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'device_name' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();
        if (! $user || !Hash::check($request->password, $user->password)){
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }

        return [
                "token" => $user->createToken($request->device_name)->plainTextToken
            ];
    }

    /**
     * @group User management
     * User.getUser
     *
     * 
     * Este endpoint permite consultar los atributos del usuario logeado.
     * 
     * @response 200 
     *       {"id" : "1",
     *       "email" : "true",
     *       "role" : "Se ha registrado el nuevo titulo correctamente.",
     *       "privileges" : [1,2]}
     *  
     */
    public function getUser(Request $request){

        $user = $request->user();

        return [
            "id" => $user->id,
            "email" => $user->email,
            "name" => $user->name,
            "role" => $user->role->name,
            "privileges" => $user->getPrivilegesList()
        ];

    }

    /**
     * @group Auth management
     * Auth.logout
     *
     * 
     * Este endpoint permite terminar las sesiones de un usuario logeado.
     * 
     *  
     */
    function logout(Request $request){
        // Revoke all tokens...
        $request->user()->tokens()->delete();
    }

}
