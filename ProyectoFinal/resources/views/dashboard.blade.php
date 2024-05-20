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

        <!-- Styles -->
    </head>

    
    <body class="antialiased">

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
                        <th>Espacio de trabajo</th>
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
                                <a href="{{route('proveedor.eliminar',$proveedor->user->id)}}" class="btn btn-sm btn-danger"> <i class="fas fa-trash">  </i></a> 
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
                                    <input type="text" class="form-control" id="nombre" name="nombre">
                                </div>
                                <div class="form-group">
                                    <label for="correo">Correo</label>
                                    <input type="email" class="form-control" id="correo" name="correo">
                                </div>
                                <div class="form-group">
                                    <label for="contraseña">Contraseña</label>
                                    <input type="text" class="form-control" id="contraseña" name="contraseña">
                                </div>
                                <div class="form-group">
                                    <label for="brand">Nombre de la marca</label>
                                    <input type="text" class="form-control" id="brand" name="brand">
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
                                <input type="email" class="form-control" id="correo_prov" name="email">
                            </div>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary">Editar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </body>

    <script>
        function editarProveedor(id, nombre, correo) {
            $('#nombre_prov').val(nombre); 
            $('#correo_prov').val(correo); 
            var form = document.getElementById('formEditarProveedor');
            form.action = "{{ route('proveedor.editar', ':id') }}".replace(':id', id);
            $('#editarProveedor').modal('show');
        }
    </script>


    <!-- Bootstrap JS y dependencias -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</html>
