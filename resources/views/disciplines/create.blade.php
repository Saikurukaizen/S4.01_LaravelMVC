@extends('layouts.app')

@section('title', 'Fitbit | Create Discipline')


@section('content')
    <div class="max-w-lg mx-auto mt-8">
        @include('components.form', [
            'action' => route('disciplines.store'),
            'fields' => [
                [
                    'name' => 'name',
                    'label' => 'Name',
                    'type' => 'text',
                ],
                [
                    'name' => 'description',
                    'label' => 'Description',
                    'type' => 'textarea'
                ],        
            ],
            'buttonText' => 'Create Discipline',
            'cancelUrl' => route('disciplines.index')
        ])
    </div>
@endsection
