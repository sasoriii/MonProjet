<?php
/**
 * @var array $userinfo
 */

?>
<?php include_once "../css/header.php"; ?>

<table>
    <div>
        <tr>
            <td>
                Profile of <?= $userinfo['pseudo'] ?>
            </td>
        </tr>
        <tr>
            <td>
                Mail : <?= $userinfo['mail'] ?>
            </td>
        </tr>
        <tr>
            <td>
                <a href="">
                    Edit my profile
                </a>
            </td>
        </tr>
        <tr>
            <td>
                <a href="../panier/ordersByUser.php">
                Recap de mes commandes <br>
                </a>
                <?= $userId = getUserId()?>
            </td>
        </tr>
        <tr>
            <td >
                <a href="disconnect.php">
                    Disconnect
                </a>
            </td>
        </tr>
    </div>
</table>

<?php include_once "../css/footer.php"; ?>

