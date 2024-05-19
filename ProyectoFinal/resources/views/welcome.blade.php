<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

    <!-- Styles -->
    <style>

        .navbar{
            margin-bottom: 50px;
        }
        .black-banner {
            background-color: #000;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            height: 100px;
        }
        .country-flag {
            width: 30px;
            height: auto;
        }
        .player-flag {
            width: 20px;
            height: auto;
            margin-right: 10px;
        }
        .player-club {
            width: 30px;
            height: auto;
            margin-right: 10px;
        }
        .table-responsive {
            height: 300px;
            overflow-y: auto;
        }
        .table th, .table td {
            vertical-align: middle;
            text-align: center;
        }
        .table thead th {
            background-color: #f8f9fa;
        }
        .dataTables_wrapper .dataTables_paginate .paginate_button {
            padding: 0.5em 1em;
            margin-left: 0.5em;
            border-radius: 0.25em;
        }
        .dataTables_wrapper .dataTables_paginate .paginate_button.current {
            background-color: #007bff;
            color: white !important;
        }
        .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
            background-color: #0056b3;
            color: white !important;
        }
        .player-card {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        .player-image {
            width: 50px;
            height: auto;
            margin-right: 15px;
        }
        .player-info {
            flex: 1;
        }
        .player-info h5 {
            margin: 0;
            font-size: 1.1em;
        }
        .news-container {
            max-width: 800px;
            margin: 0 auto;
            margin-top: 30px;
        }
        .news-item {
            padding: 10px;
            text-align: center;
        }
        .news-item img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            border-radius: 5px;
        }
        .news-item h2 {
            margin: 10px 0;
        }
        .news-item p {
            font-size: 0.9em;
            color: #555;
        }
        .news-item a {
            color: #007BFF;
            text-decoration: none;
        }
        .news-item a:hover {
            text-decoration: underline;
        }
        .gif-container {
            position: relative;
            height: 200px; 
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        .gif {
            position: relative; /* Cambiado a relative */
            width: 11%; /* Tamaño más grande */
            display: none;
            top: 0.5rem; /* Ajustado a 1 rem */
        }

        .gif.right {
            animation: moveRight 10s linear forwards; /* Más lenta */
        }

        .gif.left {
            animation: moveLeft 10s linear forwards; /* Más lenta */
        }

        .gif.fast {
            animation-duration: 8s; /* Más lenta */
        }

        @keyframes moveRight {
            0% { left: -50%; } /* Aumentado a -15% para salir de la ventana */
            100% { left: 100%; } /* Aumentado a 115% para salir de la ventana */
        }

        @keyframes moveLeft {
            0% { right: -50%; } /* Aumentado a -15% para salir de la ventana */
            100% { right: 100%; } /* Aumentado a 115% para salir de la ventana */
        }


    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="btn btn-primary mr-3" href="{{ route('register') }}">Registro</a>
                </li>
                <br>
                <li class="nav-item">
                    <a class="btn btn-secondary" href="{{ route('login') }}">Login</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container" style="margin-top: 75px">
        <div class="row d-flex justify-content-between">
            <div class="col-md-6">
                <h1 class="mb-4 text-center">Clasificación Mundial FIFA</h1>
                <div class="table-responsive">
                    <table id="ranking-table" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Ranking</th>
                                <th>Bandera</th>
                                <th>Nombre del País</th>
                                <th>Puntos</th>
                                <th>Confederación</th>
                            </tr>
                        </thead>
                        <tbody id="ranking-table-body">
                            <!-- Aquí se insertarán las filas de datos -->
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-6">
                <h2 class="text-center">Los 11 Jugadores Más Valiosos</h2>
                <div class="table-responsive">
                    <div id="players-section" class="mt-3">
                        <!-- Aquí se insertarán los jugadores más valiosos -->
                    </div>
                </div>
            </div>
        </div>

        <div class="news-container" id="news-container"></div>

        
    </div>
    <br><br><br><br><br><br>
    <div class="gif-container">
        <img src="{{ asset('img/messi.gif') }}" alt="Messi" class="gif right" id="messi">
        <img src="{{ asset('img/vela.gif') }}" alt="Vela" class="gif right fast" id="vela">
        <img src="{{ asset('img/mane.gif') }}" alt="Mane" class="gif left" id="mane">
        <img src="{{ asset('img/dybala.gif') }}" alt="Dybala" class="gif left" id="dybala">
        <img src="{{ asset('img/modric.gif') }}" alt="Modric" class="gif left" id="modric">
        <img src="{{ asset('img/morgan.gif') }}" alt="Morgan" class="gif left" id="morgan">
        <img src="{{ asset('img/james.gif') }}" alt="James" class="gif right" id="james">
        <img src="{{ asset('img/van-dijk.gif') }}" alt="Van Dijk" class="gif right" id="van-dijk">
        <img src="{{ asset('img/de_bruyne.gif') }}" alt="De Bruyne" class="gif left" id="de_bruyne">
    </div>

    <div class="black-banner">
        </div>

    <!-- Modal -->
    <div class="modal fade" id="playerModal" tabindex="-1" aria-labelledby="playerModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="playerModalLabel">Información del Jugador</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Aquí se insertará la información del jugador -->
                    <div id="playerDetails">
                        <img id="modalPlayerImage" src="" alt="Jugador" class="player-image">
                        <div class="player-info">
                            <h5 id="modalPlayerName"></h5>
                            <p id="modalPlayerAge"></p>
                            <p id="modalPlayerBirthday"></p>
                            <p id="modalPlayerClub"></p>
                            <p id="modalPlayerPosition"></p>
                            <p id="modalPlayerMarketValue"></p>
                            <!-- Añadir más campos según sea necesario -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-sr9OCDsVxVpN/BSc6yl64k49l+3r8mJXieezSQtDqV4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!-- Tu script personalizado -->
    <script>
        $(document).ready(function() {
            const settings = {
                async: true,
                crossDomain: true,
                url: 'https://transfermarkt-db.p.rapidapi.com/v1/rankings/fifa?locale=MX',
                method: 'GET',
                headers: {
                    'X-RapidAPI-Key': '05fca2d9d3msh056d1b800a0f791p19225fjsn53640c4202e5',
                    'X-RapidAPI-Host': 'transfermarkt-db.p.rapidapi.com'
                }
            };

            $.ajax(settings).done(function(response) {
                const teams = response.data.teams;
                const tableBody = $('#ranking-table-body');
                teams.forEach((team, index) => {
                    const row = `<tr>
                        <td>${index + 1}</td>
                        <td><img src="${team.countryImage}" alt="${team.countryName}" class="country-flag"></td>
                        <td>${team.countryName}</td>
                        <td>${team.totalPoints}</td>
                        <td>${team.confederation}</td>
                    </tr>`;
                    tableBody.append(row);
                });

                // Inicializar DataTables
                $('#ranking-table').DataTable({
                    pageLength: 15,
                    lengthMenu: [15, 30, 50, 100],
                });
            });

            const mvpSettings = {
                async: true,
                crossDomain: true,
                url: 'https://transfermarkt-db.p.rapidapi.com/v1/markets/most-valuable-players?locale=MX',
                method: 'GET',
                headers: {
                    'X-RapidAPI-Key': '05fca2d9d3msh056d1b800a0f791p19225fjsn53640c4202e5',
                    'X-RapidAPI-Host': 'transfermarkt-db.p.rapidapi.com'
                }
            };

            $.ajax(mvpSettings).done(function(response) {
                const players = response.data.players;
                const playersSection = $('#players-section');
                players.forEach(player => {
                    const playerCard = `<div class="player-card" data-player='${JSON.stringify(player)}'>
                        <img src="${player.playerImage}" alt="${player.playerName}" class="player-image">
                        <div class="player-info">
                            <h5>${player.playerName}</h5>
                            <p>
                                <img src="${player.countryImage}" alt="${player.playerName}" class="player-flag">
                                ${player.currentPosition} | 
                                <img src="${player.clubImage}" alt="${player.clubName}" class="player-club">
                                ${player.clubName} | 
                                Valor de mercado: ${player.marketValue} ${player.marketValueCurrency}
                            </p>
                        </div>
                    </div>`;
                    playersSection.append(playerCard);
                });

                // Manejar el clic en una tarjeta de jugador para abrir el modal
                $('.player-card').on('click', function() {
                    const player = $(this).data('player');
                    $('#modalPlayerImage').attr('src', player.playerImage);
                    $('#modalPlayerName').text(player.playerName);
                    $('#modalPlayerAge').text(`Edad: ${player.age}`);
                    $('#modalPlayerBirthday').text(`Cumpleaños: ${player.birthday}`);
                    $('#modalPlayerClub').html(`<img src="${player.clubImage}" alt="${player.clubName}" class="player-club"> Club: ${player.clubName}`);
                    $('#modalPlayerPosition').text(`Posición: ${player.currentPosition}`);
                    $('#modalPlayerMarketValue').text(`Valor de mercado: ${player.marketValue} ${player.marketValueCurrency}`);

                    // Mostrar el modal
                    $('#playerModal').modal('show');
                });
            });

            const news = {
                async: true,
                crossDomain: true,
                url: 'https://flashlive-sports.p.rapidapi.com/v1/news/most-read?locale=es_ES',
                method: 'GET',
                headers: {
                    'X-RapidAPI-Key': '05fca2d9d3msh056d1b800a0f791p19225fjsn53640c4202e5',
                    'X-RapidAPI-Host': 'flashlive-sports.p.rapidapi.com'
                }
            };

            $.ajax(news).done(function(response) {
                const newsContainer = $('#news-container');
                response.DATA.forEach(function(newsItem) {
                    const article = newsItem.ARTICLE;
                    const newsHtml = `
                        <div class="news-item">
                            <img src="${article.IMAGES[0].URL}" alt="${article.IMAGES[0].ALT_TEXT}">
                            <h2>${article.TITLE}</h2>
                            <p>${new Date(article.PUBLISHED * 1000).toLocaleString()}</p>
                            <a href="${article.URL}" target="_blank">Leer más</a>
                        </div>
                    `;
                    newsContainer.append(newsHtml);
                });

                // Initialize Slick Carousel
                newsContainer.slick({
                    dots: true,
                    infinite: true,
                    speed: 300,
                    slidesToShow: 1,
                    adaptiveHeight: true,
                    autoplay: true,
                    autoplaySpeed: 3000
                });
            });
        });

        document.addEventListener('DOMContentLoaded', function () {
            const gifs = document.querySelectorAll('.gif');
            let index = 0;

            function showNextGif() {
                if (index < gifs.length) {
                    const gif = gifs[index];
                    gif.style.display = 'block';
                    gif.addEventListener('animationend', function () {
                        gif.style.display = 'none';
                        index++;
                        if (index === gifs.length) {
                            index = 0; // Reiniciar el ciclo
                        }
                        showNextGif();
                    }, { once: true });
                }
            }

            showNextGif();
        });

    </script>
</body>
</html>
