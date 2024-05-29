<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet">
        

        <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
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
            .brand-container {
                margin-bottom: 20px;
                transition: all 0.3s ease-in-out;
            }
            .brand-header {
                cursor: pointer;
                background-color: #f8f9fa;
                padding: 20px;
                border: 1px solid #dee2e6;
                border-radius: 5px;
                text-align: center;
            }
            .brand-container.expanded .brand-header {
                padding: 50px;
                font-size: 2rem;
            }
            .sections-container {
                display: none;
                margin-top: 10px;
            }
            .section-title {
                font-size: 1.5rem;
                color: #343a40;
                margin-bottom: 15px;
                border-bottom: 2px solid #dee2e6;
                padding-bottom: 5px;
            }
            .card {
                
                display: flex;
                flex-direction: column;
                justify-content: space-between;
            }
            .card-img-top {
                height: 150px;
                object-fit: contain;
            }
            .card-body {
                flex: 1;
                display: flex;
                flex-direction: column;
                justify-content: space-between;
            }
            .card-title, .card-text {
                white-space: nowrap;
                overflow: hidden;
                text-overflow: ellipsis;
            }
            .modal-img {
                max-width: 300px; /* Ajusta el tamaño máximo de la imagen */
                max-height: 200px; /* Ajusta la altura máxima de la imagen */
                margin: 0 auto 15px; /* Centra la imagen horizontalmente y añade un margen inferior */
                display: block;
            }
            .btn-cart {
                margin-top: 10px;
            }
            .center-container {
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
            }
            .cart-count {
                position: absolute;
                top: 0;
                right: 0;
                background-color: red;
                color: white;
                border-radius: 50%;
                padding: 2px 8px;
                font-size: 12px;
            }
            .navbar .nav-item .nav-link {
                padding: 0.75rem; /* Añadir padding al ícono del carrito */
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
        </style>
        <!-- Styles -->
    </head>

    
    <body class="antialiased">
        <nav class="navbar navbar-expand-lg fixed-top">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                {{-- <a class="navbar-brand" href="#" ><img  class="logoTWO" src="img/LogoTF.png" alt="Logo" height="40"></a> --}}
                <img src="img/LogoTF.png" alt="Logo" height="40" class="navbar-brand">
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
        <br><br><br><br><br><br><br>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <button class="btn btn-primary mb-3 ms-4" data-toggle="modal" data-target="#agregarProveedor">Agregar Proveedor</button>
                </div>
        </nav>
        

        <div class="container mt-5">
            <table class="table">
                <h1>Lista de proveedores</h1>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Nombre de la marca</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody id="tabla-body">
                    @foreach ($proveedores as $proveedor)
                        <tr> 
                            <td>{{ $proveedor->user->name }}</td>
                            <td>{{ $proveedor->user->email }}</td>
                            <td>{{ $proveedor->brand_name }}</td>
                            <td>
                                <button type="button" class="btn btn-warning btn-sm" onclick="editarProveedor('{{ $proveedor->user->id }}', '{{ $proveedor->user->name }}', '{{ $proveedor->user->email }}')">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <a onclick="confirmDelete('{{ $proveedor->user->id  }}')" class="btn btn-sm btn-danger"> <i class="fas fa-trash">  </i></a> 
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>



        <!-- MODAL DE PROVEEDOR -->
        <div class="modal fade" id="agregarProveedor" tabindex="-1" role="dialog" aria-labelledby="agregarProveedorLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="agregarProveedorLabel">Agregar Proveedor</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="formAgregarProveedor" action="{{route('proveedor.nuevo')}}" method="post" >
                            @csrf
                                <div class="form-group">
                                    <label for="nombre">Nombre completo</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                                </div>
                                <div class="form-group">
                                    <label for="correo">Correo</label>
                                    <input type="email" class="form-control" id="correo" name="correo" required pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$">
                                </div>
                                <div class="form-group">
                                    <label for="contraseña">Contraseña</label>
                                    <input type="text" class="form-control" id="contraseña" name="contraseña" required>
                                </div>
                                <div class="form-group">
                                    <label for="brand">Nombre de la marca</label>
                                    <input type="text" class="form-control" id="brand" name="brand" required>
                                </div>
                                
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                <button type="submit" form="formAgregarProveedor" class="btn btn-primary">Agregar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- MODAL DE EDITAR PROVEEDOR -->
        <div class="modal fade" id="editarProveedor" tabindex="-1" role="dialog" aria-labelledby="editarProveedorLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editarProveedorLabel">Editar Información</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Formulario de editar proveedor -->
                        <form id="formEditarProveedor" action="" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="nombre_prov">Nombre completo</label>
                                <input type="text" class="form-control" id="nombre_prov" name="name">
                            </div>
                            <div class="form-group">
                                <label for="correo_prov">Correo</label>
                                <input type="email" class="form-control" id="correo_prov" name="email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$">
                            </div>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary">Editar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
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

        function confirmDelete(providerId) {
                Swal.fire({
                    title: '¿Estás seguro?',
                    text: '¡No podrás revertir esto!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Sí, eliminarlo',
                    cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Redireccionar a la ruta de eliminación
                        window.location.href = "{{ route('proveedor.eliminar', '') }}/" + providerId;
                    }
                });
            }

        function editarProveedor(id, nombre, correo) {
            $('#nombre_prov').val(nombre); 
            $('#correo_prov').val(correo); 
            var form = document.getElementById('formEditarProveedor');
            form.action = "{{ route('proveedor.editar', ':id') }}".replace(':id', id);
            $('#editarProveedor').modal('show');
        }
        document.getElementById('formEditarProveedor').addEventListener('submit', function(event) {
            event.preventDefault();

            var form = document.getElementById('formEditarProveedor');

            // Enviar el formulario
            form.submit();

            Swal.fire({
                icon: 'success',
                title: '¡Éxito!',
                text: 'Los datos del proveedor han sido actualizados correctamente.',
                confirmButtonText: 'Aceptar',
                showConfirmButton: false, // Ocultar el botón de confirmación
                timer: 5000, // Duración de la alerta en milisegundos (en este caso, 5 segundos)
                timerProgressBar: true, // Muestra una barra de progreso del temporizador
                didOpen: () => {
                    Swal.showLoading();
                    const timerInterval = setInterval(() => {
                        const content = Swal.getContent();
                        if (content) {
                            const b = content.querySelector('b');
                            if (b) {
                                b.textContent = Math.ceil(Swal.getTimerLeft() / 1000);
                            }
                        }
                    }, 100);
                    // Limpiar el intervalo cuando la alerta se cierre
                    Swal.getPopup().addEventListener('mouseleave', () => {
                        clearInterval(timerInterval);
                    });
                },
                willClose: () => {
                    // Redireccionar a la página anterior cuando la alerta se cierre
                    window.history.back();
                }
            }).then((result) => {
                // Si el usuario da clic en Aceptar, redirecciona a la página anterior
                if (result.isConfirmed) {
                    window.history.back();
                }
            });
        });

        document.getElementById('formAgregarProveedor').addEventListener('submit', function(event) {
        // Evitar que el formulario se envíe normalmente
        event.preventDefault();

        var form = document.getElementById('formAgregarProveedor');
        form.submit();

        Swal.fire({
            icon: 'success',
            title: '¡Éxito!',
            text: 'El proveedor se ha añadido correctamente.',
            confirmButtonText: 'Aceptar'
        }).then((result) => {
            // Si el usuario da clic en Aceptar, redirecciona a la página anterior
            if (result.isConfirmed) {
                window.history.back();
            }
        });
    });
    </script>

</body>
    <!-- Bootstrap JS y dependencias -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</html>
