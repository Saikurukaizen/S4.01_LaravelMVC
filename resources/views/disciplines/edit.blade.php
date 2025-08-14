@include('components.form', [
    'action' => route('disciplines.update', $discipline->id),
    'method' => 'PUT',
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
    'buttonText' => 'Update'
])

<a href="{{ route('disciplines.index') }}" class="border-t-neutral-500">Cancel</a>