<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Go Win Sports Academy</title>
    <link rel="icon" href="assets/img/colored-logo.png">

    <link rel="stylesheet" href="assets/css/header-footer.css">
    <link rel="stylesheet" href="assets/css/gallery.css">
    <link rel="stylesheet" href="assets/css/user.css">
    <link rel="stylesheet" href="assets/css/all.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">

</head>
<body>
    <section class="hero-section">
        <div class="container">
            <div class="navbar">
                <a href="{{route('home')}}"><img class="logo" src="assets/img/white-logo.png" alt=""></a>
                <ul class="links">
                    <li><a  href="{{route('home')}}">Home</a></li>
                    <li><a href="{{route('au')}}">About Us</a></li>
                    <li><a class="active" href="{{route('gallery')}}">Gallery</a></li>
                    <li><a href="{{route('cu')}}">Contact Us</a></li>
                </ul>

                @if(!auth()->user())
                <div class="mobile-container">
                    <div class="btns">
                    <a class="btn register" href="{{route('register')}}">Register</a>
                    <a class="btn login" href="{{route('login')}}">Login</a>
                    </div>

                    @else
                    <div class="user">
                        <div class="avatar"><i class="fa-solid fa-circle-user"></i></div>
                        <ul class="user-menu">
                            <li class="user-name">{{auth()->user()->name}}</li>
                            @role("admin")
                            <li><a href="{{route('index')}}">Dashboard</a></li>
                            @endrole

                            <form action="{{route('logout')}}" method="post">
                                @csrf
                             <button  class="logout" type="submit">Log out <i class="fa-solid fa-arrow-right-from-bracket"></i></button> 
                        </form>
                        </ul>
                @endif
                   
                    </div>
            <div class="bars">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
            </div>
            </div>
            <div class="landing">
                <h1>Gallery</h1>
            </div>
        </div>  
    </section>

    <section class="gallery"> 
        <div class="container">
            @foreach ($imgs as $img)
            @if($img->getFirstMedia('imgg'))
            <div class="photo hidden"><img src="{{$img->getFirstMedia('imgg')->getUrl()}}" alt=""></div>
            @endif
            
            
        @endforeach
    </div>
    </section>

    <footer>
        <div class="container">
            <div class="column column-one">
                <a href="{{route('home')}}"><img class="logo" src="assets/img/colored-logo.png" alt=""></a>
                <p>Welcome to Go Win Sport Academy! Established in March 2023 in Dubai,
                UAE, Go Win Sport Academy is a leading sports company dedicated to providing
                 a wide range of sports services.</p>
            </div>
            <div class="column column-two">
                <h1>Quick links</h1>
                <a href="{{route('home')}}"><i class="fas fa-home"></i> Home</a>
                <a href="{{route('au')}}"><i class="far fa-address-card"></i> About Us</a>
                <a href="{{route('gallery')}}"><i class="fas fa-photo-video"></i> Gallery</a>
                <a href="{{route('cu')}}"><i class="fa-solid fa-phone"></i> Contact Us</a>
            </div>
            <div class="column column-three">
                <h1>follow Us</h1>
                <a href="https://www.instagram.com/gowinsporysacademy/"><i class="fa-brands fa-instagram"></i> Instagram</a>
                <a href="https://www.facebook.com/profile.php?id=61551859752212"><i class="fa-brands fa-facebook"></i> Facebook</a>
                <a href="https://twitter.com/GowinAcademy"><i class="fa-brands fa-twitter"></i> Twitter</a>
                <a href="{{route('cu')}}"><i class="fa-brands fa-whatsapp"></i> WhatsApp</a>
            </div>
        </div>
    </footer>
    
    <script src="assets/js/animation.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>