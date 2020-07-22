<?php
class Config
{
    
    public $conf;

    protected static $instance;

    protected function __construct()
    {
        $this->conf = require(__DIR__ . '/../config/' . ENV . '.php');
    }

    protected function __clone() { }

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function get($key)
    {
        return $this->conf[$key];
    }
}