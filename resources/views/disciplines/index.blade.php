@extends('layouts.app')

<x-app-layout>

    <h1>Lista de disciplinas</h1>

    <a href="{{ route('disciplines.create') }}" class="bg-green-500 text-white px-4 py-2 rounded mb-4 inline-block">Create Discipline</a>

    <ul>
         @foreach($disciplines as $discipline)
            <li>
                <a href="{{ route('disciplines.show', $discipline->id) }}">
                    {{ $discipline->name }}
                </a>
            </li>
         @endforeach

    </ul>

</x-app-layout>