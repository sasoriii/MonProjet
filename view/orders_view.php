<?php include_once "../css/header.php"; ?>

<main>
    <h1 class="text-center">
        Holywind
    </h1>
    <h3 class="text-center">
        All order
    </h3>

    <table style="border: 1px solid black">
        <tr>
            <td style="border: 1px solid black">order id</td>
            <td style="border: 1px solid black">orderline quantity</td>
            <td style="border: 1px solid black">Prix total/ order</td>
            <td style="border: 1px solid black">Détails par commande</td>
        </tr>
        <form name="redirection" method="post" action="">

            <?php foreach (getOrders() as $order): ?>
            <tr>
                <td style="border: 1px solid black">
                    <?= $orderId = $order->id; ?>
                </td>
                <td style="border: 1px solid black">
                    <?= countOrderLines($orderId); ?>
                </td>
                <td style="border: 1px solid black">
                    <?= getTotal($orderId) ?>
                </td>
                <td style="border: 1px solid black">
                    <a href="purchaseOrder.php?id=<?=$order->id?>">
                        details
                    </a>
                </td>
                <?php endforeach ?>
                <td style="border: 1px solid black"></td>
            </tr>
        </form>
    </table>
</main>

<?php include_once "../css/footer.php"; ?>

