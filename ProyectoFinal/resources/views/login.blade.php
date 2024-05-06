<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-200">
    <div class="container mx-auto mt-8">
        <div class="w-96 bg-white p-6 rounded shadow-md mx-auto relative"> <!-- Agregamos la clase relative -->
            <!-- Agregamos el botón de registro en la esquina superior derecha -->
            <a href="{{ route('register') }}" class="absolute top-0 right-0 mt-2 mr-2 text-blue-500 hover:text-blue-600">Registrarse</a>
            <h2 class="text-2xl font-semibold mb-6">Iniciar Sesión</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-4">
                    <label for="email" class="block text-gray-600">Correo Electrónico</label>
                    <input id="email" type="email" name="email" class="form-input mt-1 block w-full" value="{{ old('email') }}" required autofocus autocomplete="email">
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-gray-600">Contraseña</label>
                    <input id="password" type="password" name="password" class="form-input mt-1 block w-full" required autocomplete="current-password">
                </div>
                <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Iniciar Sesión</button>
            </form>
        </div>
    </div>
</body>
</html>
