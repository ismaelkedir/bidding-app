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
    <style>
        * {
            margin: 0;
            padding: 0;
            color: #fff;
        }

        .landing-page {
            width: 100%;
            height: 100vh;
            background-color: #000;
            padding: 10px;
            overflow: hidden;
            scroll-behavior: none;
        }

        /* logo image styling */
        .img {
            width: 50px;
            height: 45px;
            margin: 10px;
        }

        #img #firstname {
            color: #1ba965;
            font-weight: 800;
        }

        #logo-text {
            font-size: 20px;
        }

        .circle-shadow {
            position: absolute;
            top: -50px;
            left: -50px;
            height: 200px;
            width: 200px;
            box-shadow: 5px 5px 40px 50px #1ba965;
            filter: blur(70px);
            opacity: .5;
            border: solid balck 2px;
            border-radius: 50%;
            background-color: #1ba965;
        }

        .shadow2 {
            position: absolute;
            top: 50px;
            left: 85%;
        }

        .shadow3 {
            position: absolute;
            top: 80%;
            left: 40%;
            opacity: .3;
            filter: blur(150px);

        }

        /* link and logo styling part */
        #links {
            position: relative;
            top: -50px;

        }

        #links ul {
            display: flex;
            justify-content: center;
        }

        #links ul li {
            list-style: none;

        }

        #links ul li a {
            text-decoration: none;
        }

        #links div {
            position: absolute;
            left: 85%;
        }

        #links div button {
            font-size: 10px;
            padding: 10px;
            border-radius: 7px;
            background-color: #1ba965;

        }

        /* css styling for all the btns class */
        .btns {
            background-color: transparent;
            color: #fff;
            padding: 10px;
            margin: 10px 5px;
            border: solid #1ba965 1px;
            border-radius: 7px;
            transition: transform, background, .4s linear;
            font-size: 10px;

        }

        .btns:hover {
            transform: scale(1.1);
            background-color: #1ba965;
            border: solid 1px #1ba965;
        }

        .show-login:hover {
            background-color: transparent;
            color: #1ba965;
        }

        #sign-up:hover {
            background-color: transparent;
            color: #1ba965;
        }

        /* popup signup start */
        /* popup start*/
        .center button {
            padding: 10px 20px;
            font-size: 15px;
            font-weight: 600;
            color: var(---accentcolor);
            background: #f5f5f5;
            border: none;
            outline: none;
            cursor: pointer;
            border-radius: 5px;
        }

        .popupS {
            position: absolute;
            padding: 5rem;
            top: -150%;
            left: 50%;
            opacity: 0;
            transform: translate(-50%, -50%) scale(1.25);
            width: 380px;
            height: 480px;
            padding: 20px 30px;
            background: transparent;
            border-radius: 10px;
            box-shadow: 8px 8px 15px rgba(0, 187, 93, 0.253);
            transition: top 0ms ease-in-out 200ms,
                opacity 200ms ease-in-out 0ms,
                transform 200ms ease-in-out 0ms;
        }

        .popupS.active {
            top: 50%;
            opacity: 1;
            transform: translate(-50%, -50%) scale(1);
            transition: top 0ms ease-in-out 0ms,
                opacity 200ms ease-in-out 0ms,
                transform 200ms ease-in-out 0ms;
        }

        .page-content.active {
            opacity: 1;
            filter: blur(4px);
            pointer-events: none;
        }

        .popupS .close-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
            width: 15px;
            height: 15px;
            background: #1ba965;
            color: black;
            text-align: center;
            line-height: 15px;
            border-radius: 15px;
        }

        .popupS .form h2 {
            text-align: center;
            color: #fff;
            margin: 10px 0px 20px;
            font-size: 25px;
        }

        .popupS .form .form-element {
            margin: 25px 0px;
        }

        .popupS.form.form-element label {
            font-size: 14px;
            color: #888;
        }

        .popupS .form .form-element input[type="text"],
        .popupS .form .form-element input[type="password"] {
            margin-top: 5px;
            font-size: medium;
            margin: auto;
            display: block;
            width: 90%;
            ;
            padding: 10px;
            outline: none;
            color: #f5f5f5;
            background: #053b21ec;
            border: 1px solid #000;
            padding: 14px 10px;
            border-radius: 24px;
            transition: 0.5s;
        }

        .popupS .form .form-element input[type="text"]:hover,
        .popupS .form .form-element input[type="password"]:hover {
            border: 2px solid #0fa75dec;
            background: #0fa75dec;
            color: #fff;
            width: 100%;
            padding: 14px 10px;
            border-radius: 24px;
        }

        .popupS .form .form-element input[type="text"]::after,
        .popupS .form .form-element input[type="password"]::after {
            border: 2px solid #0fa75dec;
            background: #0fa75dec;
            color: rgb(20, 12, 12);
            width: 100%;
            padding: 14px 10px;
            border-radius: 24px;
        }

        .popupS .form .form-element button {
            cursor: pointer;
            width: 100%;
            height: 40px;
            border: none;
            border: 2px solid transparent;
            background: #1ba965;
            color: rgb(20, 12, 12);
            font-size: 16px;
            outline: none;
            border-radius: 10px;
        }

        #remember-me {
            color: #0fa75dec;
        }

        .popupS .form .form-element a {
            display: block;
            text-align: right;
            font-size: 15px;
            color: #1ba965;
            text-decoration: none;
            font-weight: 600;
        }

        #inside-signin {
            border-radius: 10px;
            width: 35%;
            margin: auto;
            transition: 1s;

        }

        #inside-signin:hover {
            width: 40%;

        }

        #forgot a {
            margin-top: 2rem;
            display: block;
            text-align: right;
            font-size: 15px;
            color: #1ba965;
            text-decoration: none;
            font-weight: 600;
            transition: 1s;
        }

        #forgot a:hover {
            color: #29f391;
        }

        /* popup end */
        /* popup login end */

        /* popup start*/
        .center button {
            padding: 10px 20px;
            font-size: 15px;
            font-weight: 600;
            color: var(---accentcolor);
            background: #f5f5f5;
            border: none;
            outline: none;
            cursor: pointer;
            border-radius: 5px;
        }

        .popup {
            position: absolute;
            padding: 5rem;
            top: -150%;
            left: 50%;
            opacity: 0;
            transform: translate(-50%, -50%) scale(1.25);
            width: 380px;
            height: 480px;
            padding: 20px 30px;
            background: transparent;
            border-radius: 10px;
            box-shadow: 8px 8px 15px rgba(0, 187, 93, 0.253);
            transition: top 0ms ease-in-out 200ms,
                opacity 200ms ease-in-out 0ms,
                transform 200ms ease-in-out 0ms;
        }

        .popup.active {
            top: 50%;
            opacity: 1;
            transform: translate(-50%, -50%) scale(1);
            transition: top 0ms ease-in-out 0ms,
                opacity 200ms ease-in-out 0ms,
                transform 200ms ease-in-out 0ms;
        }

        .page-content.active {
            opacity: 1;
            filter: blur(4px);
            pointer-events: none;
        }

        .popup .close-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
            width: 15px;
            height: 15px;
            background: #1ba965;
            color: black;
            text-align: center;
            line-height: 15px;
            border-radius: 15px;
        }

        .popup .form h2 {
            text-align: center;
            color: #fff;
            margin: 10px 0px 20px;
            font-size: 25px;
        }

        .popup .form .form-element {
            margin: 25px 0px;
        }

        .popup.form.form-element label {
            font-size: 14px;
            color: #888;
        }

        .popup .form .form-element input[type="text"],
        .popup .form .form-element input[type="password"] {
            margin-top: 5px;
            font-size: medium;
            margin: auto;
            display: block;
            width: 90%;
            ;
            padding: 10px;
            outline: none;
            color: #f5f5f5;
            background: #053b21ec;
            border: 1px solid #000;
            padding: 14px 10px;
            border-radius: 24px;
            transition: 0.5s;
        }

        .popup .form .form-element input[type="text"]:hover,
        .popup .form .form-element input[type="password"]:hover {
            border: 2px solid #0fa75dec;
            background: #0fa75dec;
            color: #fff;
            width: 100%;
            padding: 14px 10px;
            border-radius: 24px;
        }

        .popup .form .form-element input[type="text"]::after,
        .popup .form .form-element input[type="password"]::after {
            border: 2px solid #0fa75dec;
            background: #0fa75dec;
            color: rgb(20, 12, 12);
            width: 100%;
            padding: 14px 10px;
            border-radius: 24px;
        }

        .popup .form .form-element button {
            cursor: pointer;
            width: 100%;
            height: 40px;
            border: none;
            border: 2px solid transparent;
            background: #1ba965;
            color: rgb(20, 12, 12);
            font-size: 16px;
            outline: none;
            border-radius: 10px;
        }

        #remember-me {
            color: #0fa75dec;
        }

        .popup .form .form-element a {
            display: block;
            text-align: right;
            font-size: 15px;
            color: #1ba965;
            text-decoration: none;
            font-weight: 600;
        }

        #inside-signin {
            border-radius: 10px;
            width: 35%;
            margin: auto;
            transition: 1s;

        }

        #inside-signin:hover {
            width: 40%;

        }

        #forgot a {
            margin-top: 2rem;
            display: block;
            text-align: right;
            font-size: 15px;
            color: #1ba965;
            text-decoration: none;
            font-weight: 600;
            transition: 1s;
        }

        #forgot a:hover {
            color: #29f391;
        }

        /* popup end */
    </style>
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
                        <button id="show-login" class="btns">Become a Seller</button>
                    </div>
                </ul>
            </div>
        </div>
        <div class="search-container">
            <form class="search-form">
                <input type="text" class="search-input" placeholder="Search for auction">
                <button class="search-button">
                    <i class="fa fa-search"></i>
                </button>
            </form>
        </div>
        <div class="green-box" style='height: 100px'>
            <p>You Bid, your rules</p>
        </div>
        <h1>Best Sellings</h1>
        <div class="cards-container">
            <div class="card">
                <img src="https://media.istockphoto.com/id/1277517088/photo/fancy-designer-antique-golden-bracelets-for-woman-fashion.jpg?b=1&s=612x612&w=0&k=20&c=CqcHyQ5ZPOXU1cVsq45CSAY8aZejH5ElXBm95hjwqQY="
                    alt="Product 1">
                <div class="card-info">
                    <p>Name: Product 1</p>
                    <p class="starting-price">Starting Price: 200 Birr</p>
                </div>
            </div>
            <div class="card">
                <img src="https://t3.ftcdn.net/jpg/02/34/21/58/360_F_234215884_pAF9PoUM5xEAsqW8g2oXsFUPRnkuOA14.jpg"
                    alt="Product 2">
                <div class="card-info">
                    <p>Name: Product 2</p>
                    <p class="starting-price">Starting Price: 200 Birr</p>
                </div>
            </div>
            <div class="card">
                <img src="https://via.placeholder.com/150" alt="Product 3">
                <div class="card-info">
                    <p>Name: Product 3</p>
                    <p class="starting-price">Starting Price: 200 Birr</p>
                </div>
            </div>
            <div class="card">
                <img src="https://via.placeholder.com/150" alt="Product 4">
                <div class="card-info">
                    <p>Name: Product 4</p>
                    <p class="starting-price">Starting Price: 200 Birr</p>
                </div>
            </div>
        </div>
        <h1>All Sellings</h1>
        <div class="cards-container">
            <div class="card">
                <img src="https://via.placeholder.com/150" alt="Product 1">
                <div class="card-info">
                    <p>Name: Product 1</p>
                    <p class="starting-price">Starting Price: 200 Birr</p>
                </div>
            </div>
            <div class="card">
                <img src="https://via.placeholder.com/150" alt="Product 2">
                <div class="card-info">
                    <p>Name: Product 2</p>
                    <p class="starting-price">Starting Price: 200 Birr</p>
                </div>
            </div>
            <div class="card">
                <img src="https://via.placeholder.com/150" alt="Product 3">
                <div class="card-info">
                    <p>Name: Product 3</p>
                    <p class="starting-price">Starting Price: 200 Birr</p>
                </div>
            </div>
            <div class="card">
                <img src="https://via.placeholder.com/150" alt="Product 4">
                <div class="card-info">
                    <p>Name: Product 4</p>
                    <p class="starting-price">Starting Price: 200 Birr</p>
                </div>
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
