<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Image Upload</title>
</head>
<body>
    

    <form action="/file-upload" method="POST" enctype="multipart/form-data">
        @csrf
        <div style="margin: 20px">
            <input type="file" name="image">
        </div>
        <input type="submit" value="Submit">
    </form>

</body>
</html>