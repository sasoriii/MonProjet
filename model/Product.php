<?php

class Product
{
    public $id;
    public $name;
    public $price;
    public $description;
    public $quantity;
    public $img;

    static function getProduct($id, $throw = false)
    {
        $sql = "SELECT * FROM product WHERE id = $id";

        $row = selectOneRow($sql);

        if ($throw && !$row) {
            throw new Exception("product not exist");
        }

        if ( ! $row) {
            return null;
        }

        $product = new Product();
        $product->id = $row['id'];
        $product->name = $row['name'];
        $product->price = $row['price'];
        $product->description = $row['description'];
        $product->quantity = $row['quantity'];
        $product->img = $row['img'];

        return $product;
    }
}
