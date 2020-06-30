<?php

class Order
{
    public $id;
    public $email;
    public $order;
    public $lines = [];

    function toArray()
    {
        $data = [];
        $data['lines'] = [];
        $data['id'] = $this->id;
        $data['email'] = $this->email;

        $lines = $this->getLines();

        foreach ($lines as $line){
            $lineData = [];

            $lineData['id'] = $line->id;
            $lineData['product_id'] = $line->product_id;
            $lineData['quantity'] = $line->quantity;
            $lineData['order_id'] = $line->order_id;

            $data['lines'][] = $lineData ;

        }

        return $data;
    }

    function getLines()
    {
        $sql = "SELECT * FROM orderline WHERE order_id={$this->id}";
        $rows = selectRows($sql);
        $lines = [];

        foreach ($rows as $row) {
            $line = new OrderLine();
            $line->id = $row['id'];
            $line->product_id = $row['product_id'];
            $line->quantity = $row['quantity'];
            $line->order_id = $row['order_id'];

            $lines[] = $line;

        }

        return $lines;
    }


}