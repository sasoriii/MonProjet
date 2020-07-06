<?php

class CartLine
{
  
   public $productId;
   public $quantity;
   public $order_id;

   function getProduct()
   {
        return getProduct($this->productId);
   }
    
}
