<?php

class Order
{
    public $id;
    public $email;
    public $order;
    public $lines = [];
    public $orderLines = [];
    public $userId;
    

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

    static function getOrder($orderId): Order
    {
        $sql = "SELECT * FROM `order` WHERE id=$orderId";
        $row = Database::getInstance()->selectOneRow($sql);

        $order = new Order();
        $order->id = $row['id'];
        $order->email = $row['email'];

        $sql = "SELECT * FROM orderline WHERE order_id=$orderId";
        $rows = Database::getInstance()->selectRows($sql);

        $order->orderLines = [];

        foreach ($rows as $row){
            $line = new OrderLine();
            $line->id = $row['id'];

            $line->product_id = $row['product_id'];
            $line->quantity = $row['quantity'];
            $line->order_id = $row['order_id'];

            $order->orderLines[] = $line;
        }
        return $order;
    }

    static function getOrders(): array
    {
        $sql = "SELECT * FROM `order` ORDER BY id";
        $rows = selectRows($sql);

        $orders = [];

        foreach ($rows as $row){
            $order = new Order();

            $order->id = $row['id'];
            $order->email = $row['email'];
            $sql = "SELECT * FROM orderline WHERE order_id=$order->id";
            $orderlines = selectRows($sql);
            $order->orderLines = [];

            foreach ($orderlines as $orderline){
                $line = new OrderLine();
                $line->id = $orderline['id'];
                $line->product_id = $orderline['product_id'];
                $line->quantity = $orderline['quantity'];
                $line->order_id = $orderline['order_id'];

                $order->orderLines[] = $line;
            }
            $orders[] = $order;
        }
        return $orders;
    }

    static function getOrdersByUser(): array
    {
        $userId = $_SESSION['id'];
        $sql = "SELECT * FROM `order` WHERE user_id=$userId ORDER BY id";
        $rows = selectRows($sql);

        $orders = [];

        foreach ($rows as $row) {

            $order = new Order();
            $order->userId = $_SESSION['id'];
            $order->id = $row['id'];
            $order->email = $row['email'];
            $sql = "SELECT * FROM orderline WHERE order_id=$order->id";
            $orderlines = selectRows($sql);
            $order->orderLines = [];

            foreach ($orderlines as $orderline) {
                $line = new OrderLine();
                $line->id = $orderline['id'];
                $line->product_id = $orderline['product_id'];
                $line->quantity = $orderline['quantity'];
                $line->order_id = $orderline['order_id'];

                $order->orderLines[] = $line;
            }
            $orders[] = $order;
        }
        return $orders;
    }

        function getTotal()
        {
            $total = 0;

            foreach (Order::getLines() as $line) {
                $productId = $line->product_id;
                $quantity = $line->quantity;
                $price = Product::getProduct($productId)->price;
                $totalLine = $price * $quantity;
                $total = $total + $totalLine;
            }
            return $total;
        }

        function countOrderLines(): int
        {
            return count($this->orderLines);
        }
    }
