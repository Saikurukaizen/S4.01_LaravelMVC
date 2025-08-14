@include('components.form', [
    'action' => route('disciplines.update', $item->id),
    'method' => 'PUT',
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
    'buttonText' => 'Update'
])

<a href="{{ route('disciplines.index') }}" class="border-t-neutral-500">Cancel</a>