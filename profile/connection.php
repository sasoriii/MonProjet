<?php require('../bootstrap.php'); ?>

<?php include_once "../css/header.php"; ?>

<div>
    <h2>
        Connection
    </h2>
    <br/>
    <br/>
    <form method="POST" action="makeConnexion.php">
        <table>
            <tr>
                <td>
                    <label>
                        <input type="text" name="mailConnect" placeholder="Mail">
                    </label>
                </td>
            </tr>
            <tr>
                <td>
                    <label>
                        <input type="password" name="mdpConnect" placeholder="Mot de passe">
                    </label>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="formConnexion" value="Se connecter">
                </td>
            </tr>
            <tr>
                <td>
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

