<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommunityController extends Controller
{
    public function index(){
        return "Lista de comunidades";
    }

    public function getCommunityById($idComm){
        return "Ficha de la comunidad con ID: " . $idComm;
    }
}
