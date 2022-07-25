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

        <form method="post" action="/user">
            {{ csrf_field() }}
            <div>
    
                <label for="user_id" class="form-label">User ID</label>
    
                <input type="number" name="user_id" id="user_id" required>
    
            </div>
    
            <button type="submit" style="background-color: black; color: white">Get User</button>
    
            </form>
            
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
            @foreach($users as $user)
            <tr>
                <td>{{$user['id']}}</td>
                <td>{{$user['email']}}</td>
                <td>{{$user['first_name']}}</td>
                <td>{{$user['last_name']}}</td>
                <td><img src="{{$user['avatar']}}"/></td>
                
            </tr>
            @endforeach
        </table>
        <p>Page: {{$page}}/{{$pages}}</p>

        @if($page != 1 )
        <a href="/page/{{$page-1}}"><button >PREV</button></a>
        @endif
        @if(($pages-$page) > 0 )
        <a href="/page/{{$page+1}}"><button >NEXT</button></a>
        @endif
       
    </div>
</body>
</html>