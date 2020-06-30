<?php
function getShop()
{
    $bdd = getConnection();
    $response = $bdd->query('SELECT * FROM product');
    $datas = $response->fetchAll();
    $listproduct = [];

    foreach ($datas as $data){
        $product = new Product();
        $product->id = $data['id'];
        $product->name = $data['name'];
        $product->price = $data['price'];
        $product->description = $data['description'];
        $product->quantity = $data['quantity'];
        $product->img = $data['img'];

        $listproduct[] = $product;
    }

    return $listproduct;
}

function getNbItemsInCart()
{
    return count($_SESSION['cart']);
}

function getCartLines()
{
    return getCart();
}

function getCart()
{
    $cartLines = $_SESSION['cart'] ;

    $cartObj = [];

    foreach ($cartLines as $cartLine){
        $line = new Cart();
        $line->id = $cartLine['id'];
        $line->quantity = $cartLine['quantity'];

        $cartObj[] = $line;
    }

    return $cartObj ;

}

function createOrder($cart, $email)
{

    $bdd = getConnection();
    $sth = $bdd->prepare("INSERT INTO `order` (email) VALUES(:email)");
    $sth->bindParam(':email', $email);

    $sth->execute();

    $orderId = $bdd->lastInsertId();

    foreach ($cart as $cartLine) {

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

function getLines(int $orderId)
{
    $sql = "SELECT * FROM orderline WHERE order_id=$orderId";
    $rows = selectRows($sql);
    $lines = [];

    foreach ($rows as $row) {
        $line = new OrderLine();
        $line->id = $row['id'];
        $line->product_id = $row['product_id'];
        $line->quantity = $row['quantity'];
        $line->order_id = $row['order_id'];

        $lines[] = $line;
    }

    return $lines;
}

function getTotal($orderId){
    $total = 0;

    foreach (getLines($orderId) as $line) {
        $productId = $line->product_id;
        $quantity = $line->quantity;
        $price = getProductPrice($productId);
        $totalLine = $price * $quantity;
        $total = $total + $totalLine;
    }

    return $total;
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

function countOrderLines(int $orderId): int
{
    $sql = "SELECT COUNT(id)  AS cnt FROM orderline WHERE order_id=$orderId";
    $line = selectOneRow($sql);
    return $line['cnt'];
}

function getProduct($productId, $throw = false)
{

    $sql = "SELECT * FROM product WHERE id = $productId";

    $row = selectOneRow($sql);

    if ($throw && !$row) {
        throw new Exception("product $productId not exist");
    }

    if ( ! $row) {
        return null;
    }

    $product = new Product();
    $product->id = $row['id'];
    $product->name = $row['name'];
    $product->price = $row['price'];
    $product->description = $row['description'];
    $product->quantity = $row['quantity'];
    $product->img = $row['img'];

    return $product;


}

function getProductPrice(int $productId): ?string
{
    $row = getProduct($productId);

    return $row->price ;
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

function resetCard()
{
    $_SESSION['cart'] = [];
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
