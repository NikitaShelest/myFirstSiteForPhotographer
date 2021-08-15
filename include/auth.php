<?php

class Auth {
    public $pdo;

    public function __construct() {
        try {
            $this->pdo = new PDO('mysql:host=localhost;dbname=portfolio_photographer', 'root', 'root');
            //$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            exit($e->getMessage());
        }
    }
//    public function addAuth() {
//        $p = "qwerty123";
//        $login = "Masha_Photo";
//        $password = password_hash($p, PASSWORD_DEFAULT );
//        $sth = $this->pdo->prepare("UPDATE auth SET login=:login, password=:password");
//        $sth ->bindParam(':login', $login);
//        $sth ->bindParam(':password', $password);
//        $sth ->execute();
//    }
    public function getUser() {
        $sth = $this->pdo->query("SELECT * FROM `auth`");
        $date = $sth->fetchAll();
        return $date;
    }

}