<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
</head>
<body>
    <h1>Admin</h1>
    <form method="POST" action="/search">
        <input type="text" name="search" value="Search Employee name">
        <input type="submit" value="Submit">
    </form>
    <table>
           
        <tr>
            <th>Employee name</th>
            <th>Username </th>
            <th>Contact No</th>
            <th>User_type</th>
            <th>Action</th>
        </tr>
        
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->contact }}</td>
                <td>{{ $user->user_type }}</td>
                <td>
                    <a href=""><button>Update</button></a>
                    <a href=""><button>Delete</button></a>
                </td>
            </tr>
        @endforeach
        
    </table>
</body>
</html>