<?php

class CartLine
{
  
   protected $productId
   protected $quantity;

   function getProduct()
   {
        return getProduct($this->productId);
   }
    
}
