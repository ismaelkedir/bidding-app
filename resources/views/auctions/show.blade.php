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
            <div class="row">
                <div class="col-md-6" style="border-right: 2px solid #1ba965;">
                    <h2>{{ $auction->title }}</h2>
                    <img src="{{ $auction->image }}" alt="image"
                        style="height: 250px; width:350px; border-radius: 10px;">
                    <h2>Description</h2>
                    <p>{{ $auction->description }}</p>
                    <div class="row">
                        <div class="col-2">
                            <button class="btn ptn-primary minus" style="background-color: #1ba965">-</button>
                        </div>
                        <div class="col-8">
                            <input type="text" value="{{ $auction->starting_price }}Birr" class="form-control"
                                style="color:black;">
                        </div>
                        <div class="col-2">
                            <button class="btn ptn-primary plus" style="background-color: #1ba965">+</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <input type="submit" class="mt-3 form-control"
                                style="border-radius: 10px; background-color:#1ba965; padding: 10px; border-color: transparent;">
                        </div>
                    </div>
                </div>
                <div class="col-md-6" style="padding-left: 2rem">
                    <div class="row justify-content-between">
                        <div class="col-6">
                            Bidder Name
                        </div>
                        <div class="col-6">
                            Bid Value
                        </div>
                    </div>
                    <div class="row"
                        style="
                    padding: 1rem;
                    background-color: transparent;
                    border: 1px solid #1ba965;
                    border-radius: 10px;
                ">
                        @if (count($auction->bids))
                            {{ $auction->bids }}
                            @foreach ($auction->bids as $bid)
                                <div class="col-6">
                                    {{ $bid->user->id }}
                                </div>
                                <div class="col-6 text-right">
                                    {{ $bid->amount }}ETB
                                </div>
                            @endforeach
                        @else
                            <div class="col-6">
                                Ismael
                            </div>
                            <div class="col-6 text-right">
                                8100ETB
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    const textInput = document.querySelector('input[type="text"]');
                    const plusButton = document.querySelector('.plus');
                    const minusButton = document.querySelector('.minus');

                    plusButton.addEventListener('click', function() {
                        // Parse the current value, remove non-numeric characters, and convert to a number
                        let value = parseFloat(textInput.value.replace(/[^\d.]/g, ''));
                        if (!isNaN(value)) {
                            // Increment the value by 100 and update the text input
                            value += 100;
                            textInput.value = value.toFixed(2) + ' ETB';
                        }
                    });

                    minusButton.addEventListener('click', function() {
                        // Parse the current value, remove non-numeric characters, and convert to a number
                        let value = parseFloat(textInput.value.replace(/[^\d.]/g, ''));
                        if (!isNaN(value)) {
                            if (!value < {{ $auction->starting_price }}) {
                                // Decrement the value by 100 and update the text input
                                value -= 100;
                                textInput.value = value.toFixed(2) + ' ETB';
                            }
                        }
                    });
                });
            </script>
        </div>
    </div>
    </div>


    </div>

</body>

</html>
