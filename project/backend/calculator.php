<?php
$quantity = 0;
$product = 0;
$sum = 0;
if (isset($_POST['product'])) {


    $quantity = intval(htmlspecialchars($_POST['quantity']));
    $product = htmlspecialchars($_POST['product']);

    foreach ($_POST as $key => $value) {
        if ($key != 'quantity') {
            $sum += intval(htmlspecialchars($value));
        }
    }
    $sum *= $quantity;
}



