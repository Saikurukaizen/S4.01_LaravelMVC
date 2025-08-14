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

        $discipline = Discipline::create($validated);

        return redirect()->route('disciplines.index')
        ->with('success', 'Discipline added successfully: ' . $discipline->name);
    }

    public function show($id){
        $discipline = Discipline::findOrFail($id);

        return view('disciplines.show', [
            'discipline' => $discipline,
        ]);
    }

    public function edit($id){
        $discipline = Discipline::findOrFail($id);
        $action = route('disciplines.update', $discipline->id);
        return view('disciplines.update', compact('discipline', 'action'));
    }

    public function update(Request $request, $id){
        $validated = $request->validate([
            'name' => 'required|string|max:50',
            'description' => 'required|string|max:255',
        ]);

        $discipline = Discipline::findOrFail($id);
        $discipline->update($validated);

        return redirect()->route('disciplines.index')
        ->with('success', 'Updated successfully: ' . $discipline->name);
    }

    public function destroy($id){
        $discipline = Discipline::findOrFail($id);
        $discipline->delete();

        return redirect()->route('disciplines.index')
        ->with('success', 'Deleted successfully: ' . $discipline->name);
    }
}
