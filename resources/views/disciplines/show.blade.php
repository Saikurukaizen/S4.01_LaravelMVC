@include('components.nav')

<div class="max-w-lg mx-auto mt-8">
    @include('components.form', [
        'action' => route('disciplines.store'),
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

    <a href="{{ route('disciplines.index') }}" class="border-t-neutral-500">Return</a>
</div>