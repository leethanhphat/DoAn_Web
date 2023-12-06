<div class="container">
    <div class="row">
    <?php
        foreach ($products as $product)
            echo '
            <div class="col-md-4">
            <div class="card">
                <a href="index.php?productid='.$product->getproductID().
                '"><img src="'.$product ->getimage().'" class="card-img-top product-thumnail" alt="Product Image"></a>
                <div class="card-body">
                    <h5 class="card-title" title="'.$product -> getProductName().'">'.$product -> getProductName().'</h5>
                    <p class="card-text">'.$product -> getPrice().'</p>
                    <a href="#" class="btn btn-primary">Xem chi tiết</a>
                </div>
            </div>
        </div>
        ';
        ?>
        </div>
        </div>
