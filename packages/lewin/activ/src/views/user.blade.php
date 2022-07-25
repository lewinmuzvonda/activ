<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Activ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Users</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Email</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Avatar</th>
                </tr>
            </thead>
            <tr>
                <td>{{$user['id']}}</td>
                <td>{{$user['email']}}</td>
                <td>{{$user['first_name']}}</td>
                <td>{{$user['last_name']}}</td>
                <td><img src="{{$user['avatar']}}"/></td>
                
            </tr>
        </table>

    </div>
</body>
</html>