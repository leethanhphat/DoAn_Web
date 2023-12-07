<div class="container">
    <div class="row">
    <?php
        foreach ($products as $product)
            echo '
            <div class="col-md-4">
            <div class="card mb-4   ">
                <a href="index.php?productid='.$product->getproductID().
                '"><img src="'.$product ->getimage().'" class="card-img-top product-thumnail" alt="Product Image"></a>
                <div class="card-body">
                    <h5 class="card-title" title="'.$product -> getProductName().'">'.$product -> getProductName().'</h5>
                    <p class="card-text">'.$product -> getPrice().'</p>
                    <div class="d-grid gap-2">

                    <button type="button" class="btn btn-light rounded-pill mt-2">Thêm vào giỏ</button>
                    <button type="button" class="btn btn-primary rounded-pill">Mua ngay</button>
                    </div>

                </div>
            </div>
        </div>
        ';

        ?>
        </div>
        </div>
