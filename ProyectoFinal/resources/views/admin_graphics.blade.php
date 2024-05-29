<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard de Proveedores</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.3.0"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-adapter-date-fns@3.0.0"></script>
    <style>
        .chart-container {
            position: relative;
            margin: auto;
            height: 300px;
            width: 100%;
        }
        .card {
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            background-color: #fff;
        }
        h2, h3 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2>Dashboard</h2>

        <div class="row">
            <!-- Gráfica de Barras (Ventas por Proveedor) -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <h3>Ventas por Proveedor</h3>
                    <div class="chart-container">
                        <canvas id="ventasPorProveedor"></canvas>
                    </div>
                </div>
            </div>

            <!-- Gráfica de Línea (Tendencia de Ventas) -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <h3>Tendencia de Ventas</h3>
                    <div class="chart-container">
                        <canvas id="tendenciaVentas"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Gráfica de Dona (Proporción de Ventas por Proveedor) -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <h3>Proporción de Ventas por Proveedor</h3>
                    <div class="chart-container">
                        <canvas id="proporcionVentasPorProveedor"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Datos desde el backend
        const ventasPorProveedor = @json($ventasPorProveedor);
        const tendenciaVentas = @json($tendenciaVentas);
        const proporcionVentasPorProveedor = @json($proporcionVentasPorProveedor);

        // Ventas por Proveedor
        const ctx1 = document.getElementById('ventasPorProveedor').getContext('2d');
        new Chart(ctx1, {
            type: 'bar',
            data: {
                labels: ventasPorProveedor.map(item => item.provider_name),
                datasets: [{
                    label: 'Ventas',
                    data: ventasPorProveedor.map(item => item.total_sales),
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Tendencia de Ventas
        const ctx2 = document.getElementById('tendenciaVentas').getContext('2d');
        new Chart(ctx2, {
            type: 'line',
            data: {
                labels: tendenciaVentas.map(item => item.month),
                datasets: [{
                    label: 'Ventas',
                    data: tendenciaVentas.map(item => item.total_sales),
                    borderColor: 'rgba(255, 99, 132, 1)',
                    fill: false
                }]
            },
            options: {
                scales: {
                    x: {
                        type: 'time',
                        time: {
                            unit: 'month'
                        }
                    },
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Proporción de Ventas por Proveedor
        const ctx3 = document.getElementById('proporcionVentasPorProveedor').getContext('2d');
        new Chart(ctx3, {
            type: 'doughnut',
            data: {
                labels: proporcionVentasPorProveedor.map(item => item.provider_name),
                datasets: [{
                    label: 'Ventas',
                    data: proporcionVentasPorProveedor.map(item => item.total_sales),
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            }
        });
    </script>
</body>
</html>
