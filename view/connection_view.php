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
                        <input type="text" name="emailConnect" placeholder="Email">
                    </label>
                </td>
            </tr>
            <tr>
                <td>
                    <label>
                        <input type="password" name="passwordConnect" placeholder="Password">
                    </label>
                </td>
            </tr>
            <tr>
                <td align="center">
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

