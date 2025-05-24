@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Edit Post</h1>

        <form action="{{ route('posts.update', $post->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <x-form.input name="title" label="Title" :value="$post->title" />
            </div>
            <div class="mb-4">
                <x-form.textarea name="content" label="Content">{{ $post->content }}</x-form.textarea>
            </div>
            <div class="flex items-center gap-4">
                <x-form.submit label="Update Post" color="blue" />
                <a href="{{ route('dashboard') }}" class="text-gray-600 hover:text-gray-800">Cancel</a>
            </div>
        </form>
    </div>
@endsection
