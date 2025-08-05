<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return "Lista de usuarios";
    }

    public function create(){
        return "Formulario para crear un nuevo usuario";
    }

    public function show($idUser){
        return "Ficha del usuario con ID: " . $idUser;
    }
}
