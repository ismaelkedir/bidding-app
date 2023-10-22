<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body class="antialiased">
    <div class="landing-page">
        <div class="page-content">
            <div id="img">
                <img class="img" src="logo.png" alt='logo img'>
                <span id="logo-text"><span id='firstname'>Bidding- </span>Application</span>
            </div>
            <div class="logo" id="toggle">
                <img src="img/sun.png" alt="" onclick="mytoggle()">
            </div>
            <div id="links">
                <ul>
                    <li class="btns"><a href="#">HOME</a> </li>
                    <li class="btns"><a href="#"> ABOUT US</a> </li>
                    <li class="btns "><a href="#">CONTACT US</a> </li>
                    <div id="link-btn">
                        <button id="show-login" class="btns">Become a Seller</button>
                    </div>
                </ul>
            </div>
        </div>
        <div class="container">
            <div class="green-box" style='height: 100px'>
                <p>You Bid, your rules</p>
            </div>
            <div class="search-container">
                <form class="search-form">
                    <input type="text" class="search-input" placeholder="Search for auction">
                    <button class="search-button">
                        <i class="fa fa-search"></i>
                    </button>
                </form>
            </div>
            <div class="row">
                <h1>Best Sellings</h1>
                <div class="cards-container">
                    <div class="row">
                        @foreach ($auctions as $auction)
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <img src="{{ $auction->image }}" alt="{{ $auction->title }}">
                                        <h5 class="card-title">Name: {{ $auction->title }}</h5>
                                        <p class="card-text" style="color: #000">{{ $auction->description }}</p>
                                        <p class="card-text text-black-50">Starting at:
                                            {{ $auction->starting_price }}ETB
                                        </p>
                                        <a href="{{ route('auctions.show', $auction->id) }}" class="btn btn-primary"
                                            style="background-color: #1ba965">View
                                            Details</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="row">
                <h1>All Sellings</h1>
                @foreach ($auctions as $auction)
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <img src="{{ $auction->image }}" alt="{{ $auction->title }}">
                                <h5 class="card-title">Name: {{ $auction->title }}</h5>
                                <p class="card-text">{{ $auction->description }}</p>
                                <p class="card-text">Starting at: {{ $auction->starting_price }}</p>
                                <a href="{{ route('auctions.show', $auction->id) }}" class="btn btn-primary">View
                                    Details</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <script>
        function mytoggle() {
            const body = document.querySelector('body');
            const toggle = document.getElementById('toggle');
            toggle.onclick = function() {
                toggle.classList.toggle('active');
                body.classList.toggle('active');
            }
        }
    </script>
    <script src="bidding login.js"></script>
    <script src="bidding signup.js"></script>

</body>

</html>
