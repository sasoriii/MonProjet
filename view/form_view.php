<?php include_once "css/header.php"; ?>

    <main>
        <h1 class="text-center">
            Holywind
        </h1>
        <h3 class="text-center">
            Kiteshop of pornichet !
        </h3>
        <form name="inscription" method="post" action="../panier/createOrder.php">
            Enter your mail :
            <label>
                <input type="text" name="email"/>
            </label> <br/>
            Enter your code cb :
            <label>
                <input type="text" name="codeCb"/>
            </label>
            <br/>
            <input type="submit" name="valid" value="OK"/>
        </form>

<?= include_once "css/footer.php" ?>