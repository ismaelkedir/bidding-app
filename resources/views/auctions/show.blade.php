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

            <div class="circle-shadow shadow1"></div>
            <div class="circle-shadow shadow2"></div>
            <div class="circle-shadow shadow3"></div>

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
                        <button id="show-login" class="btns">Log In</button>
                        <button id="sign-up" class="btns">Sign Up</button>
                    </div>
                </ul>
            </div>
        </div>
    </div>
    <div class="imageB">
        <img src="img/8dc956a1d83109121ffe7b29299360b5.jpg" alt="image"
            style="height: 250px; width:350px; border-radius: 10px;">
    </div>
    <h2>Description</h2>
    <div class="des">

        <p>lourem loefkgksfhggksdj fgkjsdf dsfjgksdf dskfjgd fgkjsdfg sdfkjgsndf kdjfg
        </p>
    </div>
    <div class="line">
        <p>Bidders Name</p>
        <p>Price</p>s
    </div>
    <div class="bid"></div>
    <div class="bid2"></div>
    <div class="bid3"></div>
    <div class="bid4"></div>
    <div class="bid5"></div>
    <div class="bid6"></div>
    <div class="bid7"></div>
    <div class="bid8"></div>

    </div>

    <div class="bidA">
        <button class="bid-button mines" style="position: absolute; top: 60%; left: 7%; ">-</button>
        <button class="bid-button plues" style="position: absolute; top: 60%; left: 15%; ">+</button>
        <input type="text" value="8000 Birr" style="position: absolute; top: 60%; left: 10%; ">
        <input type="submit">
    </div>


    </div>

</body>

</html>
