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

    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required|string|max:50',
            'description' => 'required|string|max:255',
        ]);

        Discipline::create($validated);

        return redirect()->route('disciplines.index')
        ->with('success', 'Discipline added successfully');
    }

    public function show($discipline){
        $discipline = Discipline::findOrFail($discipline);

        return view('disciplines.show', [
            'discipline' => $discipline,
        ]);
    }
}
