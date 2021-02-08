<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Garage Store</title>
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    {{-- <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Pacifico&display=swap" rel="stylesheet"> --}}
    <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
</head>

<body>
    <div id="app" class="app">
        <nav class="nav">
            <div class="nav--start">
                <div class="nav--menu">
                    <span class="material-icons">menu</span>
                </div>
            </div>
            <div class="nav--middle">
                <div class="nav--title secondaryFont">
                    {{ setting("site.title") }}
                </div>
                <ul class="nav--items">
                    <a href="{{ route("home") }}">
                        <li>Начало</li>
                    </a>
                    <li class="nav--items__spacer">/</li>
                    <a href="{{ route("products") }}">
                        <li>Продукти</li>
                    </a>
                    <li class="nav--items__spacer">/</li>
                    <a href="{{ route("discounts") }}">
                        <li>Промоции</li>
                    </a>
                    <li class="nav--items__spacer">/</li>
                    <a href="{{ route("contact-us") }}">
                        <li>Контакти</li>
                    </a>
                </ul>
            </div>
            <div class="nav--end">
                <div class="nav--action">
                    <span class="material-icons">search</span>
                    <a href="{{ route("products") }}" class="no-style">Търси</a>
                </div>
                <div class="nav--action">
                    <span class="material-icons">map</span>
                    <a href="{{ route("contact-us") }}" class="no-style">Намери ни</a>
                </div>
            </div>
        </nav>
        <main>
            @yield('content')
        </main>
    </div>

    {{-- <script src="/js/manifest.js"></script>
    <script src="/js/vendor.js"></script> --}}
    <script src="/js/app.js"></script>

    @yield('scripts')
</body>

</html>