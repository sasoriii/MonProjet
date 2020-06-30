<?php
class Product__
{
    private $product_id;
    private $product_name;
    private $product_price;
    private $product_description;
    private $product_quantite;
    private $product_img;

    public function id()
    {
        return $this->product_id;
    }

    public function name()
    {
        return $this->product_name;
    }

    public function price()
    {
        return $this->product_price;
    }

    public function description()
    {
        return $this->product_description;
    }

    public function quantite()
    {
        return $this->product_quantite;
    }

    public function img()
    {
        return $this->product_img;
    }

    public function setId($id)
    {
        $this->product_id = (int) $id;
    }

    public function setName($name)
    {
        if (is_string($name) )
        {
            $this->product_name = $name;
        }
    }

    public function setPrice($price)
    {
        $this->product_price = (int) $price;
    }

    public function setDescription($description)
    {
        if (is_string($description) )
        {
            $this->product_description = $description;
        }
    }

    public function setQuantite($quantite)
    {
        $this->product_quantite = (int) $quantite;
    }

    public function
}