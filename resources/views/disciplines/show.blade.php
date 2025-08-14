@include('components.nav')

<div class="max-w-lg mx-auto mt-8">
    @include('components.form', [
        'action' => '#',
        'fields' => [
            [
                'name' => 'name',
                'label' => 'Name',
                'type' => 'text',
                'value' => $discipline->name
            ],
            [
                'name' => 'description',
                'label' => 'Description',
                'type' => 'textarea',
                'value' => $discipline->description
            ],        
        ],
        'showButton' => false
    ])
    <div class="flex gap-2 mt-4">
        <form action="{{ route('disciplines.destroy', $discipline->id) }}" method="POST" onsubmit="return confirm('¿Seguro que quieres eliminar esta disciplina?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Eliminar</button>
        </form>
        <form action="{{ route('disciplines.edit', $discipline->id) }}" method="GET">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Editar</button>
        </form>
        <form action="{{ route('disciplines.index') }}" method="GET">
            <button type="submit" class="bg-gray-500 text-white px-4 py-2 rounded">Volver</button>
        </form>
    </div>
</div>