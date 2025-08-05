<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DisciplineController extends Controller
{
    public function index(){
        return "Lista de disciplinas";
    }

    public function show($idDisc){
        return "Ficha de la disciplina con ID: " . $idDisc;
    }
}
