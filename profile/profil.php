<?php
require('../bootstrap.php');
$pdo = getConnection();
$id = $_GET['id'];
$userinfo = getProfile($id);

view(('profile_view.php', ['userinfo' => $userinfo]);
?>

<?php include_once "../css/header.php"; ?>

<table>
    <div align="center">
        <tr>
            <td align="center">
                Profil de <?= $userinfo['pseudo'] ?>
            </td>
        </tr>
        <tr>
            <td>
                Mail : <?= $userinfo['mail'] ?>
            </td>
        </tr>
        <tr>
            <td align="right">
                <a href="editProfil.php">
                    Editer mon profil
                </a>
            </td>
        </tr>
        <tr>
            <td align="right">
                <a href="deconnexion.php">
                    Se déconnecter
                </a>
            </td>
        </tr>
    </div>
</table>

<?php include_once "../css/footer.php"; ?>

