@extends('layouts.app')

@section('title', 'Fitbit | Create Users')


@section('content')
    <div class="max-w-lg mx-auto mt-8">
        @include('components.form', [
            'action' => route('users.store'),
            'fields' => [
                [
                    'name' => 'name',
                    'label' => 'Name',
                    'type' => 'text',
                ],
                [
                    'name' => 'lastname',
                    'label' => 'Lastname',
                    'type' => 'text',
                ],
                [
                    'name' => 'date_of_birth',
                    'label' => 'Date Of Birth',
                    'type' => 'date',
                ],
                [
                    'name' => 'email',
                    'label' => 'Email',
                    'type' => 'email',
                ],
                [
                    'name' => 'password',
                    'label' => 'Select a Password',
                    'type' => 'password',
                ],
                [
                    'name' => 'password_confirm',
                    'label' => 'Confirm Password',
                    'type' => 'password',
                ],
                [
                    'name' => 'bank_acc',
                    'label' => 'Introduce your Bank Account',
                    'type' => 'text',
                ],
                [
                    'name' => 'discipline_id',
                    'label' => 'Choose your discipline',
                    'type' => 'select',
                    'options' => $disciplines,
                ]
            ],
            'buttonText' => 'Create User',
            'cancelUrl' => route('users.index')
        ])
    </div>
@endsection