<?php require('../bootstrap.php');
$pdo = getConnection();
$id = $_GET['id'];
$userinfo = getProfile($id);
?>

<body>
    <header>
        <?php include_once "../css/header.php";?>
    </header>
    <table>
        <div align="center">
            <tr>
                <td align="center">
                    Profil de <?= $userinfo['pseudo']?>
                </td>
            </tr>
            <tr>
                <td>
                    Mail : <?= $userinfo['mail']?>
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
    <div style="text-align: center;">
        <?php include_once "../css/footer.php";?>
    </div>
