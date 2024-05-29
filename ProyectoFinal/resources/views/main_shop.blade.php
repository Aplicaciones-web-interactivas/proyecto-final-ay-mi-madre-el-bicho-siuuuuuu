<!DOCTYPE html>
<html>
<head>
    <title>Catálogo de Productos</title>
    <!-- Fonts and Bootstrap -->
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

    <style>
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
            height: 400px;
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
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item me-5 mt-2">
                    <a class="nav-link" href="#" id="cartIcon">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="cart-count me-5 mt-2" id="cartCount">0</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container center-container mt-4">
        @foreach($providers as $provider)
            <div class="brand-container col-md-8">
                <div class="brand-header">
                    <h2>{{ $provider->brand_name }}</h2>
                </div>
                <div class="sections-container">
                    @foreach($provider->workspaces as $workspace)
                        @foreach($workspace->sections as $section)
                            <h3 class="section-title">{{ $section->name }}</h3>
                            <div class="row">
                                @foreach($section->products as $product)
                                    <div class="col-md-4">
                                        <div class="card mb-4">
                                            <img src="{{ $product->image }}" class="card-img-top" alt="{{ $product->name }}">
                                            <div class="card-body">
                                                <h5 class="card-title">{{ $product->name }}</h5>
                                                <p class="card-text">{{ $product->description }}</p>
                                                <p class="card-text"><strong>Precio:</strong> ${{ $product->price }}</p>
                                                <button class="btn btn-primary" data-toggle="modal" data-target="#productModal" data-name="{{ $product->name }}" data-description="{{ $product->description }}" data-price="{{ $product->price }}" data-stock="{{ $product->stock }}" data-image="{{ $product->image }}">Ver Detalles</button>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endforeach
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>

    <!-- Modal -->
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
                    <img src="" class="modal-img" alt="">
                    <h5 id="modalProductName"></h5>
                    <p id="modalProductDescription"></p>
                    <p><strong>Precio:</strong> $<span id="modalProductPrice"></span></p>
                    <p><strong>Stock:</strong> <span id="modalProductStock"></span></p>
                    <div class="form-group">
                        <label for="modalProductQuantity">Cantidad:</label>
                        <input type="number" class="form-control" id="modalProductQuantity" value="1" min="1">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" id="addToCart">Añadir al carrito</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Cart Modal -->
    <div class="modal fade" id="cartModal" tabindex="-1" role="dialog" aria-labelledby="cartModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cartModalLabel">Carrito de Compras</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Producto</th>
                                <th>Precio</th>
                                <th>Cantidad</th>
                                <th>Total</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <tbody id="cartItems">
                            <!-- Cart items will be inserted here dynamically -->
                        </tbody>
                    </table>
                    <h5>Total: $<span id="cartTotal">0</span></h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary">Proceder al Pago</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            var cart = [];

            // Toggle sections
            $('.brand-header').click(function() {
                var container = $(this).parent();
                var sections = $(this).next('.sections-container');
                
                if (container.hasClass('expanded')) {
                    sections.slideUp();
                    container.removeClass('expanded');
                } else {
                    sections.slideDown();
                    container.addClass('expanded');
                }
            });

            // Open product modal and fill details
            $('#productModal').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget);
                var name = button.data('name');
                var description = button.data('description');
                var price = button.data('price');
                var stock = button.data('stock');
                var image = button.data('image');

                var modal = $(this);
                modal.find('.modal-title').text(name);
                modal.find('#modalProductName').text(name);
                modal.find('#modalProductDescription').text(description);
                modal.find('#modalProductPrice').text(price);
                modal.find('#modalProductStock').text(stock);
                modal.find('.modal-img').attr('src', image);
                modal.find('#modalProductQuantity').val(1);
            });

            // Add to cart
            $('#addToCart').click(function() {
                var modal = $('#productModal');
                var name = modal.find('#modalProductName').text();
                var price = parseFloat(modal.find('#modalProductPrice').text());
                var quantity = parseInt(modal.find('#modalProductQuantity').val());

                var product = {
                    name: name,
                    price: price,
                    quantity: quantity
                };

                var existingProductIndex = cart.findIndex(item => item.name === name);
                if (existingProductIndex > -1) {
                    cart[existingProductIndex].quantity += quantity;
                } else {
                    cart.push(product);
                }

                updateCartCount();
                $('#productModal').modal('hide');

                // Mostrar la alerta de éxito
                showSuccessAlert("Producto añadido al carrito");
            });

            // Update cart count
            function updateCartCount() {
                var totalQuantity = cart.reduce((total, product) => total + product.quantity, 0);
                $('#cartCount').text(totalQuantity);
            }

            // Show cart modal
            $('#cartIcon').click(function() {
                var cartItems = $('#cartItems');
                cartItems.empty();

                var total = 0;
                cart.forEach(function(product, index) {
                    var productTotal = product.price * product.quantity;
                    total += productTotal;

                    var row = `
                        <tr>
                            <td>${product.name}</td>
                            <td>$${product.price.toFixed(2)}</td>
                            <td>${product.quantity}</td>
                            <td>$${productTotal.toFixed(2)}</td>
                            <td><button class="btn btn-danger btn-sm remove-item" data-index="${index}">Eliminar</button></td>
                        </tr>
                    `;
                    cartItems.append(row);
                });

                $('#cartTotal').text(total.toFixed(2));
                $('#cartModal').modal('show');
            });

            // Remove item from cart
            $(document).on('click', '.remove-item', function() {
                var index = $(this).data('index');
                cart.splice(index, 1);
                updateCartCount();
                $('#cartIcon').click(); // Refresh cart modal

                // Mostrar la alerta de éxito
                showSuccessAlert("Producto eliminado del carrito");
            });

            function showSuccessAlert(message) {
                Swal.fire({
                    position: "center",
                    icon: "success",
                    title: message,
                    showConfirmButton: false,
                    timer: 1500
                });
            }
        });
    </script>
</body>
</html>
