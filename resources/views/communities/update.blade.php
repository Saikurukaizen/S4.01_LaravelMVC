@extends('layouts.app')

@section('title', 'Fitbit | Edit ' . $item->name)

@section('content')
    <div class="max-w-lg mx-auto mt-8">
        <h1 class="text-2xl font-bold text-center">Edit this Community</h1>
        <br>
        @include('components.form', [
            'action' => route('communities.update', $item->id),
            'method' => 'PUT',
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
                    'name' => 'password',
                    'label' => 'Current Password',
                    'type' => 'password',
                    'value' => $item->password,
                    'readonly' => true,
                ],
                [
                    'name' => 'new_password',
                    'label' => 'New password (optional)',
                    'type' => 'password',
                ],
                [
                    'name' => 'password',
                    'label' => 'Confirm your New Password',
                    'type' => 'password',
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
                    'type' => 'select',
                    'options' => $disciplines,
                    'selected' => $item->discipline_id,
                ],
            ],
        'buttonText' => 'Update',
        'cancelUrl' => route('users.index')
    ])
    </div>
@endsection