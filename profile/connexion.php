<?php require('../bootstrap.php'); ?>


<?php include_once "../css/header.php"; ?>

<div align="center">
    <h2>
        Connexion
    </h2>
    <br/>
    <br/>
    <form method="POST" action="makeConnexion.php">
        <table>
            <tr>
                <td align="right">
                    <input type="text" name="mailconnect" placeholder="Mail">
                </td>
            </tr>
            <tr>
                <td align="right">
                    <input type="password" name="mdpconnect" placeholder="Mot de passe">
                </td>
            </tr>
            <tr>
                <td align="right">
                    <input type="submit" name="formconnexion" value="Se connecter">
                </td>
            </tr>
            <tr>
                <td align="right">
                    <br/>
                    <a href="inscription.php">
                        inscription
                    </a>
                </td>
            </tr>
        </table>
    </form>
</div>

<?php include_once "../css/footer.php"; ?>

