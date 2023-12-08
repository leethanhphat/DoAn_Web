<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng</title>
    <link rel="stylesheet" href="path/to/your/styles.css">
</head>

<body>
    <div class="wrapper">
        <?php include_once("views/main/header.php"); ?>

        <main>
            <section class="cart-section">
                <div class="container cart-container">

                    <div class="row cart-row">
                        <div class="cart-items-list col-12 col-lg-7 pe-5">
                            <h4 class="uppercase border-bottom    ">Giỏ hàng của bạn ( <? echo "    " ?>sản phẩm )</h4>
                            <div class="product-cart " style="height:55vh">

                            </div>
                        </div>
                        <div class="payment-check col-12 col-lg-5 row border-start  ">
                            <h5 class=" sum-cart col-12 border-bottom uppercase">giá trị của giỏ hàng</h5>
                            <p class=" sum-item col-8 ">Tổng giá trị:</p>
                            <p class=" uppercase sum-value col-4"><?php echo "123" ?>₫</p>
                            <div class="d-grid gap-2">
                                <button class="btn btn-primary" type="button">Thực hiện thanh toán</button>
                            </div>

                        </div>
                    </div>


            </section>
        </main>

        <?php include_once("views/main/footer.php"); ?>

    </div>
</body>

</html>