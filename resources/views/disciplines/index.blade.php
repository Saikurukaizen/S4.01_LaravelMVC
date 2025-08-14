@extends('layouts.app')

<x-app-layout>

    <h1>Disciplines List</h1>

    <a href="{{ route('disciplines.create') }}" class="bg-green-500 text-white px-4 py-2 rounded mb-4 inline-block">Create Discipline</a>

    <ul>
         @foreach($items as $item)
            <li>
                <a href="{{ route('disciplines.show', $item->id) }}">
                    {{ $item->name }}
                </a>
            </li>
         @endforeach

    </ul>

    {{ $items->links() }}

</x-app-layout>