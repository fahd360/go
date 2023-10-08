<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Go Win Sports Academy</title>
    <link rel="icon" href="assets/img/colored-logo.png">

    <link rel="stylesheet" href="assets/css/header-footer.css">
    <link rel="stylesheet" href="assets/css/about.css">
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
                    <li><a class="active"href="{{route('au')}}">About Us</a></li>
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
            <div class="landing">
                <h1>About Us</h1>
            </div>
        </div>  
    </section>

    <section class="content"> 
        <div class="container">
            <p class="hidden">Welcome to <span>Go Win Sport Academy</span>!
                Established in March 2023 in Dubai, UAE, <span>Go Win Sport Academy</span> is a leading sports company dedicated to providing a wide range of
                 sports services. Our goal is to inspire and empower individuals through sports training, camps, fun days, sports days,
                  after-school activities, and a specialized kindergarten sports program.</p>

            <p class="hidden">At <span>Go Win Sport Academy</span>, we believe that sports offer more than just physical exercise.
             Our qualified coaches are committed to helping athletes reach their full potential
              and achieve their optimum level of sports performance. We go beyond the traditional approach
               of practicing sports by instilling values such as discipline, teamwork, and perseverance.</p>

            <p class="hidden">Our focus extends beyond the field or court. We strive to educate and nurture
                 independent and self-confident young individuals. Through our programs, we teach valuable life
                  skills that will enable our athletes to accomplish whatever they aspire to attain. We believe that
                   sports can shape character, build resilience, and foster personal growth.
            Whether you're a beginner looking to explore different sports or an aspiring athlete aiming for 
            excellence, <span>Go Win Sport Academy</span> is here to support you every step of the way. Join our community 
            and embark on a journey of self-discovery, skill development, and personal achievement.</p>

            <p class="hidden">At <span>Go Win Sport Academy</span>, we are passionate about sports,
                 dedicated to our athletes' success, and committed to making a positive impact in their lives.
                  Come and experience the joy of sports with us!
                Contact us today to learn more about our programs and how we can help you unleash your full potential.</p>
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