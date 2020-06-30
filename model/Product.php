<?php

class Product
{
    public $id;
    public $name;
    public $price;
    public $description;
    public $quantity;
    public $img;

    public function getName($productId){

        $row = getProduct($productId);

        return $row->name ;
    }

    public function getPrice($productId){

        $row = getProduct($productId);

        return $row->price;
    }
}