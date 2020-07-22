<?php

class Database
{
    private $PDOInstance = null;

    protected static $instance;

    protected function __construct()
    {
        if (ENV == 'prod') {
            $config = Config::getInstance();
            $dbName = $config->get('db_name');
            $dbUsername = $config->get('db_username');
            $dbPassword = $config->get('db_password');
        } else if (ENV == 'testing') {
            $config = Config::getInstance();
            $dbName = $config->get('db_name');
            $dbUsername = $config->get('db_username');
            $dbPassword = $config->get('db_password');
        } else {
            throw new \Exception("incorrect env " . ENV);
        }
        $this->PDOInstance = new PDO("mysql:host=localhost;dbname=$dbName;charset=utf8", $dbUsername, $dbPassword);
    }

    protected function __clone() { }

    public static function getInstance()
    {
        if(is_null(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function query($query)
    {
        return $this->PDOInstance->query($query);
    }

    public function prepare($sql)
    {
        return $this->PDOInstance->prepare($sql);
    }

    public function exec($sql)
    {
        return $this->PDOInstance->exec($sql);
    }

    public function lastInsertId()
    {
        return $this->PDOInstance->lastInsertId();
    }

    public function selectOneRow(string $sql): ?array
    {
        $connection = $this->PDOInstance;
        $sth = $connection->prepare($sql);
        $sth->execute();

        $row = $sth->fetch();

        return $row ?: null;
    }

    public function selectRows($sql): ?array
    {
        $connection = $this->PDOInstance;
        $sth = $connection->prepare($sql);
        $sth->execute();

        $rows = $sth->fetchAll();

        return $rows;
    }

    public function beginTransaction()
    {
        return $this->PDOInstance->beginTransaction();
    }

    public function commit()
    {
        return $this->PDOInstance->commit();
    }

    public function rollBack()
    {
        return $this->PDOInstance->rollBack();
    }
}
