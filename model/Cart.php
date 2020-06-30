<?php

class Cart
{
    public $id;
    public $quantity;

    function add(int $productId)
    {
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }

        $product = getProduct($productId, true);

        if (isset($_SESSION['cart'][$product->id])) {
            $_SESSION['cart'][$product->id]['quantity']++;

        } else {
            $line = [];
            $line['quantity'] = 1;
            $line['id'] = $product->id;
            $_SESSION['cart'][$product->id] = $line;
        }
        return true;
    }
}
