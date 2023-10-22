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
                <div class="row flex min-vh-100 justify-content-center align-content-center">
                    <div class="col-12 text-center">
                        <h1 style="font-size: 4rem">"Let's Start Bidding!" </h1>
                        <p>This is just loreum epsem,
                            place holder but not a main content.</p>
                        <div class="row flex justify-content-center">
                            <div class="col-md-2"><button id="show-login-2" class="btn btn-primary"
                                    style="background-color: #1ba965">Log In</button></div>
                            <div class="col-md-2"><button id="sign-up-2" class="btn btn-primary" class="btns"
                                    style="background-color: #1ba965">Sign Up</button></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    < !-- sign-up popup start -->
        <div class="popupS">
            <div class="close-btn">&times;
            </div>
            <form action="sign-up.php" method="post">
                <div class="form">
                    <h2>Sign up</h2>
                    <div class="form-element"><label for="Username">Username</label><input type="text" id="Username"
                            placeholder="Enter Username" name="Username"></div>
                    <div class="form-element"><label for="Semail">Email</label><input type="text" id="Semail"
                            placeholder="Enter email" name="Email"></div>
                    <div class="form-element"><label for="Spassword">Password</label><input type="password"
                            id="Spassword" placeholder="Enter password" name="Password"></div>
                    <div class="form-element" id="remember-me"><input type="checkbox" id="remember-me"><label
                            for="remember-me">Remember me</label></div>
                    <div class="form-element" id="inside-signin">
                        < !-- <button>Sign in</button>--><button type="submit" class="btn1">Submit</button>
                    </div>
                </div>
                <div class="form-element" id="forgot"><a href="#">Forgot password?</a></div>
        </div>
        </form>
        < !-- sign-up popup end -->
            <div class="popup">
                <div class="close-btn">&times;
                </div>
                <div class="form">
                    <h2>Log in</h2>
                    <div class="form-element"><label for="email">Email</label><input type="text" id="email"
                            placeholder="Enter email"></div>
                    <div class="form-element"><label for="password">Password</label><input type="password"
                            id="password" placeholder="Enter password"></div>
                    <div class="form-element" id="remember-me"><input type="checkbox" id="remember-me"><label
                            for="remember-me">Remember me</label></div>
                    <div class="form-element" id="inside-signin">
                        <button type="submit" class="btn1" onclick="login()">Submit</button>
                        <script>
                            function login() {
                                let email = document.getElementById("email").value;
                                let password = document.getElementById("password").value;
                                if (email == "" || password == "") {
                                    alert("Email and password fields cannot be empty");
                                    return false;
                                }
                                window.location.href = '/auctions';
                            }
                        </script>
                    </div>
                </div>
                <div class="form-element" id="forgot"><a href="#">Forgot password?</a></div>
                <!-- login page -->
            </div>
            <!-- pop up html end -->
            <script>
                document.querySelector("#show-login").addEventListener("click", function addlogin() {
                    let popup = document.querySelector(".popup").classList.add("active");
                    let page_content = document.querySelector(".page-content").classList.add("active")
                });
                document.querySelector("#show-login-2").addEventListener("click", function addlogin() {
                    let popup = document.querySelector(".popup").classList.add("active");
                    let page_content = document.querySelector(".page-content").classList.add("active")
                });

                function hidlinks() {
                    let links = document.querySelectorAll(".link")
                    links.style.color = "red"
                    //  disabled="true"
                }
                document.querySelector(".popup .close-btn").addEventListener("click", function() {
                    document.querySelector(".popup").classList.remove("active");
                    document.querySelector(".page-content").classList.remove("active");

                });
            </script>
            <script>
                document.querySelector("#sign-up").addEventListener("click", function addlogin() {
                    let popupS = document.querySelector(".popupS").classList.add("active");
                    let page_content = document.querySelector(".page-content").classList.add("active")
                });
                document.querySelector("#sign-up-2").addEventListener("click", function addlogin() {
                    let popupS = document.querySelector(".popupS").classList.add("active");
                    let page_content = document.querySelector(".page-content").classList.add("active")
                });

                function hidlinks() {
                    let links = document.querySelectorAll(".link")
                    links.style.color = "red"
                    //  disabled="true"
                }
                document.querySelector(".popupS .close-btn").addEventListener("click", function() {
                    document.querySelector(".popupS").classList.remove("active");
                    document.querySelector(".page-content").classList.remove("active");

                });
            </script>
</body>

</html>
