<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

abstract class CrudController extends Controller{

    protected $model;
    protected $viewFolder;

    public function index(): \Illuminate\View\View{
        $items = $this->model::paginate(10);
        return view("{$this->viewFolder}.index", compact('items'));
    }

    public function create(): \Illuminate\View\View{
        return view("{$this->viewFolder}.create");
    }

    public function store(Request $request): RedirectResponse{
        $validated = $this->validateData($request);
        $item = $this->model::create($validated);

        return redirect()->route("{$this->viewFolder}.index")
        ->with('success', 'Created successfully: ' . $item->name);
    }

    public function show($id): \Illuminate\View\View{
        $item = $this->model::findOrFail($id);
        return view("{$this->viewFolder}.show", compact('item'));
    }

    public function edit($id): \Illuminate\View\View{
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

    public function destroy($id): RedirectResponse{
        $item = $this->model::findOrFail($id);
        $item->delete();

        return redirect()->route("{$this->viewFolder}.index")
        ->with('success', 'Deleted successfully: ' . $item->name);
    }

    abstract protected function validateData(Request $request): array;
}