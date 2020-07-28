<?php
/**
 * @var $orderId
 */
$orderId = $_GET['id'];
$order = Order::getOrder($orderId);
?>
<?php include_once "css/header.php"; ?>

<main>
    <h1 class="text-center">
        Holywind
    </h1>
    <h3 class="text-center">
        One order
    </h3>

    <table style="border: 1px solid black">
        <tr>
            <td style="border: 1px solid black">
                orderLine id
            </td>
            <td style="border: 1px solid black">
                order id
            </td>
            <td style="border: 1px solid black">
                name
            </td>
            <td style="border: 1px solid black">
                quantity
            </td>
            <td style="border: 1px solid black">
                unique price
            </td>
            <td style="border: 1px solid black">
                total price
            </td>
        </tr>
        <?php foreach ($order->getLines() as $line): ?>
        <tr>
            <td style="border: 1px solid black">
                <?= $line->id?>
            </td>
            <td style="border: 1px solid black">
                <?= $line->order_id ?>
            </td>
            <td style="border: 1px solid black">
                <?php $productId = $line->product_id ?>
                <?= Product::getProduct($productId)->name ?>
            </td>
            <td style="border: 1px solid black">
                <?= $quantity = $line->quantity ?>
            </td>
            <td style="border: 1px solid black">
                <?= $price = Product::getProduct($productId)->price ?>
            </td>
            <td style="border: 1px solid black">

            </td>
            <td style="border: 1px solid black">
                <?php endforeach ?>
            </td>

        </tr>
        <tr>
            <td style="border: 1px solid black">
            </td>
            <td style="border: 1px solid black">
            </td>
            <td style="border: 1px solid black">
            </td>
            <td style="border: 1px solid black">
            </td>
            <td style="border: 1px solid black">
            </td>
            <td style="border: 1px solid black">
                <?= $order->getTotal() ?>
            </td>
        </tr>
    </table>

    <div>
        <a href="../?controller=commandes">
            Next
        </a>
    </div>
</main>

<?php include_once "css/footer.php"; ?>

