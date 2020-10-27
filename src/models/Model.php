<?php

namespace cs174\hw3\models;

require_once('./src/configs/config.php');

use cs174\hw3\configs as C;

class Model {
    public $dbUsr;
    public $dbPwd;
    public $dbName;
    public $db;

    public function __construct($dbUsr=C\DB_USR, $dbPwd=C\DB_PWD, $dbName=C\DB_NME) {
        $this->dbUsr = $dbUsr;
        $this->dbPwd = $dbPwd;
        $this->dbName = $dbName;
    }

    public function connect() {
        return new \mysqli("localhost", $this->dbUsr, $this->dbPwd, $this->dbName);
    }
}