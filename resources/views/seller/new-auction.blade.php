<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bidding App</title>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])


    <style>
        .form-container {
            max-width: 400px;
            margin: 0 auto;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
        }

        .form-group input[type="text"],
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-group input[type="file"] {
            display: none;
        }

        .upload-button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .form-group input[type="file"]+label {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-align: center;
        }

        .form-group .date-time-group {
            display: flex;
            justify-content: space-between;
        }

        .add-button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            display: block;
            margin-top: 20px;
        }
    </style>
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
            <div class="logo" id="toggle">
                <img src="img/sun.png" alt="" onclick="mytoggle()">
            </div>
            <div id="links">
                <ul>
                    <li class="btns"><a href="#">HOME</a> </li>
                    <li class="btns"><a href="#"> ABOUT US</a> </li>
                    <li class="btns "><a href="#">CONTACT US</a> </li>
                </ul>
            </div>
        </div>
        <h1>Create New One</h1>
        <div class="form-container">
            <form>
                <div class="form-group">
                    <label for="image">Upload Picture:</label>
                    <input type="file" id="image" name="image" accept="image/*">
                    <label for="image" class="upload-button">Upload Image</label>
                </div>
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" style="color:black">
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea id="description" name="description" rows="4" style="color:black"></textarea></textarea>
                </div>
                <div class="form-group">
                    <div class="date-time-group">
                        <div>
                            <label for="start-date">Start Date:</label>
                            <input type="date" id="start-date" name="start-date" style="color:black">
                        </div>
                        <div>
                            <label for="start-hour">Start Hour:</label>
                            <input type="time" id="start-hour" name="start-hour" style="color:black">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="date-time-group">
                        <div>
                            <label for="end-date">End Date:</label>
                            <input type="date" id="end-date" name="end-date" style="color:black">
                        </div>
                        <div>
                            <label for="end-hour">End Hour:</label>
                            <input type="time" id="end-hour" name="end-hour" style="color:black">
                        </div>
                    </div>
                </div>
                <button class="add-button" type="submit">Add</button>
            </form>
        </div>
        <h1>Your Sellings</h1>
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
