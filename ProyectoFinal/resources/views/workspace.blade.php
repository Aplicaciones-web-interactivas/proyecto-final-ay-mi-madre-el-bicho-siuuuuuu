<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Workspace</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
                <div class="section-box bg-light mb-3 p-3">
                    <h5>{{ $section->name }}</h5>
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


    <!-- Bootstrap JS y dependencias -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</html>
