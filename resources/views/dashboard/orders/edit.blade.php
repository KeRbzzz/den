@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-4">
        <div class="bg-white p-6 rounded shadow">
            <h1 class="text-2xl font-bold mb-6">Edit Order #{{ $order->id }}</h1>

            @if ($errors->any())
                <div class="mb-4 p-4 bg-red-100 text-red-800 rounded">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('orders.update', $order->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                    <div>
                        <x-form.input name="product_name" label="Product Name"
                                      :value="old('product_name', $order->product_name)" />
                    </div>
                    <div>
                        <x-form.input type="number" name="quantity" label="Quantity"
                                      :value="old('quantity', $order->quantity)" />
                    </div>
                    <div>
                        <x-form.input type="number" step="0.01" name="total" label="Total Amount ($)"
                                      :value="old('total', $order->total)" />
                    </div>
                    <div>
                        <x-form.select name="status" label="Status"
                                       :options="[
                     'pending' => 'Pending',
                     'processing' => 'Processing',
                    'completed' => 'Completed',
                     'cancelled' => 'Cancelled'
                 ]"
                                       :phpselected="old('status', $order->status)" />
                    </div>
                </div>

                <div class="flex items-center gap-4">
                    <button type="submit" class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                        Update Order
                    </button>
                    <a href="{{ route('dashboard') }}" class="text-gray-600 hover:text-gray-800">Cancel</a>
                </div>
            </form>
        </div>
    </div>
@endsection
