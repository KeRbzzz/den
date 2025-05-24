@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Edit Order</h1>

        <form action="{{ route('orders.update', $order->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                <div>
                    <x-form.input name="product_name" label="Product Name" :value="$order->product_name" />
                </div>
                <div>
                    <x-form.input type="number" name="quantity" label="Quantity" :value="$order->quantity" />
                </div>
                <div>
                    <x-form.input type="number" step="0.01" name="total" label="Total Amount ($)" :value="$order->total" />
                </div>
                <div>
                    <x-form.select name="status" label="Status" :options="['pending', 'processing', 'completed', 'cancelled']" :selected="$order->status" />
                </div>
            </div>
            <div class="flex items-center gap-4">
                <x-form.submit label="Update Order" color="green" />
                <a href="{{ route('dashboard') }}" class="text-gray-600 hover:text-gray-800">Cancel</a>
            </div>
        </form>
    </div>
@endsection
