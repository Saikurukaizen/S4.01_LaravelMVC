<div 
    x-data="{ show: true }" 
    x-show="show" 
    x-init="setTimeout(() => show = false, 3000)" 
    x-transition.duration.500ms
    {{ $attributes->merge(['class' => 'p-4 mb-4 text-sm rounded-lg' . $class]) }} 
    role="alert"
    style="display: none;"
>
    <span class="font-medium">{{ $titulo ?? 'Info Alert!' }}</span> {{ $slot }}
</div>