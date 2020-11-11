<?php

namespace User\model;
use PDO;
class DBconnect
{
private $dsn;
private $user;
private $passWord;
public function __construct()
{
    $this->dsn='mysql:host=localhost;dbname=SuperMarKet';
    $this->user='root';
    $this->passWord='123456@Abc';
}

    public function connect()
    {
        return new PDO($this->dsn,$this->user,$this->passWord);
}
}