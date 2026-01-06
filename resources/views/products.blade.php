<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product</title>
</head>
<body>
    <h1>Product Page</h1>

    <ul>
@foreach ($product as $products)
            <li>
                {{ $products['name'] }} - ${{ $products['price'] }}
                | <a href="{{ url('/products/' . $products['name']) }}">View Details</a>
            </li>
        @endforeach
    </ul>
</body>
</html>