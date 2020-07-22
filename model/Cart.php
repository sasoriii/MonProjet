<?php

class Cart
{
    protected static $instance;

    protected function __construct() { }
    protected function __clone() { }

    public static function getInstance()
    {
        if(is_null(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    static function add(Product $product)
    {
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }

        if (isset($_SESSION['cart'][$product->id])) {
            $_SESSION['cart'][$product->id]->quantity++;

        } else {
            $line = new stdClass();
            $line->quantity = 1;
            $line->id = $product->id;
            $_SESSION['cart'][$product->id] = $line;
        }
        return true;
    }

    static function getLines()
    {
        $cartLines = $_SESSION['cart'] ;

        $lines = [];

        foreach ($cartLines as $cartLine){
            $line = new CartLine();
            $line->productId = $cartLine->id;
            $line->quantity = $cartLine->quantity;

            $lines[] = $line;
        }
        return $lines;
    }

    static function getCart()
    {
        $cart = $_SESSION['cart'];
        return $cart;
    }

    static function getTotal(){
        $total = 0;

        foreach (Cart::getLines() as $line){
            $productId = $line->productId;
            $quantity = $line->quantity;
            $price = Product::getProduct($productId)->price;
            $totalLine = $price * $quantity;
            $total = $total + $totalLine;
        }
        return $total;
    }
}
