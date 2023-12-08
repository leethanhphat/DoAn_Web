<?php
$_SESSION["sum_total"]=0;
    foreach ($carts as $cart){
        echo '<tr>
                <td >'.$cart->getProductName().'</td>
                <td>'.$cart->getPrice().'</td>
                <td>'.$cart->getQuantity().'</td>
                <td>'.$cart->getTotal().'</td>
            </tr>';
        $_SESSION["sum_total"]+= $cart->getTotal();
    }
?>