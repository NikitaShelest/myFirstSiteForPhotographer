<?php
require ('auth.php');

session_start([
    'cookie_lifetime' => 86400,
]);

$issue = new Auth();

$login_bd = $issue->getUser()[0]['login'];
$password_bd = $issue->getUser()[0]['password'];


$pdo = new PDO('mysql:host=localhost;dbname=portfolio_photographer', 'root', 'root');

session_start();

$data = $_POST;
$login = $_POST['login'];
$password = $_POST['password'];


    if( isset($data['do_log']))
    {
        $errors = array();
        if($login_bd == $login and password_verify($password, $password_bd)){
            //логиним пользователя
            $_SESSION['log_user'] = $login_bd;
            header('Location: /admin');

        }else{
            $errors[] = 'Пользователь не найден';
        }

        if( ! empty($errors)) {
            header('Location: /admin');
        }
    }