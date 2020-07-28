<?php
include_once "css/header.php";
$orders = Order::getOrdersByUser();
$userId = $_SESSION['id'];
?>

<main>
    <h1 class="text-center">
        Holywind
    </h1>
    <h3 class="text-center">
        All order of user <?=$userId?>
    </h3>

    <table style="border: 1px solid black">
        <tr>
            <td style="border: 1px solid black">order id</td>
            <td style="border: 1px solid black">orderline quantity</td>
            <td style="border: 1px solid black">Prix total/ order</td>
            <td style="border: 1px solid black">Détails par commande</td>
        </tr>
        <form name="redirection" method="post" action="">

            <?php foreach (Order::getOrdersByUser() as $order): ?>
            <tr>
                <td style="border: 1px solid black">
                    <?= $orderId = $order->id; ?>
                </td>
                <td style="border: 1px solid black">
                    <?= count($order->getLines());?>
                </td>
                <td style="border: 1px solid black">
                    <?= $order->getTotal(); ?>
                </td>
                <td style="border: 1px solid black">
                    <a href="../?controller=bon_de_commande&id=<?=$order->id?>">
                        <?= $order->userId ?>
                        details
                    </a>
                </td>
                <?php endforeach ?>
            </tr>
        </form>
        <a href="">
            Your profile
        </a>
    </table>
</main>

<?php include_once "css/footer.php"; ?>

