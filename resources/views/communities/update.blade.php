@extends('layouts.app')

@section('title', 'Fitbit | Edit ' . $item->name)

@section('content')
    <div class="max-w-lg mx-auto mt-8">
        <h1 class="text-2xl font-bold text-center">Edit this Community</h1>
        <br>

        <x-alert2 type="warning" titulo="warning">
            Name and discipline are protected fields. Changing them may confuse existing members.
        </x-alert2>

        @include('components.form', [
            'action' => route('communities.update', $item->id),
            'method' => 'PUT',
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
                    'value' => $item->description
                ],
                [
                    'name' => 'discipline_id',
                    'label' => 'Associated Discipline',
                    'type' => 'text',
                    'value' => $item->discipline->name ?? 'No Discipline Associated',
                    'readonly' => true,
                ],
                [
                    'name' => 'user_id',
                    'label' => 'User Moderator',
                    'type' => 'select',
                    'options' => $users,
                    'selected' => $item->user_id,
                ],

            ],
        'buttonText' => 'Update',
        'cancelUrl' => route('communities.index')
    ])
    </div>
@endsection