@extends('layouts.app')

@section('title', 'Fitbit | Users')

@section('content')
    @include('components.table-list', [
        'title' => 'Users List',
        'headers' => ['Name', '', 'Actions'],
        'rows' => $items,
        'actions' => [
            'show' => fn($item) => route('users.show', $item->id),
            'edit' => fn($item) => route('users.edit', $item->id),
        ],
        'createRoute' => route('users.create'),
        'createText' => 'Create User'
    ])

    <div class="mt-4">
        {{ $items->links() }}
    </div>
@endsection