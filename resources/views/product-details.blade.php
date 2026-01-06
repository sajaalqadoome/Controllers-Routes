<h1>Product Details</h1>
@if($product['name'])
    <p>Name: {{ $product['name'] }}</p>
    <p>Price: ${{ $product['price'] }}</p>
@else
    <p>Product not found!</p>
@endif