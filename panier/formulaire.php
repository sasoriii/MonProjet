<?php require('../bootstrap.php'); ?>

<body>
    <header>
        <?php include_once "../css/header.php";?>
    </header>
    <main>
        <h1 class="text-center">
            Holywind
        </h1>
        <h3 class="text-center">
            Le kite shop de pornichet !
        </h3>
        <form name="inscription" method="post" action="createOrder.php">
            Entrez votre mail : <input type="text" name="email"/> <br/>
            Entrez votre code cb : <input type="text" name="codecb"/><br/>
            <input type="submit" name="valider" value="OK"/>
        </form>
        <div style="text-align: center;">
            <?= include_once "../css/footer.php"?>
        </div>

