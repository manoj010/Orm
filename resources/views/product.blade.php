<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ORM</title>
</head>
<body>
    <h1>Product List</h1>

    @foreach ($products as $product)
        <ul>    
            <li>{{$product->product_name, $product->user->email}}</li>
        </ul>
    @endforeach
</body>
</html>