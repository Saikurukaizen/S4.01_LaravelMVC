@extends('layouts.app')

@section('title', 'Fitbit | ' . $item->name)


@section('content')
    <div class="max-w-lg mx-auto mt-8">
        @include('components.form', [
            'action' => route('users.store'),
            'fields' => [
                [
                    'name' => 'name',
                    'label' => 'Name',
                    'type' => 'text',
                    'value' => $item->name,
                ],
                [
                    'name' => 'lastname',
                    'label' => 'Lastname',
                    'type' => 'text',
                    'value' => $item->lastname,
                ],
                [
                    'name' => 'date_of_birth',
                    'label' => 'Date Of Birth',
                    'type' => 'date',
                    'value' => $item->date_of_birth,
                ],
                [
                    'name' => 'email',
                    'label' => 'Email',
                    'type' => 'email',
                    'value' => $item->email,
                ],
                [
                    'name' => 'bank_acc',
                    'label' => 'Introduce your Bank Account',
                    'type' => 'text',
                    'value' => $item->bank_acc,
                ],
                [
                    'name' => 'discipline_id',
                    'label' => 'Discipline',
                    'type' => 'text',
                    'value' => $discipline->name,
                ]
            ],
            'showButton' => false
        ])
        <div class="flex gap-2 mt-4">
            <form action="{{ route('users.edit', $item->id) }}" method="GET">
                <button type="submit" class="bg-yellow-500 text-white px-4 py-2 rounded">Edit</button>
            </form>
            <form action="{{ route('users.destroy', $item->id) }}" method="POST" onsubmit="return confirm('¿Are you sure you want to delete this discipline?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Delete</button>
            </form>
            
            <form action="{{ route('users.index') }}" method="GET">
                <button type="submit" class="bg-gray-500 text-white px-4 py-2 rounded">Back</button>
            </form>
        </div>
        
    </div>
@endsection