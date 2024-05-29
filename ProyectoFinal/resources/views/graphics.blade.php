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
    <style>
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
    </style>
</head>
<body>
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
