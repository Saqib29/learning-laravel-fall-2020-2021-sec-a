<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add product</title>
</head>
<body>
    <h1>Add product</h1>
    <form action="/add_product" method="POST">
        @csrf
        <table>
            <tr>
                <td>Product Name: </td>
                <td><input type="text" name="product_name"></td>
            </tr>
            <tr>
                <td>Quantity: </td>
                <td><input type="number" name="quantity" required></td>
            </tr>
            <tr>
                <td>Price: </td>
                <td><input type="number" name="price" required></td>
            </tr>
            
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Add Product"></td>
            </tr>
        </table>
    </form>
</body>
</html>