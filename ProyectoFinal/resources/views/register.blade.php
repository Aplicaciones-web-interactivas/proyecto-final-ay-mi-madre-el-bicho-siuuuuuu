<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

    <style>
         * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        body{
            margin: 0;
            padding: 0;
            font-family: "Poppins", sans-serif;
            background-color: #1a1a1a;   
            overflow-x: hidden;         
        }
        .navbar{
            margin-bottom: 50px;
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            height: 75px;
            gap: 30px;
            background-color: #000;
            color:white;
            font-family: 'Poppins', sans-serif;
            /* opacity: 0.5; */
        }
        #navbarSupportedContent{
            width: 100%;
            overflow: hidden;
            display: flex;
           align-items: center;
        }
        .nav-itemLogin{
            text-decoration: none;
            font-size: small;
            font-weight: 600;
            /* padding: 5px; */
            border-radius: 0.4rem;
            color: rgb(0, 0, 0);
            background: transparent;
            margin:20px;
            color: white;
            appearance: none;
            display: inline-block;
            transition: border-color 0.3s ease-in-out;     
        }
        .nav-itemLogin a{
            color:white;
            text-decoration: none;
            display: inline-block;
            transition: border-color 0.3s ease-in-out;
        }
        .nav-itemRegister{
            text-decoration: none;
            font-size: small;
            font-weight: 600;
            /* padding: 5px; */
            border-radius: 0.4rem;
            color: rgb(0, 0, 0);
            background: white;
            color:black;
            margin:20px;
            appearance: none;
            display: inline-block;
            transition: border-color 0.3s ease-in-out;
            
        }
        .nav-itemRegister a{
            color:black;
            text-decoration: none;
            display: inline-block;
            transition: border-color 0.3s ease-in-out;
        }
        .nav-itemLogin:hover{
            border: solid 0.8px #f9f9f9;
        }
        .logo{
            font-size:medium;
            font-family: 'Poppins', sans-serif;
        }
        .card{
    background-color: transparent;
}
.navbar-brand{
    height: 40px;
    width: 30px;
}
#footerTWO{
    background-color: #000;
    padding: 10px;
    margin-top: 40px;
}
#letrafooter{
    color: white;
    font-size: smaller;
}
#tituloRedesSociales{
    -webkit-text-stroke: 2px rgb(255, 255, 255);

}
.FollowOnefootball_grid__card__link__OooU8 {
    
    flex-direction: column;
    align-items: flex-start;
    color: var(--primary-text-color);
    padding: 1rem;
}

/* @media (min-width: 400px) {
    .FollowTwofootballContenedor {
        grid-template-columns: repeat(1, 1fr);
    }
} */
@media (max-width: 800px) {
    .FollowTwofootballContenedor {
        display: flex;
        grid-template-columns: repeat(3, 1fr);
    }
}
@media (max-width: 400px) {
    .FollowTwofootballContenedor {
        display: flex;
        grid-template-columns: repeat(1, 1fr);
    }
}
.FollowTwofootballContenedor{
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 0rem;
}

.FollowOnefootball_followUsWrapper__HypyZ {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding-bottom: 2rem;
    max-width: calc(var(--root-max-width) + 0px);
    margin-left: auto;
    margin-right: auto;
}

