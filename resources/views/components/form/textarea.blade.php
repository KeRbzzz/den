<div class="mb-4">
    <label class="block text-gray-700 mb-2">{{ $label }}</label>
    <textarea name="{{ $name }}" rows="4" class="w-full p-2 border rounded" required>{{ $slot }}</textarea>
    @error($name)
    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror
</div>
