<!DOCTYPE html>
<html>
    <body>
    <h1>product info</h1>
    <?php
    echo "<b>productName:</b> ".$product->getproductName()."<br/>";
    echo "<b>categoryID: </b>".$product->getcategoryID()."<br/>";
    echo "<b>price: </b>".$product->getprice()."<br/>";

    echo "<b>stockQuantity: </b>".$product->getstockQuantity()."<br/>";

    echo "<b>image: </b> <br/><img src='".$product->getimage()."'/><br/>"
    ?>
    </body>
</html>