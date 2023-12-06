<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop name</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/main.css">
    <link rel="stylesheet" href="assets/home.css">
</head>

<body>

    <header id="header" class="sticky-top " >
        <nav class="navbar navbar-expand-lg navbar-light bg-primary-subtle ">
            <div class="container">
                <a class="navbar-brand" href="#">Shop name</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Trang chủ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sản phẩm</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Giỏ hàng</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Đăng nhập</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        
    </header>
    <main class="bg-light">
    <div class="container shoping-container" style="margin-top: 10px;">
        <div class="row ">
            <div class="category-list col-3 " >
                <div>
                    <?php include_once("controllers/show_category.php") ?>
                </div>
            </div>

            <div class="item-list col-9">
                <div>
                    <?php include_once("controllers/show_item.php") ?>
                </div>
            </div>
        </div>
    </div>
</main>



<footer class="mt-5 bg-dark text-light">
      <div class="container py-4">
        <div class="row">
          <div class="col-md-6">
            <h5>Thông tin liên hệ</h5>
            <p>Địa chỉ của bạn</p>
            <p>Số điện thoại</p>
          </div>
          <div class="col-md-6">
            <h5>Liên kết nhanh</h5>
            <ul class="list-unstyled">
              <li><a class="link" href="#">Trang chủ</a></li>
              <li><a class="link" href="#">Sản phẩm</a></li>
              <li><a class="link" href="#">Dịch vụ</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2023 SHOP NAME
      </div>
    </footer>
</body>

</html>