<?php

namespace App\Http\Controllers;

use App\Models\Discipline;
use Illuminate\Http\Request;

class DisciplineController extends Controller
{
    public function index(){

        $disciplines = Discipline::all();
        return view('disciplines.index', compact('disciplines'));
    }

    public function create(){
        return view('disciplines.create');
    }

    public function show($discipline){
        $discipline = Discipline::findOrFail($discipline);

        return view('disciplines.show', [
            'discipline' => $discipline,
        ]);
    }
}
