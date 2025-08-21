@extends('layouts.app')

@section('title', 'Fitbit | ' . $item->name)

@section('content')
    <div class="max-w-lg mx-auto mt-8">
        @include('components.form', [
            'action' => '#',
            'fields' => [
                [
                    'name' => 'name',
                    'label' => 'Name',
                    'type' => 'text',
                    'value' => $item->name,
                    'readonly' => true,
                ],
                [
                    'name' => 'description',
                    'label' => 'Description',
                    'type' => 'textarea',
                    'value' => $item->description,
                    'readonly' => true,
                ],
                [
                    'name' => 'discipline_id',
                    'label' => 'Associated Discipline',
                    'type' => 'text',
                    'selected' => $item->discipline_id,
                    'value' => $item->discipline->name,
                    'readonly' => true,
                ],
                [
                    'name' => 'user_id',
                    'label' => 'User Moderator',
                    'type' => 'text',
                    'value' => $item->user->name,
                    'selected' => $item->user->name,
                    'readonly' => true,
                ],

            ],
            'showButton' => false
        ])
        <div class="flex gap-2 mt-4">
            <form action="{{ route('communities.edit', $item->id) }}" method="GET">
                <button type="submit" class="bg-yellow-500 text-white px-4 py-2 rounded">Edit</button>
            </form>
            <form action="{{ route('communities.destroy', $item->id) }}" method="POST" onsubmit="return confirm('¿Are you sure you want to delete this community?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Delete</button>
            </form>

            <form action="{{ route('communities.index') }}" method="GET">
                <button type="submit" class="bg-gray-500 text-white px-4 py-2 rounded">Back</button>
            </form>
        </div>
    </div>
@endsection