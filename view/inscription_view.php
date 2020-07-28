<?php include_once "css/header.php"; ?>

<div>
    <h2>
        Inscription
    </h2>
    <br/>
    <br/>
    <form method="POST" action="../profile/createUser.php">
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
                    <label for="email">
                        Mail :
                    </label>
                </td>
                <td>
                    <input type="email" placeholder="Your mail" id="email" name="email"/>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="email2">
                        Confirmation du mail :
                    </label>
                </td>
                <td>
                    <input type="email" placeholder="Confirm your mail" id="email2" name="email2"/>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="password">
                        Mot de passe :mail
                    </label>
                </td>
                <td>
                    <input type="password" placeholder="Your password" id="password" name="password"/>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="password2">
                        Confirm your password :
                    </label>
                </td>
                <td>
                    <input type="password" placeholder="Confirm your password" id="password2" name="password2"/>
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
                    <a href="../?controller=connection">
                        Connect
                    </a>
                </td>
            </tr>
        </table>
    </form>
</div>

<?php include_once "css/footer.php"; ?>

