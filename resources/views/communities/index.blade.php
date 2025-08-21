@extends('layouts.app')

@section('title', 'Fitbit | Communities')

@section('content')
    @include('components.table-list', [
        'title' => 'Communities List',
        'headers' => ['Name', 'Description', 'Actions'],
        'rows' => $items,
        'actions' => [
            'show' => fn($item) => route('communities.show', $item->id),
            'edit' => fn($item) => route('communities.edit', $item->id),
        ],
        'createRoute' => route('communities.create'),
        'createText' => 'Create a Community'
    ])

    <div class="mt-4">
        {{ $items->links() }}
    </div>
@endsection