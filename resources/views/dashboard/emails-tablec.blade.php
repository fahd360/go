<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>

    <link rel="icon" href="/assets/img/colored-logo.png">

    <link rel="stylesheet" href="/assets/css/dashbourd.css">
    <link rel="stylesheet" href="/assets/css/all.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <aside>
        <h1>Hi Admin 👋</h1>
        <ul>
            <li><a href="{{route('index')}}">Gallery</a></li>
            <li><a href="{{route('users')}}" class="active">Users Emalis</a></li>
        </ul>
        <a class="back" href="{{route('home')}}">Back to website <i class="fa-solid fa-angles-left"></i></a>
    </aside>
    <div class="content">
        <table>
        
            <tr>
              <th>User Name</th>

              
              <th>User Last Name</th>
              
              <th>Email</th>
              <th>Created at</th>
            </tr>
            @foreach ($users as $user)
            <tr>
              <td>{{$user->name}}</td>
              @if($user->last_name)
              <td>{{$user->last_name}}</td>
               <td>{{$user->email}}</td>
              <td>{{$user->created_at}}</td>
              @else
              <td> </td>
              <td>{{$user->email}}</td>
              <td>{{$user->created_at}}</td>
              @endif
            </tr>
            @endforeach
           
           
        </table>
    </div>
</body>
</html>