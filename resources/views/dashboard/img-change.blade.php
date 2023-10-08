<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>

    <link rel="icon" href="assets/img/colored-logo.png">

    <link rel="stylesheet" href="assets/css/dashbourd.css">
    <link rel="stylesheet" href="assets/css/all.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <aside>
        <h1>Hi Admin 👋</h1>
        <ul>
            <li><a href="{{route('index')}}" class="active">Gallery</a></li>
            <li><a href="{{route('users')}}">Users Emalis</a></li>
        </ul>
        <a class="back" href="{{route('home')}}">Back to website <i class="fa-solid fa-angles-left"></i></a>
    </aside>
    <div class="content">
        <form class="add-photo" action="{{route('addImg')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="file" id="upload-label"></label>
            <input type="file" name="img" id="file">
            <button type="submit" class="btn">post</button>
        </form>

        @if($errors->any())

        @foreach ($errors->all() as $error)
            <h1 style="color: #f44336">{{$error}}</h1>
            
        @endforeach
        @endif
        <h2>Gallery</h2>
        <div class="gallery">
            @foreach ($imgs as $img)
            <div class="photo">
                <img src="{{$img->getFirstMedia('imgg')->getUrl()}}" alt=""> <i class="fa-solid fa-trash trash"></i> 
                <div class="pop-up"  >
                    <h1>Are you sure?</h1>
                 <a style="color: rgb(248, 13, 13)" href={{route('del',['img'=>$img->id])}}> yes</a>
            </div>
            </div>
               @endforeach
            {{$imgs->links("pagination::bootstrap-5")}}
        </div>
    </div>

    
</body>

</html>
<script src="assets/js/ff.js"></script>