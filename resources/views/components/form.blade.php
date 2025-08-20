<form method="POST" action = "{{ $action }}">
    @csrf

    @if(isset($method) && ($method === 'PUT' || $method === 'PATCH'))
        @method($method)
    @endif

    @foreach($fields as $field)
        <div class="mb-4">
            <label for="{{ $field['name'] }}" class="block font-semibold mb-1">{{ $field['label'] }}</label>

            @if($field['type'] === 'textarea')
                <textarea name="{{ $field['name'] }}" id="{{ $field['name'] }}" class="w-full border border-gray-300 rounded p-2 focus:outline-none focus:ring-2 focus:ring-blue-400">{{ old($field['name'], $field['value'] ?? '') }}</textarea>
            @elseif($field['type'] === 'select')
                <select name="{{ $field['name'] }}" id="{{ $field['name'] }}" class="w-full border border-gray-300 rounded p-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
                    <option value="">Select {{ $field['label'] }}</option>
                    @foreach($field['options'] as $value => $label)
                        <option value="{{ $value }}" 
                            {{ (old($field['name'], $field['selected'] ?? $field['value'] ?? '') == $value) ? 'selected' : '' }}>
                            {{ $label }}
                        </option>
                    @endforeach
                </select>
            @else
                <input type="{{ $field['type'] }}" name="{{ $field['name'] }}" 
                    id="{{ $field['name'] }}" value="{{ old($field['name'], $field['value'] ?? '') }}"
                    {{ isset($field['readonly']) && $field['readonly'] ? 'readonly' : '' }} 
                    class="w-full border border-gray-300 rounded p-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
            @endif
            @error($field['name'])
            <div class="text-red-500 text-sm mb-4">{{ $message }}</div>
            @enderror
        </div>
    @endforeach

    @if($showButton ?? true)
        <div class="flex gap-2">
            <button type="submit" class="bg-blue-500 text-white text-sm px-4 py-2 rounded hover:bg-blue-600">
                {{ $buttonText ?? 'Save'}}
            </button>
            <a href="{{ $cancelUrl ?? '#' }}" class="bg-gray-300 text-gray-700 text-sm px-4 py-2 rounded hover:bg-gray-400 inline-block text-center">Cancelar</a>
        </div>
    @endif
</form>