<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Go Win Sports Academy</title>
    <link rel="icon" href="assets/img/colored-logo.png">

    <link rel="stylesheet" href="assets/css/header-footer.css">
    <link rel="stylesheet" href="assets/css/login-register.css">
    <link rel="stylesheet" href="assets/css/all.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">

</head>
<body>
    <div class="logo container"><a href="{{route('home')}}"><img class="logo" src="assets/img/colored-logo.png" alt=""></a></div>
    <section class="container content">
        <form class="login" action="{{route('login')}}" method="post">
            <div class="form" >
                @csrf
                <h1>Log in to Go Win Sports Academy</h1>
                <input type="email" name="email" placeholder="Email">
                <input type="password" name="password" id="password" placeholder="Password">
                <button class="btn" type="submit">Login</button>
            </div>
            
            
            @if ($errors->any())
            @foreach ($errors->all() as $error)
            <h1>{{ $error }}</h1>
            @endforeach
            @endif
            <a href="{{route('register')}}">Don't have an account?</a>          
        </form>
    </section>

    <footer>
        <div class="container">
            <div class="column column-one">
                <img class="logo" src="assets/img/colored-logo.png" alt="">
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
                <a href="#"><i class="fa-brands fa-instagram"></i> Instagram</a>
                <a href="#"><i class="fa-brands fa-facebook"></i> Facebook</a>
                <a href="#"><i class="fa-brands fa-twitter"></i> Twitter</a>
                <a href="#"><i class="fa-brands fa-whatsapp"></i> WhatsApp</a>
            </div>
        </div>
    </footer>   
    
    <script src="assets/js/animation.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>