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
        return $request->validate([
            'name' => 'required|string|max:50|unique:communities,name,' . $request->route('community') . ',id',
            'description' => 'required|string|max:255',
            'discipline_id' => 'required|exists:disciplines,id',
            'user_id' => 'required|exists:users,id',
        ]);
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
}
