<h2>Create Order</h2>
<form method="POST" action="{{ route('orders.store') }}">
    @csrf
    <input type="text" name="product_name" placeholder="Product Name"><br>
    <input type="number" name="quantity" placeholder="Quantity"><br>
    <button type="submit">Create Order</button>
</form>
