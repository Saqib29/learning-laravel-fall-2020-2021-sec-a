<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
</head>
<body>
    <h1>Index</h1>

    <form action="/add-user" method="POST">
        @csrf
        <input type="text" name="name"><br>
        <input type="submit" value="submit">
    </form>
    
</body>
</html>