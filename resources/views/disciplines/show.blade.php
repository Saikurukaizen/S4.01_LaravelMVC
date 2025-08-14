@include('components.nav')

<div class="max-w-lg mx-auto mt-8">
    @include('components.form', [
        'action' => '#',
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
        'showButton' => false
    ])
    <div class="flex gap-2 mt-4">
        <form action="{{ route('disciplines.destroy', $item->id) }}" method="POST" onsubmit="return confirm('¿Are you sure you want to delete this discipline?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Eliminar</button>
        </form>
        <form action="{{ route('disciplines.edit', $item->id) }}" method="GET">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Editar</button>
        </form>
        <form action="{{ route('disciplines.index') }}" method="GET">
            <button type="submit" class="bg-gray-500 text-white px-4 py-2 rounded">Volver</button>
        </form>
    </div>
</div>