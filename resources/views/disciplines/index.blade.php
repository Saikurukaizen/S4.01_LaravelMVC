@section('title', 'Fitbit | Disciplines')

<x-app-layout>

    
    @include('components.nav')

    <div class="overflow-x-auto">
        <h1 class="text-2xl font-bold mb-4 mt-6 text-center">Disciplines List</h1>
        <div class="flex justify-center mb-6">
            <a href="{{ route('disciplines.create') }}" class="bg-green-500 text-white px-4 py-2 rounded inline-block hover:bg-green-600">Create Discipline</a>
        </div>
        <table class="min-w-full bg-white border border-gray-200 rounded shadow">
            <thead>
                <tr>
                    <th class="px-4 py-2 border-b text-left">Name</th>
                    <th class="px-4 py-2 border-b text-left">Description</th>
                    <th class="px-4 py-2 border-b text-left">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($items as $item)
                    <tr class="hover:bg-gray-100">
                        <td class="px-4 py-2 border-b">{{ $item->name }}</td>
                        <td class="px-4 py-2 border-b">{{ $item->description }}</td>
                        <td class="px-4 py-2 border-b">
                            <a href="{{ route('disciplines.show', $item->id) }}" class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600 text-sm">View</a>
                            <a href="{{ route('disciplines.edit', $item->id) }}" class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600 text-sm ml-2">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $items->links() }}
    </div>

</x-app-layout>