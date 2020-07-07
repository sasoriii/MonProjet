<?php include_once "../css/header.php"; ?>

<div>
    <h2>
        Inscription
    </h2>
    <br/>
    <br/>
    <form method="POST" action="createUser.php">
        <table>
            <tr>
                <td>
                    <label for="pseudo">
                        Pseudo :
                    </label>
                </td>
                <td>
                    <input type="text" placeholder="Your pseudo" id="pseudo" name="pseudo"/>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="mail">
                        Mail :
                    </label>
                </td>
                <td>
                    <input type="email" placeholder="Your mail" id="mail" name="mail"/>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="mail2">
                        Confirmation du mail :
                    </label>
                </td>
                <td>
                    <input type="email" placeholder="Confirm your mail" id="mail2" name="mail2"/>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="mdp">
                        Mot de passe :mail
                    </label>
                </td>
                <td>
                    <input type="password" placeholder="Your password" id="mdp" name="mdp"/>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="mdp2">
                        Confirm your password :
                    </label>
                </td>
                <td>
                    <input type="password" placeholder="Confirm your password" id="mdp2" name="mdp2"/>
                </td>
            </tr>
            <tr>
                <td>

                </td>
                <td>
                    <br/>
                    <input type="submit" name="formInscription" value="create account"/>
                </td>
            </tr>
            <tr>
                <td>
                </td>
                <td>
                    <br/>
                    <a href="connection.php">
                        Connect
                    </a>
                </td>
            </tr>
        </table>
    </form>
</div>

<?php include_once "../css/footer.php"; ?>

