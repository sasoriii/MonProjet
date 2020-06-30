<?php

class Cart
{
  
    function add(Product $product)
    {
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }

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

    function getLines()
    {
        $cartLines = $_SESSION['cart'] ;

        $lines = [];

        foreach ($cartLines as $cartLine){
            $line = new CartLine();
            $line->id = $cartLine['id'];
            $line->quantity = $cartLine['quantity'];

            $lines[] = $line;
        }

        return $lines;
    }

    function getNbItems()
    {
        return count($_SESSION['cart']);
    }

}
