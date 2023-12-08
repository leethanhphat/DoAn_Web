<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng</title>
    <link rel="stylesheet" href="public/css/cart.css">
</head>

<body>
    <div class="wrapper mh-100">
        <?php include_once("views/main/header.php"); ?>
        <main>
            <!-- Layout trang GIO HANG -> THANH TOAN -->
            <div class="page-title">
                <div class="page-title-inner flex-row medium-flex-wrap container">
                    <div class="flex-col flex-grow medium-text-center">
                        <nav class="breadcrumbs flex-row flex-row-center heading-font checkout-breadcrumbs text-center strong h2 uppercase">
                            <a>Giỏ hàng</a> <a>>></a> <a>Thanh toán</a>
                        </nav>
                    </div>
                </div>
            </div>
            <section class="cart-section mt-4">
                <div class="cart-container container">
                    <div class="woocommerce row row-large row-divided">
                        <div class="row cart-row">
                            <div class="cart-items-list col-12 col-lg-7 pe-5">
                                <h4 class="uppercase border-bottom">Giỏ hàng của bạn (<?php echo "số sản phẩm" ?>)</h4>
                                <table class="table transparent-table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Sản phẩm</th>
                                            <th scope="col">Giá</th>
                                            <th scope="col">Số lượng</th>
                                            <th scope="col">Tạm tính</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php include_once("controllers/cart_controller.php");?>
                                    </tbody>
                                </table>
                            </div>

                            <div class="payment-check col-12 col-lg-5 row border-start">
                                <h5 class="sum-cart col-12 border-bottom uppercase">Giá trị của giỏ hàng</h5>
                                <p class="sum-item col-8">Tổng giá trị:</p>
                                <p class="uppercase sum-value col-4"><?php echo $_SESSION["sum_total"]; ?> ₫</p>
                                <div class="d-grid gap-2">
                                    <button class="btn btn-secondary" type="button">Thực hiện thanh toán</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <?php include_once("views/main/footer.php"); ?>
    </div>
    <script src="path/to/bootstrap.bundle.min.js"></script>
</body>
</html>