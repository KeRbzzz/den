<div class="mb-4">
    <label class="block text-gray-700 mb-2">{{ $label }}</label>
    <select name="{{ $name }}" class="w-full p-2 border rounded" required>
        @foreach($options as $option)
            <option value="{{ $option }}" {{ ($selected ?? old($name)) == $option ? 'selected' : '' }}>
                {{ ucfirst($option) }}
            </option>
        @endforeach
    </select>
    @error($name)
    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror
</div>
