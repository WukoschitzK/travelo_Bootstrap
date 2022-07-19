<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Travelo!</title>
{{--    <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}

    <link rel="stylesheet" href="{{ mix('css/app.css') }}" type="text/css">
    <script src="{{ mix('js/app.js') }}"></script>
    <style>
        /*@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap');*/
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap");
        #app {
            font-family: Poppins, Helvetica, Arial, sans-serif;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
    </style>
</head>
<body>
<div id="app">
    <div class="row d-lg-flex mb-lg-section justify-content-lg-between align-items-lg-center flex-lg-row-reverse vh-100">

        <div class="mb-5 g-0 header-img col-lg-5 position-relative">
            <img src="../img/header-img.jpg" alt="car" class="w-100 position-absolute">
        </div>

        <div class="col-lg-7 wrapper">
            <h1 class="fw-bold font-yellow mb-3">Bist du auch
                Travelo?</h1>
            <p class="mb-5 lh-sm fw-light subheadline">Teile dein Erlebnis mit
                der ganzen Welt.</p>
            <p class="fw-light subheadline_text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore</p>
        </div>


    </div>
{{--    <img src="../img/header-img.jpg" alt="car">--}}
    <div class="wrapper">
        <all-posts></all-posts>
        <create-post></create-post>
    </div>
</div>
</body>
<script src="{{ mix('js/app.js') }}" defer></script>
</html>
