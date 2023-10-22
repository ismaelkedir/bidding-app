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
                <span id="logo-text"><span id='firstname'>Bidding- </span>Application</span>
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

            <div class="container">
                <div class="row flex min-vh-100 justify-content-center align-content-center">
                    <div class="col-12 text-center">
                        <h1 style="font-size: 3rem">Your profile</h1>
                        <p>Ismael Kedir</p>
                        <p>
                            ...
                            ...
                        </p>
                        <div class="row flex justify-content-center">
                            <div class="col-md-2">
                                <button class="btn btn-primary" style="background-color: #1ba965"
                                    onclick="logout()">Logout</button>
                                <script>
                                    function logout() {
                                        window.location.href = '/';
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
