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
        $titles=Title::getTitles();
        $titlesx=[];
        foreach($titles as $title){
            $titlex['id']=$title['id'];
            $titlex['title']=$title['title'];
            $titlex['description']=$title['description'];
            $titlex['edition']=$title['edition'];
            $titlex['version']=$title['version'];
            $titlepath=explode("public",$title['image']);
            if(count($titlepath)>1){
                $titlex['image']=$titlepath[1];
            }else{
                $titlex['image']=$title['image'];
            }
            $titlesx[]=$titlex;
        }
        return view("indexTitles",["titles"=>$titlesx]);
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
            return redirect()->route('title.index')
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
        $title=Title::getById($id);
        $titlepath=explode("public/",$title['image']);
        if(count($titlepath)>1){
            $title['image']=$titlepath[1];
        }else{
            $title['image']=$title['image'];
        }
        return(view('showTitles',['title'=>$title]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $title=Title::getById($id);
        $titlepath=explode("public/",$title['image']);
        if(count($titlepath)>1){
            $title['image']=$titlepath[1];
        }else{
            $title['image']=$title['image'];
        }
        return(view('editTitles',['title'=>$title]));
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
        $validator=Validator::make($request->all(),[
            'title'=>'required|max:255',
            'description'=>'required|max:255',
            'edition'=>'required|max:255',
            'version'=>'required|max:255',
            'image'=>'required',
            'originalPath'=>'required'
         ]);
         
         if($validator->fails()){
             return redirect('title/create')
                     ->withErrors($validator)
                     ->withInput();
         }
         
         if($request->originalPath==$request->file('image')->getClientOriginalName()){
            $imageUrl='public/'.$request->originalPath;
         }else{
            $imageUrl=$request->file('image')->storePublicly('public/TitleImage');
         }
         $titleData=["title"=>$request->title,
                 "description"=>$request->description,
                 "edition"=>$request->edition,
                 "version"=>$request->version,
                 "image"=>$imageUrl];
         $title=Title::update($id,$titleData);    
         $wasSuccessful = $title[0];
         $message = $title[1];
 
         if ($wasSuccessful) {
             return redirect()->route('title.index')
                     ->with('success', $message);
         };
 
         return redirect()->route('title.edit')
             ->with('error', $message);
 
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
