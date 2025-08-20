<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class UserController extends CrudController
{

    protected $model = User::class;
    protected $viewFolder = 'users';

    protected function validateData(Request $request){

        $userId = $request->route('user') ?? $request->route()->parameter('id') ?? null;
        $rules = [
            'name' => 'sometimes|string|max:50|' . ($userId ? 'unique:users,name,' . $userId . ',id' : '|unique:users,name'),
            'lastname' => 'sometimes|string|max:100',
            'date_of_birth' => 'sometimes|date',
            'email' => 'sometimes|email|max:100|' . ($userId ? 'unique:users,email,' . $userId . ',id' : '|unique:users,email'),
            'bank_acc' => 'sometimes|string|max:20|' . ($userId ? 'unique:users,bank_acc,' . $userId . ',id' : '|unique:users,bank_acc'),
            'discipline_id' =>'sometimes|exists:disciplines,id',
        ];

        if($request->password && $request->password_confirmation){
            $rules['password'] = 'string|min:8|confirmed';
        }

        return $request->validate($rules);
    }

    public function create(){
        $users = User::pluck('name', 'id')->toArray();
        $disciplines = \App\Models\Discipline::pluck('name', 'id')->toArray();
        return view("{$this->viewFolder}.create", compact('disciplines', 'users'));
    }

    public function show($id) {
    $item = User::findOrFail($id);
    $discipline = \App\Models\Discipline::find($item->discipline_id);
    return view("{$this->viewFolder}.show", compact('item', 'discipline'));
    }

    public function edit($id) {
        $item = User::findOrFail($id);
        $disciplines = \App\Models\Discipline::pluck('name', 'id')->toArray();

        return view("{$this->viewFolder}.update", compact('item', 'disciplines'));
    }
}
