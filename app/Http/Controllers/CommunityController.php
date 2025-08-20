<?php

namespace App\Http\Controllers;

use App\Models\Community;
use App\Models\Discipline;
use App\Models\User;
use Illuminate\Http\Request;

class CommunityController extends CrudController
{

    protected $model = Community::class;
    protected $viewFolder = 'communities';

    protected function validateData(Request $request){

        $communityId = $request->route('community') ?? $request->route()->parameter('id') ?? null;

        $rules = [
            'description' => 'required|string|max:255',
            'user_id' => 'required|exists:users,id',
        ];

        if(!$communityId){
            $rules['name'] = 'required|string|max:50|unique:communities,name';
            $rules['discipline_id'] = 'required|exists:disciplines,id';
        }

        return $request->validate($rules);
    } 

    public function create(){
        $disciplines = Discipline::pluck('name', 'id')->toArray();
        $users = User::pluck('name', 'id')->toArray();
        return view("{$this->viewFolder}.create", compact('disciplines', 'users'));
    }
    
    public function show($id) {
    $item = Community::with('user', 'discipline')->findOrFail($id);
    return view("{$this->viewFolder}.show", compact('item'));
    }

    public function edit($id){
        $users = User::pluck('name', 'id')->toArray();
        $disciplines = Discipline::pluck('name', 'id')->toArray();
        $item = Community::with('discipline', 'user')->findOrFail($id);
        return view("{$this->viewFolder}.update", compact('item', 'users', 'disciplines'));
    }
}
