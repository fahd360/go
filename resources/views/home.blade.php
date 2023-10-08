<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Go Win Sports Academy</title>
    <link rel="icon" href="assets/img/colored-logo.png">

    <link rel="stylesheet" href="assets/css/home.css">
    <link rel="stylesheet" href="assets/css/home-media.css">
    <link rel="stylesheet" href="assets/css/header-footer.css">
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
                    <li><a class="active" href="{{route('home')}}">Home</a></li>
                    <li><a href="{{route('au')}}">About Us</a></li>
                    <li><a href="{{route('gallery')}}">Gallery</a></li>
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
            <div class="landing container" >
                    <h1 class="hidden">Go Win sports academy</h1>
                    <a class="scrol" href="#about-section"></a>
            </div>
        </div>                    
    </section>

    <section class="about-section" id="about-section">
        <div class="section-title-container">
            <h1 class="section-title">About us</h1>
            <span class="dash"></span>
        </div>
        <div class="container">
            <img class="about-img hidden" src="assets/img/Group 9.png" alt="about-img">
            <div class="text-content hidden">
                <h1>Go Win sports academy.</h1>
                <p>Welcome to Go Win Sport Academy!
                    Established in March 2023 in Dubai, UAE, Go Win Sport Academy is a leading
                     sports company dedicated to providing a wide range of sports services.
                      Our goal is to inspire and empower individuals through sports training,
                       camps, fun days, sports days, after-school activities,
                        and a specialized kindergarten sports program.</p>
                <a class="section-btn" href="{{route('au')}}">Read More <i class="fas fa-angle-double-right"></i></a>
            </div>     
        </div>
    </section>

    <section class="gallery-section">
        <div class="section-title-container">
            <h1 class="section-title">Gallery</h1>
            <span class="dash"></span>
        </div>
        <div class="container">
            <img class="dashed-arrow row" src="assets/img/dashed-arrow.svg" alt="">
            <img class="dashed-arrow cluman" src="assets/img/dashed-cluman-arrow.svg" alt="">
            
            
          

           
            <div class="gallery">
                @foreach ($imgs as $img)
                <div class="photo-container hidden"><img src="{{$img->getFirstMedia('imgg')->getUrl()}}" alt=""></div>
                @endforeach
            </div>
            <a href="{{route('gallery')}}" class="section-btn hidden">Show More <i class="fas fa-angle-double-right"></i></a>
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

    <script src="assets/js/main.js"></script>
    <script src="assets/js/animation.js"></script>
</body>
</html>