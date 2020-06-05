<?php require('../functions.php'); ?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>
            Holywind
        </title>
    </head>
    <body>
        <form action="chat_post.php" method="post">
            <p>
                <label for="pseudo">Pseudo</label> : <input type="text" name="pseudo" id="pseudo" /><br/>
                <label for="message">Message</label> :  <input type="text" name="message" id="message" /><br/>
                <input type="submit" value="Envoyer" />
            </p>
        </form>

        <?php
            try
            {
                $pdo = new PDO('mysql:host=localhost;dbname=holywind_db;charset=utf8', 'holywindtest', 'holywindmdp');
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            catch(Exception $e)
            {
                die('Erreur : '.$e->getMessage());
            }

            $reponse = $pdo->query('SELECT pseudo, message FROM chat ORDER BY ID DESC LIMIT 0, 100000');

            while ($donnees = $reponse->fetch())
            {
                echo '<p><strong>' . htmlspecialchars($donnees['pseudo']) . '</strong> : ' . htmlspecialchars($donnees['message']) . '</p>';
            }
            $reponse->closeCursor();
            ?>
        <button class="button"><a href="p">Afficher moins de message</a></button>
    </body>
</html>