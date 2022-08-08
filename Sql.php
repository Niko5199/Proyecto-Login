<?php

use JetBrains\PhpStorm\Internal\ReturnTypeContract;

$mysqli = require 'Connection.php';


class SQLquery
{
    public function __construct()
    {
        $this->mysqli = $GLOBALS['mysqli'];
    }

    public function SELECT()
    {
        $result = $this->mysqli->query('SELECT * FROM usuario');
        return $result;
    }
}
