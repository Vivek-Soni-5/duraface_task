<?php
class Model {
    protected $db;

    public function __construct() {
        $config = include('../config/config.php');
        $dbConfig = $config['db'];

        $dsn = "mysql:host={$dbConfig['host']};dbname={$dbConfig['dbname']}";
        $this->db = new PDO($dsn, $dbConfig['username'], $dbConfig['password']);
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
}
