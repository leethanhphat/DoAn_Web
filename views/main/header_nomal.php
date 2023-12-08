<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="public/css/main.css">
    <link rel="stylesheet" href="public/css/home.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <script src="public/js/search.js"></script>
    <script>


    </script>
</head>

<header id="header" class="sticky-top ">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark nav-header ">
        <div class="container" style="height:9vh">
            <a class="navbar-brand uppercase fs-4 me-4" href="index.php">Shop name</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="input-group search-input-main d-flex w-50 px-3 py-1">
                    <input type="text" class="form-control " id="search-input" placeholder="Tim kiếm......" aria-describedby="btn-addon">
                    <button onclick="searchProducts()" class="btn btn-light" type="button" id="btn-addon"> <i class="bi bi-search"></i></button>
                </div>
                <script type="javascript" scr="public\js\search.js"></script>
                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">
                        <a class="nav-link uppercase" href="index.php">Sản phẩm</a>
                    </li>
                    <li class="devide-header border-start "></li>
                    <li class="nav-item">
                        <a class="nav-link uppercase" href="cart.php">Giỏ hàng</a>
                    </li>
                    <li class="devide-header border-start "></li>
                    <li class="nav-item">
                        <a class="nav-link uppercase" href="login.php">Đăng nhập</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>