<?php
    require('../bootstrap.php');
    $orderId = $_GET['id'];

    getOrderJson($orderId);
