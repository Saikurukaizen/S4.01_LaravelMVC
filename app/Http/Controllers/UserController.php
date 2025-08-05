<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('users.index');
    }

    public function create(){
        return view('users.create');
    }

    public function show($idUser){

        //compact('idUser') me genera un array ['idUser' => $idUser]
        //Es lo mismo que lo que hemos hecho en el metodo view()
    
        return view('users.show', [
            'idUser' => $idUser
        ]);
    }
}
