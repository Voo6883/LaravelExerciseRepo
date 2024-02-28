<!-- user.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        .w-5 {
            display: none
        }
    </style>
</head>
<body>
    <h3>This is a User List</h3>
    <a href="/addUser">Add User</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email Address</th>
                <th>Delete Action</th>
                <th>Update Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td><a href="{{ url('/deleteUser/'.$user->id) }}">Delete</a></td>
                <td>Update</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <span>{{$users->links()}}</span>
</body>
</html>
