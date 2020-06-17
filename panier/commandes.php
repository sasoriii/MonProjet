<?php require('../bootstrap.php'); ?>

<?php include_once "../css/header.php"; ?>

<main>
    <h1 class="text-center">
        Holyind
    </h1>
    <h3 class="text-center">
        Voici le recap de toutes les commande
    </h3>
    <?php countLines(); ?>
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
                    <?= $order['order_id']; ?>
                </td>
                <td style="border: 1px solid black">
                    <?= countOrderLines($order['order_id']); ?>
                </td>
                <td style="border: 1px solid black">
                    <?= getTotalOrder($order['order_id']) ?>
                </td>
                <td style="border: 1px solid black">
                    <a href="bonCommande.php?id=<?= $order['order_id'] ?>">
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

