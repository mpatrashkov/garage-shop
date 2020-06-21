<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Garage Store</title>
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
</head>
<body>
    <div class="app container">
        <nav class="nav">
            <div class="nav--firstRow">
                <div class="nav--firstRow-menu">
                    <span class="material-icons">menu</span>
                </div>
                <div class="nav--firstRow-title">
                    Garage
                </div>
                <div class="nav--firstRow-actions">
                    <span>Search</span>
                    <span>Find us</span>
                </div>
            </div>

            <ul class="nav--secondRow">
                <li>Home</li>
                <li>Products</li>
            </ul>
        </nav>
        <main>
            @yield('content')
        </main>
    </div>

    <script src="/js/manifest.js"></script>
    <script src="/js/vendor.js"></script>
    <script src="/js/app.js"></script>
</body>
</html>