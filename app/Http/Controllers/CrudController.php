<?php

namespace App\Http\Controllers;

use App\Http\Requests\DisciplineRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

abstract class CrudController extends Controller{

    protected $model;
    protected $viewFolder;

    public function index(){
        $items = $this->model::paginate(10);
        return view("{$this->viewFolder}.index", compact('items'));
    }

    public function create(){
        return view("{$this->viewFolder}.create");
    }

    public function store(Request $request): RedirectResponse{
        $validated = $this->validateData($request);
        $item = $this->model::create($validated);

        return redirect()->route("{$this->viewFolder}.index")
        ->with('success', 'Created successfully: ' . $item->name);
    }

    public function show($id){
        $item = $this->model::findOrFail($id);
        return view("{$this->viewFolder}.show", compact('item'));
    }

    public function edit($id){
        $item = $this->model::findOrFail($id);
        return view("{$this->viewFolder}.update", compact('item'));
    }

    public function update(Request $request, $id): RedirectResponse{
        $validated = $this->validateData($request);
        $item = $this->model::findOrFail($id);

        $item->update($validated);

        return redirect()->route("{$this->viewFolder}.index")
        ->with('success', 'Updated successfully: ' . $item->name);
    }

    public function destroy($id){
        $item = $this->model::findOrFail($id);
        $item->delete();

        return redirect()->route("{$this->viewFolder}.index")
        ->with('success', 'Deleted successfully: ' . $item->name);
    }

    abstract protected function validateData(Request $request);
}