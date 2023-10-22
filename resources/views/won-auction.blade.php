<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bidding App</title>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body class="antialiased">
    <div class="landing-page">
        <div class="page-content">
            <div class="circle-shadow shadow1"></div>
            <div class="circle-shadow shadow2"></div>
            <div class="circle-shadow shadow3"></div>
            <div id="img"><span id="logo-text"><span id='firstname'>Bidding- </span>Application</span></div>
            <div id="links">
                <ul>
                    <li class="btns"><a href="#">HOME</a></li>
                    <li class="btns"><a href="#">ABOUT US</a></li>
                    <li class="btns "><a href="#">CONTACT US</a></li>
                    <div id="link-btn"><button id="show-login" class="btns">Log In</button><button id="sign-up"
                            class="btns">Sign Up</button></div>
                </ul>
            </div>
            <div class="container">
                <div class="h" style="color: white ; margin-left: 0px; margin-top: 100px ;">
                    <h1 style="margin-left: 0px; margin-top: 100px ; font-size: 50px">Congratulation! You have Won the
                        Auction! <br>
                    </h1>
                </div>
            </div>
        </div>
</body>

</html>
