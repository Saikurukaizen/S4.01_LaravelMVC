<?php

namespace App\Http\Controllers;

use App\Models\Discipline;
use Illuminate\Http\Request;

class DisciplineController extends CrudController
{ 

    protected $model = Discipline::class;
    protected $viewFolder = 'disciplines';

    protected function validateData(Request $request){
        return $request->validate([
            'name' => 'required|string|max:50',
            'description' => 'required|string|max:255',
        ]);
    }

    
}
