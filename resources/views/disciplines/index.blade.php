@extends('layouts.app')

@section('title', 'Fitbit | Disciplines')

@section('content')
    @include('components.table-list', [
        'title' => 'Disciplines List',
        'headers' => ['Name', 'Description', 'Actions'],
        'rows' => $items,
        'actions' => [
            'show' => fn($item) => route('disciplines.show', $item->id),
            'edit' => fn($item) => route('disciplines.edit', $item->id),
        ],
        'createRoute' => route('disciplines.create'),
        'createText' => 'Create Discipline'
    ])

    <div class="mt-4">
        {{ $items->links() }}
    </div>
@endsection