<?php
/**
 * @var array $userinfo
 */

?>
<?php include_once "css/header.php"; ?>

<table>
    <div>
        <tr>
            <td>
                Profile of <?= $_SESSION['pseudo'] ?>
            </td>
        </tr>
        <tr>
            <td>
                Mail : <?= $_SESSION['email'] ?>
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
                <a href="../?controller=commandes_par_utilisateur">
                Recap de mes commandes <br>
                </a>
                <?= $userId = getUserId()?>
            </td>
        </tr>
        <tr>
            <td >
                <a href="../profile/disconnect.php">
                    Disconnect
                </a>
            </td>
        </tr>
    </div>
</table>

<?php include_once "css/footer.php"; ?>

