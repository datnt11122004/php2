<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ BASE_URL.'public/bootstrap/bootstrap.css' }}">
    <title>Document</title>
</head>
<body>
    <main class="main">
        <div class="container">
            <header>
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="{{route("list-product")}}">Quản lý sản phẩm</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route("list-category")}}">Quản lý danh mục</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route("list-user")}}">Quản lý người dùng</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <div class="mb-3"></div>
            <section class="content">
                @yield('content')
            </section>
            <footer>
                <span>FPT POLYTECNIC</span>
            </footer>
            <script src="{{ BASE_URL.'public/bootstrap/bootstrap.js' }}"></script>
            <script src="{{ BASE_URL.'public/custom/main.js' }}"></script>

        </div>

    </main>
</body>
</html>
