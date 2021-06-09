<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
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
        return(view('createUser'));
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
            'name'=>'required|max:255',
            'last_name'=>'required|max:255',
            'last_name2'=>'required|max:255',
            'phone_number'=>'required|max:255',
            'email'=>'required|max:255',
            'password'=>'required|max:255'
         ]);
         
         if($validator->fails()){
             //dd('fallo');
             return redirect('user/create')
                     ->withErrors($validator)
                     ->withInput();
         }
         
         $user=User::insertUser($request->name,$request->last_name,$request->last_name2,$request->phone_number,$request->email,$request->password);   
         $wasSuccessful = $user[0];
         $message = $user[1];
 
         if ($wasSuccessful) {
             return redirect()->route('title.index')
                     ->with('success', $message);
         };
 
         return redirect()->route('user.create')
             ->with('error', $message);
    }

    /**
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
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
