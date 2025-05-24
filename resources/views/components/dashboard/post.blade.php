<div class="mb-4 pb-4 border-b">
    <h3 class="font-semibold">{{ $post->title }}</h3>
    <p class="text-sm text-gray-600">{{ Str::limit($post->content, 100) }}</p>
    <div class="flex justify-between items-center mt-2">
        <span class="text-xs text-gray-500">
            {{ $post->created_at->diffForHumans() }} by {{ $post->user->name ?? 'Unknown' }}
        </span>
        <div class="flex gap-2">
            <a href="{{ route('posts.edit', $post->id) }}"
               class="text-blue-600 hover:text-blue-800 text-xs">Edit</a>
            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="inline">
                @csrf
                @method('DELETE')
                <button type="submit"
                        class="text-red-600 hover:text-red-800 text-xs"
                        onclick="return confirm('Are you sure?')">
                    Delete
                </button>
            </form>
        </div>
    </div>
</div>