.FollowOnefootball_grid__card__bmt9z {
    background-color: var(--alert-background-color);
    min-width: 0;
}
.FollowOnefootball_grid__card__link__OooU8 span {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    width: 100%;
    margin-top: .35rem;
}
.FollowOnefootball_grid__card__link__OooU8 .FollowOnefootball_grid__card__link__handle__LTz92 {
    font-weight: 700;
}
.FollowOnefootball_followUsWrapper__HypyZ a {
    text-decoration: none;
}
#colorCards{
    /* background-color: #747474; */
    background-color: #333;
    color:white;
    box-shadow: #d6d6d6;
}
.card{
    margin:10px;
}
.icono{
    margin: 10px;
}
.tituRegister{
    -webkit-text-stroke: 2px rgb(255, 255, 255);

}
.FormularioRegister {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.register-container {
    display: flex;
    width: 80%;
    max-width: 1200px;
    background-color: #333;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.5);
}

.register-form {
    flex: 1;
    padding: 2rem;
    display: flex;
    flex-direction: column;
    justify-content: center;
    background-color: #1a1a1a;
    position: relative;
    color:white
}

.register-link {
    position: absolute;
    top: 1rem;
    right: 1rem;
    color: #00ff00;
    text-decoration: none;
}

.register-link:hover {
    color: #00cc00;
}

.title {
    font-size: 2rem;
    font-weight: bold;
    margin-bottom: 2rem;
    text-align: center;
    color:white
}

.form-group {
    margin-bottom: 1.5rem;
}

.form-label {
    display: block;
    margin-bottom: 0.5rem;
    color: #cccccc;
}

.form-input {
    width: 100%;
    padding: 0.5rem;
    border: 1px solid #555;
    border-radius: 4px;
    background-color: #2a2a2a;
    color: #fff;
}

.form-input:focus {
    outline: none;
    border-color: #00ff00;
}

.submit-button {
    width: 100%;
    padding: 0.75rem;
    border: none;
    border-radius: 4px;
    background-color: #00ff00;
    color: #1a1a1a;
    font-size: 1rem;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.submit-button:hover {
    background-color: #00cc00;
}

.gif-container {
            position: relative;
            height: 200px; 
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        .gif {
            position: relative; /* Cambiado a relative */
            width: 40%; /* Tamaño más grande */
            /* height: 20%; Tamaño más grande */
            display: none;
            top: 0.5rem; /* Ajustado a 1 rem */
        }

        .gif.right {
            animation: moveRight 10s linear forwards; /* Más lenta */
        }

        .gif.left {
            animation: moveLeft 10s linear forwards; /* Más lenta */
        }

        .gif.fast {
            animation-duration: 8s; /* Más lenta */
        }

        @keyframes moveRight {
            0% { left: -50%; } /* Aumentado a -15% para salir de la ventana */
            100% { left: 100%; } /* Aumentado a 115% para salir de la ventana */
        }

        @keyframes moveLeft {
            0% { right: -50%; } /* Aumentado a -15% para salir de la ventana */
            100% { right: 100%; } /* Aumentado a 115% para salir de la ventana */
        }

    </style>
</head>
<body class="">
    <nav class="navbar navbar-expand-lg fixed-top">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            {{-- <a class="navbar-brand" href="#" ><img  class="logoTWO" src="img/LogoTF.png" alt="Logo" height="40"></a> --}}
            <img src="img/LogoTF.png" alt="Logo" height="40" class="navbar-brand" >
            <h1 class="logo">TWOFOOTBALL</h1>
            <ul class="navbar-nav ml-auto">
                <li class="nav-itemLogin pl-4 pr-4 pt-2 pb-2">
                    <a class="" href="{{ route('login') }}">Inicia sesión</a>
                    {{-- <a class="" href="{{ route('login') }}">Login</a> --}}
                </li>
                <li class="nav-itemRegister pl-4 pr-4 pt-2 pb-2">
                    <a class="" href="{{ route('register') }}">Registro</a>
                </li>
            </ul>
        </div>
    </nav>
    <br><br><br><br><br>

    <section class="FormularioRegister"> 
    <div class="register-container">
        <div class="register-form">
            <a href="{{ route('login') }}" class="register-link">Inicia Sesión</a>
            <h2 class="title">Registro</h2>
            <form method="POST" action="{{ route('register') }}">            
                @csrf
                <div class="form-group">
                    <label for="name" class="form-label">Nombre</label>
                    <input id="name" type="text" name="name" class="form-input" value="{{ old('name') }}" required autofocus autocomplete="name">
                </div>
                <div class="form-group">
                    <label for="email" class="form-label">Correo Electrónico</label>
                    <input id="email" type="email" name="email" class="form-input" value="{{ old('email') }}" required autocomplete="email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$">
                </div>
                <div class="form-group">
                    <label for="password" class="form-label">Contraseña</label>
                    <input id="password" type="password" name="password" class="form-input" required autocomplete="new-password">
                </div>
                <div class="form-group">
                    <label for="password_confirmation" class="form-label">Confirmar Contraseña</label>
                    <input id="password_confirmation" type="password" name="password_confirmation" class="form-input" required autocomplete="new-password">
                </div>
                <button type="submit" class="submit-button">Registrarse</button>
            </form>
        </div>
        <div class="gif-container">
            <img src="{{ asset('img/messi.gif') }}" alt="Messi" class="gif right" id="messi">
            <img src="{{ asset('img/vela.gif') }}" alt="Vela" class="gif right fast" id="vela">
            <img src="{{ asset('img/mane.gif') }}" alt="Mane" class="gif left" id="mane">
            <img src="{{ asset('img/dybala.gif') }}" alt="Dybala" class="gif left" id="dybala">
            {{-- <img src="{{ asset('img/modric.gif') }}" alt="Modric" class="gif left" id="modric"> --}}
            {{-- <img src="{{ asset('img/morgan.gif') }}" alt="Morgan" class="gif left" id="morgan"> --}}
            <img src="{{ asset('img/james.gif') }}" alt="James" class="gif right" id="james">
            <img src="{{ asset('img/van-dijk.gif') }}" alt="Van Dijk" class="gif right" id="van-dijk">
            <img src="{{ asset('img/de_bruyne.gif') }}" alt="De Bruyne" class="gif left" id="de_bruyne">
        </div>
    </div>
</section>
<nav class="FollowOnefootball_followUsWrapper__HypyZ m-5">
    <h2 class="FollowOnefootball_header__dSfrr mb-4 text-center" id="tituloRedesSociales">Sigue a<!-- --> TwoFootball</h2>
    <ul class="FollowTwofootballContenedor m-5">
        <li class="card" id="colorCards">
            <a href="https://www.instagram.com/onefootball" class="FollowOnefootball_grid__card__link__OooU8" rel="noreferrer" target="_blank">
                <img alt="Instagram icon" decoding="async" class="icono" loading="lazy" width="24" height="24" data-nimg="1" style="color:transparent" srcset="https://image-service.onefootball.com/transform?w=32&amp;dpr=2&amp;image=https://images.onefootball.com/cw/icons/instagram_dark.svg 1x, https://image-service.onefootball.com/transform?w=48&amp;dpr=2&amp;image=https://images.onefootball.com/cw/icons/instagram_dark.svg 2x" src="https://image-service.onefootball.com/transform?w=48&amp;dpr=2&amp;image=https://images.onefootball.com/cw/icons/instagram_dark.svg">
                <span title="Instagram">Instagram</span>
                <span class="FollowOnefootball_grid__card__link__handle__LTz92" title="@onefootball">@twofootball</span>
            </a>
        </li>
        <li class="card" id="colorCards">
            <a href="https://www.facebook.com/OneFootball" class="FollowOnefootball_grid__card__link__OooU8" rel="noreferrer" target="_blank">
                <img alt="Facebook icon" decoding="async" class="icono"loading="lazy" width="24" height="24" data-nimg="1" style="color:transparent" srcset="https://image-service.onefootball.com/transform?w=32&amp;dpr=2&amp;image=https://images.onefootball.com/cw/icons/facebook_dark.svg 1x, https://image-service.onefootball.com/transform?w=48&amp;dpr=2&amp;image=https://images.onefootball.com/cw/icons/facebook_dark.svg 2x" src="https://image-service.onefootball.com/transform?w=48&amp;dpr=2&amp;image=https://images.onefootball.com/cw/icons/facebook_dark.svg">
                <span title="Facebook">Facebook</span>
                <span class="FollowOnefootball_grid__card__link__handle__LTz92" title="@OneFootball.de">@twofootball.de</span>
            </a>
        </li>
        <li class="card" id="colorCards">
            <a href="https://twitter.com/Onefootball" class="FollowOnefootball_grid__card__link__OooU8" rel="noreferrer" target="_blank">
                <img alt="Twitter icon" decoding="async" class="icono" loading="lazy" width="24" height="24" data-nimg="1" style="color:transparent" srcset="https://image-service.onefootball.com/transform?w=32&amp;dpr=2&amp;image=https://images.onefootball.com/cw/icons/twitter_dark.svg 1x, https://image-service.onefootball.com/transform?w=48&amp;dpr=2&amp;image=https://images.onefootball.com/cw/icons/twitter_dark.svg 2x" src="https://image-service.onefootball.com/transform?w=48&amp;dpr=2&amp;image=https://images.onefootball.com/cw/icons/twitter_dark.svg">
                <span title="Twitter">Twitter</span>
                <span class="FollowOnefootball_grid__card__link__handle__LTz92" title="@OneFootball">@twofootball</span>
            </a>
        </li>
        
        <li class="card" id="colorCards">
            <a href="https://www.youtube.com/channel/UC2-0sEOYbQFuaURd_AU6Krg" class="FollowOnefootball_grid__card__link__OooU8" rel="noreferrer" target="_blank">
                <img alt="Youtube icon" decoding="async" class="icono" loading="lazy" width="24" height="24" data-nimg="1" style="color:transparent" srcset="https://image-service.onefootball.com/transform?w=32&amp;dpr=2&amp;image=https://images.onefootball.com/cw/icons/youtube_dark.svg 1x, https://image-service.onefootball.com/transform?w=48&amp;dpr=2&amp;image=https://images.onefootball.com/cw/icons/youtube_dark.svg 2x" src="https://image-service.onefootball.com/transform?w=48&amp;dpr=2&amp;image=https://images.onefootball.com/cw/icons/youtube_dark.svg">
                <span title="Youtube">Youtube</span>
                <span class="FollowOnefootball_grid__card__link__handle__LTz92" title="@OneFootball">@twofootball</span>
            </a>
        </li>
        <li class="card" id="colorCards">
            <a href="https://www.tiktok.com/@onefootball" class="FollowOnefootball_grid__card__link__OooU8" rel="noreferrer" target="_blank">
                <img alt="TikTok icon" decoding="async" class="icono" loading="lazy" width="24" height="24" data-nimg="1" style="color:transparent" srcset="https://image-service.onefootball.com/transform?w=32&amp;dpr=2&amp;image=https://images.onefootball.com/cw/icons/tiktok_dark.svg 1x, https://image-service.onefootball.com/transform?w=48&amp;dpr=2&amp;image=https://images.onefootball.com/cw/icons/tiktok_dark.svg 2x" src="https://image-service.onefootball.com/transform?w=48&amp;dpr=2&amp;image=https://images.onefootball.com/cw/icons/tiktok_dark.svg">
                <span title="TikTok">TikTok</span>
                <span class="FollowOnefootball_grid__card__link__handle__LTz92" title="@onefootball">@twofootball</span>
            </a>
        </li>
        <li class="card" id="colorCards">
            <a href="https://audioboom.com/channel/onefootball" class="FollowOnefootball_grid__card__link__OooU8" rel="noreferrer" target="_blank">
                <img alt="AudioBoom icon" decoding="async" class="icono" loading="lazy" width="24" height="24" data-nimg="1" style="color:transparent" srcset="https://image-service.onefootball.com/transform?w=32&amp;dpr=2&amp;image=https://images.onefootball.com/cw/icons/audioboom_dark_v2.svg 1x, https://image-service.onefootball.com/transform?w=48&amp;dpr=2&amp;image=https://images.onefootball.com/cw/icons/audioboom_dark_v2.svg 2x" src="https://image-service.onefootball.com/transform?w=48&amp;dpr=2&amp;image=https://images.onefootball.com/cw/icons/audioboom_dark_v2.svg">
                <span title="AudioBoom">AudioBoom</span>
                <span class="FollowOnefootball_grid__card__link__handle__LTz92" title="@OneFootball">@twofootball</span>
            </a>
        </li>
    </ul>
</nav>
<footer id="footerTWO">
    <div class="container text-center" >
        <a class="navbar-brand" href="#" ><img  class="logoTWO" src="img/LogoTF.png" alt="Logo" height="40"></a>

        <p id="letrafooter"class="mb-1">© 2024 TWO FOOTBALL</p>
        <p id="letrafooter">
            <a id="letrafooter" href="#" >TERMS</a> |
            <a id="letrafooter" href="#" >PRIVACY</a> |
            <a id="letrafooter" href="#" >ACCESSIBILITY</a> |
            <a id="letrafooter" href="#" >COOKIE CHOICES</a>
        </p>
    </div>
</footer>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const gifs = document.querySelectorAll('.gif');
        let index = 0;

        function showNextGif() {
            if (index < gifs.length) {
                const gif = gifs[index];
                gif.style.display = 'block';
                gif.addEventListener('animationend', function () {
                    gif.style.display = 'none';
                    index++;
                    if (index === gifs.length) {
                        index = 0; // Reiniciar el ciclo
                    }
                    showNextGif();
                }, { once: true });
            }
        }

        showNextGif();
    });
</script>
</body>
</html>
