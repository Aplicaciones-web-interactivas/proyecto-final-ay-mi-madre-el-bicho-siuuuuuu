<!DOCTYPE html>
<html>
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
    </style>
</head>
<body>
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
                    <a href="{{ route('logout') }}"><button type="button">Cerrar sesión</button>
                    </a>                        {{-- <a class="" href="{{ route('login') }}">Login</a> --}}
                </li>
    
                <li class="nav-item me-5 mt-2">
                    <a class="nav-link" href="#" id="cartIcon">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="cart-count me-5 mt-2" id="cartCount">0</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <br><br><br><br><br><br><br>
    <div class="container center-container mt-4">
        <h2 class="FollowOnefootball_header__dSfrr mb-4 text-center" id="tituloRedesSociales">Catálogo de Productos</h2>
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
                                                <button class="btn btn-primary" data-toggle="modal" data-target="#productModal" data-id="{{ $product->id }}" data-name="{{ $product->name }}" data-description="{{ $product->description }}" data-price="{{ $product->price }}" data-stock="{{ $product->stock }}" data-image="{{ $product->image }}">Ver Detalles</button>
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
                        <input type="hidden" id="selectedProductId">
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
                    <button type="button" class="btn btn-primary" id="proceedToPayment">Proceder al Pago</button>
                </div>
            </div>
        </div>
    </div>
   
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
                var id = button.data('id');
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
                modal.find('#selectedProductId').val(id);
            });

            // Add to cart
            $('#addToCart').click(function() {
                var modal = $('#productModal');
                var name = modal.find('#modalProductName').text();
                var id = parseInt(modal.find('#selectedProductId').val());
                var price = parseFloat(modal.find('#modalProductPrice').text());
                var quantity = parseInt(modal.find('#modalProductQuantity').val());

                var product = {
                    id: id,
                    name: name,
                    price: price,
                    quantity: quantity
                };

                console.log(product);

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

            $('#proceedToPayment').click(function() {
                var productsData = cart.map(item => `${item.id}:${item.quantity}`).join(',');
                window.location.href = `{{ route('proceed-to-payment') }}?products=${productsData}`;
                showSuccessAlert("Compra realizada con éxito");
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
