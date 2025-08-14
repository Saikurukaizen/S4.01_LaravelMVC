<form method="POST" action = "{{ $action }}">
    @csrf
    @if(isset($method) && ($method === 'PUT' || $method === 'PATCH'))
        @method($method)
    @endif

    @foreach($fields as $field)
        <div class="form-group">
            <label for="{{ $field['name'] }}">{{ $field['label'] }}</label>
            @if($field['type'] === 'textarea')
                <textarea name="{{ $field['name'] }}" id="{{ $field['name'] }}">{{ old($field['name'], $field['value'] ?? '') }}</textarea>
            @else
                <input type="{{ $field['type'] }}" name="{{ $field['name'] }}" id="{{ $field['name'] }}" value="{{ old($field['name'], $field['value'] ?? '') }}">
            @endif
            @error($field['name'])
                <div class="text-red-500 text-sm">{{ $message }}</div>
            @enderror
        </div>
    @endforeach
    @if($showButton ?? true)
        <button type="submit" class="bg-blue-500 text-white text-sm px-4 py-2 rounded hover:bg-blue-600">
            {{ $buttonText ?? 'Save'}}
        </button>
    @endif
</form>