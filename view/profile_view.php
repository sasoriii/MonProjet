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
            <td >
                <a href="connection.php">
                    Disconnect
                </a>
            </td>
        </tr>
    </div>
</table>

<?php include_once "../css/footer.php"; ?>

