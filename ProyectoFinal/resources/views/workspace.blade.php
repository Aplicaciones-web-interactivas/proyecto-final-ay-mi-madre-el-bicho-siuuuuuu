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

        <!-- Styles -->
        <style>
            .section-box {
                border: 1px solid #ccc;
                border-radius: 5px;
                background-color: #f8f9fa;
                width: 100%;
                padding: 15px;
                margin-bottom: 5px;
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
        </style>
    </head>

    
    <body class="antialiased">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#agregarSeccion">Agregar Seccion</button>
            </div>

            <div class="mx-auto text-center">
                <p class="h1">{{ $brandName }}</p>
            </div>
        </div>
    </nav>
        

 <!-- Secciones -->
<div class="container mt-5">
    @foreach ($sections as $section)
        <div class="section-box bg-light mb-3 p-3 section">
            <h5>{{ $section->name }}</h5>
        </div>
        <!-- Product Cards -->
        <div class="row product_container">
            <!-- Card for adding new product -->
            <div class="col-md-3 mb-3">
                        <div class="card add-product-card custom-card" style="cursor: pointer;" onclick="openAddProductModal({{ $section->id }})">
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
                                <button type="button" class="btn btn-danger flex-fill ml-1"><a href="{{route('producto.eliminar',$product->id)}}" class="btn btn-sm btn-danger">Eliminar </a> </button>
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
                            <input type="text" class="form-control" id="name_prod" name="name_prod">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="price_prod">Precio del producto</label>
                            <input type="number" step="0.01" class="form-control" id="price_prod" name="price_prod">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="description_prod">Descripción del producto</label>
                            <input type="text" class="form-control" id="description_prod" name="description_prod">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="stock">Stock</label>
                            <input type="number" class="form-control" id="stock" name="stock">
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


    function openProductModal(productId, productName, productImage, productDescription, productPrice, productStock) {
        // Actualiza el contenido del modal con los detalles del producto
        $('#productDetails').html(`
            <h5>${productName}</h5>
            <img src="${productImage}" alt="${productName}" class="img-fluid">
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
