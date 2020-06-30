<?php
class ProductManager
{
    private $pdo;

    public function __construct($db)
    {
        $this->setDb($db);
    }

    public function add(Product $product)
    {
        $q = $this->pdo->prepare('INSERT INTO product(product_name, product_price, product_description, product_quantite, product_img) VALUES(:product_name, :product_price, :product_description, :product_quantite, :product_img)');

        $q->bindValue(':product_name', $product->product_name());
        $q->bindValue(':product_price', $product->product_price());
        $q->bindValue(':product_description', $product->product_description());
        $q->bindValue(':production_quantite', $product->product_quantite());
        $q->bindValue(':product_img', $product->product_img());

        $q->execute();
    }

    public function delete(Product $product)
    {
        $this->pdo->exec('DELETE FROM product WHERE id = ' . $product->id());
    }

    public function get($id)
    {
        $q = $this->pdo->query('SELECT * FROM product WHERE id = '.$id);
        $data = $q->fetch(PDO::FETCH_ASSOC);

        return new Product($data);
    }

    public function setDb(Database $pdo)
    {
        $this->pdo = $pdo;
    }
}
?>