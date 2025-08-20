@extends('layouts.app')

@section('title', 'Fitbit | Create a Community')


@section('content')
    <div class="max-w-lg mx-auto mt-8">
        @include('components.form', [
            'action' => route('communities.store'),
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
                [
                    'name' => 'discipline_id',
                    'label' => 'Discipline Reference',
                    'type' => 'select',
                    'options' => $disciplines
                ],
                [
                    'name' => 'user_id',
                    'label' => 'Choose an User Moderator',
                    'type' => 'select',
                    'options' => $users
                ],   
            ],
            'buttonText' => 'Create Discipline',
            'cancelUrl' => route('disciplines.index')
        ])
    </div>
@endsection
