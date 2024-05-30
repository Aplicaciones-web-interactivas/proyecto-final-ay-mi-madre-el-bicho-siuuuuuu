<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gráficas de Proveedores</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.0"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-adapter-date-fns@3.0.0"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        html, body {
    height: 100%;
    margin: 0;
    padding: 0;
}
        .chart-container {
            position: relative;
            width: 100%;
            height: 300px;
            margin: 20px 0;
        }
        .chart-title {
            text-align: center;
            margin-bottom: 10px;
            font-weight: bold;
        }
        .container{
    min-height: 100vh;
        }
        .row{
            flex:1;
        }
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
            background-color: #e2e2e2;   
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
            position: relative;
            color:white;
            padding: 20px;
            border: 1px solid #dee2e6;
            border-radius: 5px;
            text-align: center;
            transition: color 1s, box-shadow 1s;
            z-index: 1;
            overflow: hidden;
            
        }
        .brand-header:hover{
            transition-delay: 0s, 1s;
            color: white;
            box-shadow: 0 0 10px #005321,
             0 0 20px #005321,
             0 0 40px #005321,
             0 0 80px #005321,
             0 0 80px #005321;
        }
        .brand-header::before{
            content:'';
            position: absolute;
            top:0;
            left: -50px;
            width: 0;
            height: 100%;
            background: #5ce079;
            transform: skewX(35deg);
            transition: 1s;
            z-index: -1;
        }
        .brand-header:hover:before{
            width: 100%;
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
#cartIcon{
    color: rgb(0, 253, 156);
}
    
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
                {{-- <li class="nav-itemLogin pl-4 pr-4 pt-2 pb-2">
                    <a class="" href="{{ route('login') }}">Inicia sesión</a>
                    {{-- <a class="" href="{{ route('login') }}">Login</a> --}}
                {{-- </li> --}} 
                <li class="nav-itemLogin pl-4 pr-4 pt-2 pb-2">
                    <a href="{{ route('logout') }}"><button type="button">Cerrar sesión</button>
                    </a>                        {{-- <a class="" href="{{ route('login') }}">Login</a> --}}
                </li>
                {{-- <li class="nav-itemRegister pl-4 pr-4 pt-2 pb-2">
                    <a class="" href="{{ route('register') }}">Registro</a>
                </li> --}}
            </ul>
        </div>
    </nav>
    <br><br><br><br><br><br><br><br><br>
    <div class="container">
        <h1 class="text-center my-4">Análisis de Ventas</h1>
        
        <div class="row">
            <div class="col-md-6">
                <div class="chart-container">
                    <div class="chart-title">Cantidad de ventas de cada producto</div>
                    <canvas id="graficaBarras"></canvas>
                </div>
            </div>
            <div class="col-md-6">
                <div class="chart-container">
                    <div class="chart-title">Evolución temporal de las ventas de cada producto</div>
                    <canvas id="graficaLinea"></canvas>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-12">
                <div class="chart-container">
                    <div class="chart-title">Proporción de ventas totales de cada producto</div>
                    <canvas id="graficaPastel" width="200" height="200"></canvas>
                </div>
            </div>
        </div>
    </div>
    {{-- <footer id="footerTWO">
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
    </footer> --}}
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        var ventasPorProveedor = {!! json_encode($ventasPorProveedor) !!};
        var ventasPorFecha = {!! json_encode($ventasPorFecha) !!};

        // Procesar datos para la gráfica de barras y pastel
        var productNames = [];
        var productSales = [];
        var totalSales = {};

        ventasPorProveedor.forEach(function(venta) {
            productNames.push(venta.product_name);
            productSales.push(Math.round(venta.cantidad));
            if (totalSales[venta.product_name]) {
                totalSales[venta.product_name] += Math.round(venta.cantidad);
            } else {
                totalSales[venta.product_name] = Math.round(venta.cantidad);
            }
        });

        // Gráfica de Barras
        var ctxBarras = document.getElementById('graficaBarras').getContext('2d');
        var graficaBarras = new Chart(ctxBarras, {
            type: 'bar',
            data: {
                labels: productNames,
                datasets: [{
                    label: 'Cantidad de Ventas',
                    data: productSales,
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    x: {
                        title: {
                            display: true,
                            text: 'Productos'
                        }
                    },
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Cantidad'
                        },
                        ticks: {
                            precision: 0 // Mostrar solo números enteros en el eje Y
                        }
                    }
                }
            }
        });

        // Gráfica de Pastel
        var ctxPastel = document.getElementById('graficaPastel').getContext('2d');
        var graficaPastel = new Chart(ctxPastel, {
            type: 'pie',
            data: {
                labels: Object.keys(totalSales),
                datasets: [{
                    label: 'Proporción de Ventas',
                    data: Object.values(totalSales),
                    backgroundColor: Object.keys(totalSales).map(() => getRandomColor())
                }]
            }
        });

        // Procesar datos para la gráfica de línea
        var fechas = [];
        var ventasPorProducto = {};

        ventasPorFecha.forEach(function(venta) {
            var fecha = venta.fecha;
            var productName = venta.product_name;
            var cantidad = Math.round(venta.cantidad); // Redondear la cantidad a un número entero

            if (!fechas.includes(fecha)) {
                fechas.push(fecha);
            }

            if (!ventasPorProducto[productName]) {
                ventasPorProducto[productName] = [];
            }

            ventasPorProducto[productName].push({
                x: new Date(fecha),
                y: cantidad
            });
        });

        // Gráfica de Línea
        var ctxLinea = document.getElementById('graficaLinea').getContext('2d');
        var datasetsLinea = Object.keys(ventasPorProducto).map(function(productName) {
            return {
                label: productName,
                data: ventasPorProducto[productName],
                borderColor: getRandomColor(),
                fill: false
            };
        });

        var graficaLinea = new Chart(ctxLinea, {
            type: 'line',
            data: {
                datasets: datasetsLinea
            },
            options: {
                scales: {
                    x: {
                        type: 'time',
                        title: {
                            display: true,
                            text: 'Fecha'
                        },
                        time: {
                            unit: 'day',
                            tooltipFormat: 'PP',
                        }
                    },
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Cantidad'
                        },
                        ticks: {
                            precision: 0 // Mostrar solo números enteros en el eje Y
                        }
                    }
                }
            }
        });

        // Función para generar colores aleatorios
        function getRandomColor() {
            var letters = '0123456789ABCDEF';
            var color = '#';
            for (var i = 0; i < 6; i++) {
                color += letters[Math.floor(Math.random() * 16)];
            }
            return color;
        }
    </script>
</body>
</html>
