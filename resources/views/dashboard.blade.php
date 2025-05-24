@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Welcome, {{ auth()->user()->name }}</h1>

        @if (session('status'))
            <div class="mb-4 p-4 bg-green-100 text-green-800 rounded shadow">
                {{ session('status') }}
            </div>
        @endif

        {{-- Stats --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
            <x-dashboard.card title="Posts" :count="$postCount" />
            <x-dashboard.card title="Orders" :count="$orderCount" />
            <x-dashboard.card title="Users" :count="$userCount" />
        </div>

        {{-- Quick Actions --}}
        <div class="mb-6">
            <h2 class="text-xl font-semibold mb-2">Quick Actions</h2>
            <div class="flex gap-4 mb-4">
                <button onclick="toggleForm('postForm')" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded shadow">
                    Create Post
                </button>
                <button onclick="toggleForm('orderForm')" class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded shadow">
                    Create Order
                </button>
            </div>

            {{-- Post Form --}}
            <div id="postForm" class="hidden bg-white p-6 rounded shadow">
                <form action="{{ route('posts.store') }}" method="POST">
                    @csrf
                    <x-form.input name="title" label="Title" />
                    <x-form.textarea name="content" label="Content" />
                    <x-form.submit label="Submit Post" color="blue" />
                </form>
            </div>

            {{-- Order Form --}}
            <div id="orderForm" class="hidden bg-white p-6 rounded shadow">
                <form action="{{ route('orders.store') }}" method="POST">
                    @csrf
                    <x-form.input name="product_name" label="Product Name" />
                    <x-form.input type="number" name="quantity" label="Quantity" />
                    <x-form.input type="number" step="0.01" name="total" label="Total Amount ($)" />
                    <x-form.select name="status" label="Status" :options="['pending', 'processing', 'completed', 'cancelled']" />
                    <x-form.submit label="Submit Order" color="green" />
                </form>
            </div>
        </div>

        {{-- Recent Activity --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            {{-- Posts --}}
            <x-dashboard.section title="Recent Posts">
                @forelse ($posts as $post)
                    <x-dashboard.post :post="$post" />
                @empty
                    <p class="text-gray-500">No posts yet.</p>
                @endforelse
            </x-dashboard.section>

            {{-- Orders --}}
            <x-dashboard.section title="Recent Orders">
                <x-dashboard.order-table :orders="$latestOrders" />
            </x-dashboard.section>
        </div>
    </div>

    <script>
        function toggleForm(formId) {
            const allForms = ['postForm', 'orderForm'];
            allForms.forEach(id => {
                const form = document.getElementById(id);
                form.classList.toggle('hidden', id !== formId ? true : !form.classList.contains('hidden'));
            });
        }
    </script>
@endsection
