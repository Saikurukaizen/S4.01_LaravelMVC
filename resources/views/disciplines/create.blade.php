@include('components.nav')

<div class="max-w-lg mx-auto mt-8">
    @include('components.form', [
        'action' => route('disciplines.store'),
        'fields' => [
            [
                'name' => 'name',
                'label' => 'Name',
                'type' => 'text',
            ],
            [
                'name' => 'description',
                'label' => 'Description',
                'type' => 'textarea'
            ],        
        ],
        'buttonText' => 'Create Discipline'
    ])

    <a href="{{ route('disciplines.index') }}" class="border-t-neutral-500">Cancel</a>
</div>
