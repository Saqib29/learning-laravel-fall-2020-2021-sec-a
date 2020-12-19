<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employee</title>
</head>
<body>
    <h1>Employee</h1>
    <a href="/add_product"><button>Add new product</button></a>

    <table>
           
        <tr>
            <th>Product name</th>
            <th>Quantity </th>
            <th>Price</th>
            <th>Action</th>
        </tr>
        
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->product_name }}</td>
                <td>{{ $product->quantity }}</td>
                <td>{{ $product->price }}</td>
                <td>
                    <a href=""><button>Update</button></a>
                    <a href=""><button>Delete</button></a>
                </td>
            </tr>
        @endforeach
        
    </table>

</body>
</html>