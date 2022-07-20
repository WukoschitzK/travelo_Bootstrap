<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Travelo!</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}" type="text/css">
    <script src="{{ mix('js/app.js') }}"></script>
    <style>
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
    <div class="row d-lg-flex mb-lg-section flex-lg-row-reverse vh-100">

        <div class="g-0 header-img col-lg-5 col-xl-6 position-relative">
            <img src="../img/header-img.jpg" alt="car" class="w-100 position-absolute">
        </div>

        <div class="col-lg-7 col-xl-6 wrapper d-flex flex-column justify-content-lg-center">
            <h1 class="fw-bold font-yellow mb-3">Bist du auch
                Travelo?</h1>
            <p class="mb-5 lh-sm fw-light subheadline">Teile dein Erlebnis mit
                der ganzen Welt.</p>
            <p class="fw-light subheadline_text">Travelo ist das Online-Tagebuch für Reisende aus aller Welt. Teile deine Reiseerlebnisse mit unserer Community. Travelon!</p>
        </div>
    </div>

    <div class="wrapper">
        <all-posts></all-posts>
        <create-post></create-post>
    </div>
</div>
</body>
<script src="{{ mix('js/app.js') }}" defer></script>
</html>
