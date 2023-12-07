<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="public/css/main.css">
    <link rel="stylesheet" href="public/css/home.css">
</head>
<body>
    <?php include_once("views/main/header.php"); ?>
    <main>
        <div class="container container-product ">
            <div class="row">
                <div class="col-12 col-lg-5 col-slide-show">
                    <img src="<?php echo $product->getimage(); ?>" class="card-img-top product-thumnail" alt="Product Image">
                </div>
                <div class="col-12 col-lg-7 col-imformation-show container px-3">
                    <div class="row">
                    <h2 class="card-title col-12 mt-3" title="<?php echo $product->getProductName(); ?>"><?php echo $product->getProductName(); ?></h2>
                        <h3>-----</h3>
                        <h4 class="card-product-price col-6"><?php echo $product->getPrice(); ?> ₫</h4>
                        <p class="quanlity-show col-6 col-lg-12 h5 ms-2 p-2 mt-2">Còn <?php echo $product->getStockQuantity(); ?> sản phẩm</p>
                        <div class="row col-md-6 col-lg-12 mt-2">
                            <div class="col-6 col-lg-3">
                                <label class="quantity-label col-form-label p-1" for="quantity-input">Chọn số lượng</label>
                            </div>
                            <div class="col-6 col-lg-3">
                                <input value="1" min="1" max="<?php echo $product->getStockQuantity(); ?>" type="number" id="quantity-input" class="form-control  col-auto" style="width: 5rem;">
                            </div>
                        </div>
                        <div class="container text-center gap-2 mt-3">
                            <div class="row align-items-start row-cart">
                                <button type="button" class="col-12 col-lg-3 btn-buynow btn btn-primary rounded-pill ms-3 mt-2">Mua ngay</button>
                                <button type="button" class="col-12 col-lg-3 btn-add-to-cart btn rounded-pill m-2">Thêm vào giỏ</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>        
        </div>
        <div class="detail-information"></div>
        <div class="comment-product"></div>
        <div class="same-product"></div>
    </main>
    <?php include_once("views/main/footer.php"); ?>
</body>
</html>
