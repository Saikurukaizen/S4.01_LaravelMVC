<div class="overflow-x-auto">
    <h1 class="text-2xl font-bold mb-4 mt-6 text-center">{{ $title ?? '' }}</h1>
    @if(isset($createRoute))
        <div class="flex justify-center mb-6">
            <a href="{{ $createRoute }}" class="bg-green-500 text-white px-4 py-2 rounded inline-block hover:bg-green-600">
                {{ $createText ?? 'Create' }}
            </a>
        </div>
    @endif
    <table class="min-w-full bg-white border border-gray-200 rounded shadow">
        <thead>
            <tr>
                @foreach($headers as $header)
                    <th class="px-4 py-2 border-b text-left">{{ $header }}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach($rows as $item)
                <tr class="hover:bg-gray-100">
                    <td class="px-4 py-2 border-b">{{ $item->name }}</td>
                    <td class="px-4 py-2 border-b">{{ $item->description }}</td>
                    <td class="px-4 py-2 border-b">
                        @if(isset($actions['show']))
                            <a href="{{ $actions['show']($item) }}" class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600 text-sm">View</a>
                        @endif
                        @if(isset($actions['edit']))
                            <a href="{{ $actions['edit']($item) }}" class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600 text-sm ml-2">Edit</a>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>