<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Workspace</title>

        <!-- Fonts -->
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <!-- Styles -->
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
            .section-box {
                display: flex;
                justify-content: space-between;
                align-items: center;
                border: 1px solid #ccc;
                border-radius: 5px;
                background-color: #f8f9fa;
                width: 100%;
                padding: 15px;
                margin-bottom: 5px;
            }
            .ellipsis-icon {
                color: #ccc; /* Color más claro */
                margin-left: auto; /* Mueve el icono al final de la sección */
                cursor: pointer;
            }
            .add-product-card {
                border: 2px dashed #ccc;
                border-radius: 5px;
                width: 100%;
                padding: 30px;
                text-align: center;
                color: #ccc;
                margin-bottom: 15px;
                cursor: pointer;
            }
            .add-product-card:hover {
                background-color: #f8f9fa;
            }
            .custom-card {
                width: 300px;
                height: 400px;
                display: flex;
                flex-direction: column;
                border: 2px solid darkolivegreen;
                background-color: #1a1a1a;
                color: white;
                padding: 10px;
            }

            .custom-card img {
                width: 100%;
                height: auto;
            }
            .section{
                width: 1300px;
            }
            .product_container{
                width: 1333px;
                display: flex;
            }
            .section-box{
            
            position: relative;
            color:white;
            padding: 20px;
            border: 1px solid #dee2e6;
            border-radius: 5px;
            text-align: center;
            transition: color 1s, box-shadow 1s;
            z-index: 1;
            overflow: hidden;
            background-color: #1a1a1a;
            }
            #tituloRedesSociales{
    -webkit-text-stroke: 2px rgb(255, 255, 255);

}
.btn-primary{
    background-color: #004b38;
    border:1px solid white;
    bs-btn-hover-border-color: #004b38;
    --bs-btn-focus-shadow-rgb: 49, 132, 253;
    --bs-btn-active-color: #fff;
    --bs-btn-active-bg:#004b38;
    --bs-btn-active-border-color: #004b38;
    --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
    --bs-btn-disabled-color: #fff;
    --bs-btn-disabled-bg: #004b38;
    --bs-btn-disabled-border-color: fff;
}
.btn:first-child:active{
    background-color: #004b38;
    border:1px solid white;
}
.btn-primary:not(:disabled):not(.disabled).active, .btn-primary:not(:disabled):not(.disabled):active, .show>.btn-primary.dropdown-toggle {
    color: #fff;
    background-color: #004b38;
    border-color: white;
}
.btn-primary:hover{
    background-color: #099471;
    border:1px solid white;
}
.btn-primary:active{
    background-color: #004b38;
    border:1px solid white;
}
.btn-primary:focus{
    background-color: #004b38;
    border:1px solid white;
}
#cardsAñadir:hover{
    background-color: #636363;
}
/* #agregarSeccion{
    color:white;
} */
        </style>
    </head>

    
    <body>
        <nav class="navbar navbar-expand-lg fixed-top">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                {{-- <a class="navbar-brand" href="#" ><img  class="logoTWO" src="img/LogoTF.png" alt="Logo" height="40"></a> --}}
                <img src="{{ asset('img/LogoTF.png') }}" alt="Logo" height="40" class="navbar-brand">
                <h1 class="logo">TWOFOOTBALL</h1>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-itemLogin pl-4 pr-4 pt-2 pb-2">
                        <a class="" href="{{ route('ruta_graficas', $userId) }}">Gráficas</a>
                    </li>
                    <li class="nav-itemLogin pl-4 pr-4 pt-2 pb-2">
                        <a href="{{ route('logout') }}"><button type="button">Cerrar sesión</button>
                        </a>                        {{-- <a class="" href="{{ route('login') }}">Login</a> --}}
                    </li>
                    <div class="mx-auto text-center pl-4 pr-4 pt-3 pb-2">
                        <p class="h4">{{ $brandName }}</p>
                    </div>
                </ul>
            </div>
        </nav>
        <br><br><br><br><br><br>
        <div class="container">
            <div id="navbarSupportedContent">
                <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#agregarSeccion">Agregar Seccion</button>
            </div>
            {{-- <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#agregarSeccion">Agregar Seccion</button> --}}

        </div>
    {{-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#agregarSeccion">Agregar Seccion</button>
            </div>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item me-5">
                    <a class="nav-link" href="{{ route('ruta_graficas', $userId) }}">Gráficas</a>
                </li>
            </ul>

            <div class="mx-auto text-center">
                <p class="h1">{{ $brandName }}</p>
            </div>

        </div>
    </nav> --}}
        
    {{-- <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

     

        <ul class="navbar-nav ml-auto">
            <li class="nav-item me-5">
                <a class="nav-link" href="{{ route('ruta_graficas', $userId) }}">Gráficas</a>
            </li>
        </ul>

      

    </div> --}}

 <!-- Secciones -->
<div class="container mt-5">
    <h2 class="FollowOnefootball_header__dSfrr mb-4 text-center" id="tituloRedesSociales">Añade tus productos</h2>
        {{-- <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#agregarSeccion">Agregar Seccion</button> --}}
   
    @foreach ($sections as $section)
    <div class="section-box mb-3 p-3 section d-flex justify-content-between">
        <h5>{{ $section->name }}</h5>
        <a onclick="openEditSectionModal('{{ $section->id }}','{{ $section->name }}')"><i class="fas fa-ellipsis-v ellipsis-icon"></i></a>
    </div>


        <!-- Product Cards -->
        <div class="row product_container">
            <!-- Card for adding new product -->
            <div class="col-md-3 mb-3">
                        <div class="card add-product-card custom-card d-flex justify-center" id="cardsAñadir"style="cursor: pointer;" onclick="openAddProductModal({{ $section->id }})">
                            <i class="fa fa-plus fa-2x"></i>
                            <p>Añadir nuevo producto</p>
                        </div>
                    </div>
            @foreach ($section->productos as $product)
                <div class="col-md-3 mb-3">
                    <div class="card custom-card">
                        <img src="{{ asset($product->image) }}" class="card-img-top" alt="Product Image" style="object-fit: contain; height: 200px;">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <div>
                            <h5 class="card-title" style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">{{ $product->name }}</h5>
                                <p class="card-text">Precio: ${{ $product->price }}</p>
                            </div>
                            <button type="button" class="btn btn-primary mt-auto" data-toggle="modal" data-target="#productModal" onclick="openProductModal('{{ $product->id }}', '{{ $product->name }}', '{{ $product->image }}', '{{ $product->description }}', '{{ $product->price }}', '{{ $product->stock }}')">Ver detalles</button>
                            <div class="d-flex mt-3 justify-content-between">
                                <button type="button" class="btn btn-warning flex-fill mr-1 text-white" onclick="openEditModal('{{ $product->id }}', '{{ $product->name }}', '{{ $product->image }}', '{{ $product->description }}', '{{ $product->price }}', '{{ $product->stock }}')">Editar     </button>
                                <button type="button" class="btn btn-danger flex-fill ml-1" onclick="confirmDelete('{{ $product->id }}')">Eliminar</button>                            
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach
</div>



    <!-- MODAL DE SECCION -->
    <div class="modal fade" id="agregarSeccion" tabindex="-1" role="dialog" aria-labelledby="agregarSeccionLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="agregarSeccionLabel">Agregar Nueva Seccion</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="formAgregarSeccion" action="{{route('seccion.nuevo')}}" method="post" >
                            @csrf
                                <div class="form-group">
                                    <label for="nombre">Nombre de la seccion</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre">
                                </div>
                                <input type="hidden" name="workspace_id" value="{{ $workspaceId }}">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                <button type="submit" form="formAgregarSeccion" class="btn btn-primary">Agregar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- MODAL DE EDITAR NOMBRE DE SECCION -->
        <div class="modal fade" id="editarSeccion" tabindex="-1" role="dialog" aria-labelledby="editarSeccionLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editarSeccionLabel">Editar Sección</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="formEditarSeccion" action="{{route('seccion.editar')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="nombre_edit">Nombre de la sección</label>
                            <input type="text" class="form-control" id="nombre_edit" name="nombre_edit">
                        </div>
                        <input type="hidden" id="section_id_input_edit" name="section_id_input_edit" value="">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" id="eliminarSeccionBtn" onclick="eliminaSection()">Eliminar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" form="formEditarSeccion" class="btn btn-primary">Editar</button>
                </div>
            </div>
        </div>
    </div>

    
<!-- MODAL DE PRODUCTO -->
<div class="modal fade" id="agregarProducto" tabindex="-1" role="dialog" aria-labelledby="agregarProductoLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="agregarProductoLabel">Agregar Nuevo Producto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formAgregarProducto" action="{{route('producto.nuevo')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <!-- Image Upload Card -->
                    <div class="form-group text-center mb-4">
                        <div id="imageCard" class="add-product-card" style="width: 100%; height: 300px; cursor: pointer;">
                            <i class="fa fa-plus fa-2x"></i>
                            <p>Agregar Imagen</p>
                        </div>
                    </div>
                    <!-- Form Inputs -->
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="name_prod">Nombre del producto</label>
                            <input type="text" class="form-control" id="name_prod" name="name_prod" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="price_prod">Precio del producto</label>
                            <input type="number" step="0.01" class="form-control" id="price_prod" name="price_prod" min="0" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="description_prod">Descripción del producto</label>
                            <input type="text" class="form-control" id="description_prod" name="description_prod" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="stock">Stock</label>
                            <input type="number" class="form-control" id="stock" name="stock" min="0" required>
                        </div>
                        <input type="hidden" id="section_id_input" name="section_id_input" value="">
                    </div>
                    <div class="form-group text-right">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" form="formAgregarProducto" class="btn btn-primary">Agregar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- MODAL DE EDITAR / ELIMINAR PRODUCTO -->
<div class="modal fade" id="editarProducto" tabindex="-1" role="dialog" aria-labelledby="editarProductoLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editarProductoLabel">Editar Producto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formEditarProducto" action="{{route('producto.editar')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <!-- Image Upload Card -->
                    <div class="form-group text-center mb-4">
                        <div id="imageCard_edit" class="card" style="width: 100%; height: 300px;">
                            
                        </div>
                    </div>
                    <!-- Form Inputs -->
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="name_prod_edit">Nombre del producto</label>
                            <input type="text" class="form-control" id="name_prod_edit" name="name_prod_edit">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="price_prod_edit">Precio del producto</label>
                            <input type="number" step="0.01" class="form-control" id="price_prod_edit" name="price_prod_edit">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="description_prod_edit">Descripción del producto</label>
                            <input type="text" class="form-control" id="description_prod_edit" name="description_prod_edit">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="stock_edit">Stock</label>
                            <input type="number" class="form-control" id="stock_edit" name="stock_edit">
                        </div>
                        <input type="hidden" id="product_id_edit" name="product_id_edit" value="">
                    </div>
                    <div class="form-group text-right">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" form="formEditarProducto" class="btn btn-primary">Editar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal para mostrar detalles del producto -->
<div class="modal fade" id="productModal" tabindex="-1" role="dialog" aria-labelledby="productModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="productModalLabel">Detalles del Producto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="productDetails">
                    <!-- Aquí se mostrarán los detalles del producto -->
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<footer id="footerTWO">
    <div class="container text-center" >
        <a class="navbar-brand" href="#" ><img  class="logoTWO" src="{{ asset('img/LogoTF.png') }}" alt="Logo" height="40"></a>

        <p id="letrafooter"class="mb-1">© 2024 TWO FOOTBALL</p>
        <p id="letrafooter">
            <a id="letrafooter" href="#" >TERMS</a> |
            <a id="letrafooter" href="#" >PRIVACY</a> |
            <a id="letrafooter" href="#" >ACCESSIBILITY</a> |
            <a id="letrafooter" href="#" >COOKIE CHOICES</a>
        </p>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-sr9OCDsVxVpN/BSc6yl64k49l+3r8mJXieezSQtDqV4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script>

    function openEditModal(id, name, image, description, price, stock) {
        // Asignar valores a los campos del formulario
        document.getElementById('name_prod_edit').value = name;
        document.getElementById('price_prod_edit').value = price;
        document.getElementById('description_prod_edit').value = description;
        document.getElementById('stock_edit').value = stock;
        document.getElementById('product_id_edit').value = id;

        var imageCard = document.getElementById('imageCard_edit');
        imageCard.innerHTML = `<img src="{{ asset('${image}') }}" alt="Product Image" style="max-width: 100%; max-height: 100%; object-fit: contain;">`;

        // Abrir el modal
        $('#editarProducto').modal('show');
    }

    function openEditSectionModal(id, name) {
        // Asignar valores a los campos del formulario
        document.getElementById('section_id_input_edit').value = id;
        document.getElementById('nombre_edit').value = name;

        $('#editarSeccion').modal('show');
    }

    function eliminaSection() {
        // Asignar valores a los campos del formulario
        var id = document.getElementById('section_id_input_edit').value;
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
                window.location.href = "{{ route('seccion.eliminar', '') }}/" + id;
            }
        });
        
    }

    function openProductModal(productId, productName, productImage, productDescription, productPrice, productStock) {
        // Actualiza el contenido del modal con los detalles del producto
        $('#productDetails').html(`
            <h5>${productName}</h5>
            <img src="{{ asset('${productImage}') }}" alt="${productName}" class="img-fluid">
            <p>Descripción: ${productDescription}</p>
            <p>Precio: $${productPrice}</p>
            <p>Stock: ${productStock}</p>
        `);

        // Abre el modal
        $('#productModal').modal('show');
    }
    function previewImage(event) {
        var reader = new FileReader();
        reader.onload = function() {
            var output = document.getElementById('imageCard');
            output.innerHTML = '<img src="' + reader.result + '" alt="Product Image" style="max-width: 100%; max-height: 100%; object-fit: cover;">';
        };
        reader.readAsDataURL(event.target.files[0]);
    }

    function confirmDelete(productId) {
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
                window.location.href = "{{ route('producto.eliminar', '') }}/" + productId;
            }
        });
    }


    function createFileInput() {
        var input = document.createElement('input');
        input.type = 'file';
        input.id = 'imageInput';
        input.name = 'product_image';
        input.style.display = 'none';
        input.accept = 'image/*';
        input.onchange = previewImage;
        var form = document.getElementById('formAgregarProducto');
        form.appendChild(input);// Agrega el input al body para que sea accesible
    }

    function openAddProductModal(sectionId) {
        // Establecer el section_id en el formulario de agregar producto
        document.getElementById('section_id_input').value = sectionId;
        // Abrir el modal de agregar producto
        $('#agregarProducto').modal('show');
    }

    document.getElementById('formEditarProducto').addEventListener('submit', function(event) {
        // Evitar que el formulario se envíe normalmente
        event.preventDefault();

        var form = document.getElementById('formEditarProducto');
        form.submit();

        Swal.fire({
            icon: 'success',
            title: '¡Producto editado!',
            text: 'El producto se ha editado correctamente.',
            confirmButtonText: 'Aceptar'
        }).then((result) => {
            // Si el usuario da clic en Aceptar, redirecciona a la página anterior
            if (result.isConfirmed) {
                window.history.back();
            }
        });
    });

    document.getElementById('formEditarSeccion').addEventListener('submit', function(event) {
        // Evitar que el formulario se envíe normalmente
        event.preventDefault();

        var form = document.getElementById('formEditarSeccion');
        form.submit();

        Swal.fire({
            icon: 'success',
            title: '¡Sección editada!',
            text: 'La sección se ha editado correctamente.',
            confirmButtonText: 'Aceptar'
        }).then((result) => {
            // Si el usuario da clic en Aceptar, redirecciona a la página anterior
            if (result.isConfirmed) {
                window.history.back();
            }
        });
    });

    document.getElementById('formAgregarSeccion').addEventListener('submit', function(event) {

            event.preventDefault();

            var form = document.getElementById('formAgregarSeccion');
            form.submit();

            Swal.fire({
                icon: 'success',
                title: '¡Sección añadida!',
                text: 'La sección se ha añadido correctamente.',
                confirmButtonText: 'Aceptar'
            }).then((result) => {
                // Si el usuario da clic en Aceptar, redirecciona a la página anterior
                if (result.isConfirmed) {
                    window.history.back();
                }
            });
        });

    $(document).ready(function() {

        $('#agregarProducto').on('show.bs.modal', function (e) {
            $('#imageCard').on('click', function() {
                createFileInput();
                document.getElementById('imageInput').click();
            });
        });

        $('#agregarProducto').on('hidden.bs.modal', function (e) {
            // Limpiar el contenedor de la imagen cuando se cierre el modal
            var output = document.getElementById('imageCard');
            output.innerHTML = '<i class="fa fa-plus fa-2x"></i><p>Agregar Imagen</p>';

            // Eliminar cualquier input de archivo existente
            var existingInput = document.getElementById('imageInput');
            if (existingInput) {
                existingInput.remove();
            }
        });
    });
</script>


    </body>
</html>
