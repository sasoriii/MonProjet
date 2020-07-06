<?php
function getProducts()
{
    $bdd = getConnection();
    $response = $bdd->query('SELECT * FROM product');
    $datas = $response->fetchAll();

    foreach ($datas as $data){
        $product = new Product();
        $product->id = $data['id'];
        $product->name = $data['name'];
        $product->price = $data['price'];
        $product->description = $data['description'];
        $product->quantity = $data['quantity'];
        $product->img = $data['img'];

        $listProduct[] = $product;
    }
    return $listProduct;
}

function createOrder($cart, $email)
{

    $bdd = getConnection();
    $sth = $bdd->prepare("INSERT INTO `order` (email) VALUES(:email)");
    $sth->bindParam(':email', $email);

    $sth->execute();

    $orderId = $bdd->lastInsertId();

    foreach ($cart as $cartLine) {
        pre($cartLine);
        $bdd = getConnection();
        $sth = $bdd->prepare("
        INSERT INTO `orderline` (product_id, quantity, order_id)
        VALUES(:product_id , :product_quantity, :last_id)");
        $sth->bindParam(':product_id', $cartLine->id);
        $sth->bindParam(':product_quantity', $cartLine->quantity);
        $sth->bindParam(':last_id', $orderId);
        $sth->execute();
    }

    return $orderId;
}

function getCart()
{
    return $_SESSION['cart'];
}

function getOrder($orderId)
{
    $sql = "SELECT * FROM `order` WHERE id=$orderId";
    $rows = selectRows($sql);
    $lines = [];

    foreach ($rows as $row){
        $line = new Order();
        $line->id = $row['id'];
        $line->email = $row['email'];

        $lines[] = $line;
    }

    return $lines;
}

function getOrders()
{
    $sql = "SELECT * FROM `order` ORDER BY id";
    $rows = selectRows($sql);

    $lines = [];

    foreach ($rows as $row){
        $line = new Order();
        $line->id = $row['id'];
        $line->email = $row['email'];

        $lines[] = $line;
    }

    return $lines;
}

function selectRows($sql): ?array
{
    $connection = getConnection();
    $sth = $connection->prepare($sql);
    $sth->execute();

    $rows = $sth->fetchAll();

    return $rows;
}

function selectOneRow(string $sql): ?array
{
    $connection = getConnection();
    $sth = $connection->prepare($sql);
    $sth->execute();

    $row = $sth->fetch();

    return $row ?: null;
}

function getConnection()
{
    $pdo = new PDO('mysql:host=localhost;dbname=holywind_db;charset=utf8', 'holywindtest', 'holywindmdp');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    return $pdo;
}

function pre($var)
{
    echo "<pre>";
    print_r($var);
    echo "</pre>";
}


function getProfile(int $id)
{
    $pdo = getConnection();
    $request = $pdo->prepare('SELECT * FROM espace_membre WHERE id = ?');
    $request->execute(array($id));
    $userInfo = $request->fetch();

    return $userInfo;
}

function login($email, $password)
{
    $password = sha1($password);

    $pdo = getConnection();
    $request = $pdo->prepare("SELECT * FROM espace_membre WHERE mail = ? AND motdepasse = ?");
    $request->execute(array($email, $password));

    $userInfo = $request->fetch();
    if (!$userInfo) {
        return false;
    }

    $_SESSION['id'] = $userInfo['id'];
    $_SESSION['pseudo'] = $userInfo['pseudo'];
    $_SESSION['mail'] = $userInfo['mail'];

    return true;
}

function isEmailAvailable($mail)
{
    $pdo = getConnection();
    $requestMail = $pdo->prepare("SELECT * FROM espace_membre WHERE mail = ?");
    $requestMail->execute(array($mail));

    return $requestMail->rowCount() == 0;
}

function isPseudoValid(string $pseudo):bool
{
    $pseudoLength = strlen($pseudo);

    if ($pseudoLength == 0) {
        return false;
    }

    if ($pseudoLength > 40) {
        return false;
    }
    else {
        return true;
    }
}

function createUser($pseudo, $mail, $mdp)
{
    $pdo = getConnection();
    $insertMember = $pdo->prepare("INSERT INTO espace_membre(pseudo, mail, motdepasse) VALUES(?, ?, ?)");
    $insertMember->execute(array($pseudo, $mail, $mdp));
}

function getUserId()
{
    return $_SESSION['id'];
}

function view($view, array $vars = null)
{
    $path = 'view/' . $view;

    if ($vars !== null) {
        extract($vars);
    }
    require($path);
}

function sum(float $x, float $y):float
{
    return $x + $y +1 ;
}

function getUser($pseudo, $mail, $motdepasse)
{
    $pdo = getConnection();
    $request = $pdo->prepare("SELECT * FROM espace_membre WHERE pseudo = ? AND mail = ? AND motdepasse = ?");
    $request->execute(array($pseudo , $mail, $motdepasse));
    return $request->rowCount() == 0;
}

function getRandomPseudo($n) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';

    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }

    return $randomString;
}

function getRandomMDP($n) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';

    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index] ;
    }

    return $randomString;
}

function getRandomMail($n) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';

    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index] ;
    }
    return $randomString;
}
