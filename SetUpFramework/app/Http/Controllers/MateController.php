<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MateController extends Controller
{
    
    
    private $mates = [
        "A01209929" => [
            "photoDir" => "https://d32dm0rphc51dk.cloudfront.net/ITroKwWUgrsFlax-zrHhBQ/large.jpg",
            "name" => "Jorge Sánchez Arreola",
            "matricula" => "A01209929",
            "descripcion" => "
            <br>1. Solamente GitHub para versiones de control, la versión de desktop y en linea de comandos
            <br>2. Para gestión de proyectos Trello principalmente
            <br>3. Medios de comunicación con profesores y compañeros Slack, whatsapp, remind y correo electrónico
            <br>4. Framework de backend conozco los principales pero nunca los he utilizado en algún proyecto
            <br>5. He utilizado Bootstrap y Materialize para frontend"
        ],
        "A01265529" => [
            "photoDir" => "https://historia-arte.com/_/eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpbSI6WyJcL2FydHdvcmtcL2ltYWdlRmlsZVwvMjAxOC1vbmUtYmFzcXVpYXQtOTc2MS1iYXNxdWlhdC11bnRpdGxlZC1oaWdoLXJlcy0yMDAwdy5qcGciLCJyZXNpemUsODAwIl19.qLG3D-GgPEc2XtGFNDjruT/ppUoZHNMWT45oyt5l9GQA.jpg",
            "name" => "Royer Arenas Donnet",
            "matricula" => "A01265529",
            "descripcion" => "
            3. Medios de comunicación con profesores y compañeros Slack, whatsapp, remind y correo electrónico
            4. Framework de backend conozco los principales pero nunca los he utilizado en algún proyecto
            5. He utilizado Bootstrap y Materialize para frontend"
        ],
        "A01420666" => [
            "photoDir" => "https://observer.com/wp-content/uploads/sites/2/2020/06/Jean-Michel-Basquiat-Untitled-Head.jpg?quality=80",
            "name" => "Luis Jesus Campos",
            "matricula" => "A01420666",
            "descripcion" => "
            4. Framework de backend conozco los principales pero nunca los he utilizado en algún proyecto
            5. He utilizado Bootstrap y Materialize para frontend"
        ]
    ];
    public function listMate(){
        //echo 'hello world';   
        return view("teamHome", ["mateList" => $this->mates]);
    }

    public function specificmate($mateId){
        $mate = $this->mates[$mateId];
        return view("teamMember", ["mate" => $mate]);
    }

}
