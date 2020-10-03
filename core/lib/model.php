<?php

namespace core\lib;

class model extends \PDO {

    public function __construct() {
        $dsn = 'mysql:host=192.168.30.100;dbname=test';
        $username = 'root';
        $passwd = '123456';
        try {
            parent::__construct($dsn, $username, $passwd);
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }

}
