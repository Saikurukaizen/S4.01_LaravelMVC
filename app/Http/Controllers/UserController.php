<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends CrudController
{

    protected $model = User::class;
    protected $viewFolder = 'users';

    protected function validateData(Request $request){
        return $request->validate([
            'name' => 'required|string|max:50|unique:users.name,' . $request->route('user') . ',id',
            'lastname' => 'required|string|max:100',
            'date_of_birth' => 'required|date',
            'email' => 'required|email|max:100|unique:users.email,' . $request->route('user') . ',id',
            'password' => 'required|string|min:8|confirmed',
            'bank_acc' => 'required|string|max:20|unique:users.bank_acc,' . $request->route('user') . ',id',
            'discipline_id' =>'required|exists:disciplines.id',
        ]);
    }

    public function create(){
        $users = User::pluck('name', 'id')->toArray();
        $disciplines = \App\Models\Discipline::pluck('name', 'id')->toArray();
        return view("{$this->viewFolder}.create", compact('disciplines'));
    }

    public function show($id) {
    $item = User::findOrFail($id);
    $discipline = \App\Models\Discipline::find($item->discipline_id);
    return view("{$this->viewFolder}.show", compact('item', 'discipline'));
    }

    public function edit($id) {
        $item = User::findOrFail($id);
        $discipline = \App\Models\Discipline::find($item->discipline_id);
        return view("{$this->viewFolder}.update", compact('item', 'discipline'));
    }
}
