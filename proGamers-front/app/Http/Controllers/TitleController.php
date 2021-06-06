<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Title;
use Illuminate\Support\Facades\Validator;

class TitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        //dd(Title::getTitles());
        $titles=Title::getTitles();
        //dd($titles);
        return view("indexTitles",["titles"=>$titles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("registarTitulo");
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
           'title'=>'required|max:255',
           'description'=>'required|max:255',
           'edition'=>'required|max:255',
           'version'=>'required|max:255',
           'image'=>'required'
        ]);
        
        if($validator->fails()){
            return redirect('title/create')
                    ->withErrors($validator)
                    ->withInput();
        }

        $imageUrl=$request->file('image')->storePublicly('public/TitleImage');
        $titleData=["title"=>$request->title,
                "description"=>$request->description,
                "edition"=>$request->edition,
                "version"=>$request->version,
                "image"=>$imageUrl];
        $title=Title::insertTitle($titleData);    
        
        $wasSuccessful = $title[0];
        $message = $title[1];

        if ($wasSuccessful) {
            return redirect()->route('title')
                    ->with('success', $message);
        };

        return redirect()->route('title.create')
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
