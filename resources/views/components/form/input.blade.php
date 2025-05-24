<div class="mb-4">
    <label class="block text-gray-700 mb-2">{{ $label }}</label>
    <input type="{{ $type ?? 'text' }}"
           name="{{ $name }}"
           value="{{ $value ?? old($name) }}"
           class="w-full p-2 border rounded"
           {{ $attributes }}
           required>
    @error($name)
    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror
</div>
