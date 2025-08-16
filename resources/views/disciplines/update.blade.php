@extends('layouts.app')

@section('title', 'Fitbit | Edit ' . $item->name)

@section('content')
    <div class="max-w-lg mx-auto mt-8">
        <h1>Edit this Discipline</h1>
        <br>
        @include('components.form', [
            'action' => route('disciplines.update', $item->id),
            'method' => 'PUT',
            'fields' => [
                [
                'name' => 'name',
                'label' => 'Name',
                'type' => 'text',
                'value' => $item->name
            ],
            [
                'name' => 'description',
                'label' => 'Description',
                'type' => 'textarea',
                'value' => $item->description
            ],        
        ],
        'buttonText' => 'Update',
        'cancelUrl' => route('disciplines.index')
        ])
    </div>
@endsection
