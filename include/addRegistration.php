<?php

require('db.php');

$add = new db();


$full_name = $_POST['full_name'];
$phone = $_POST['phone'];
$socialNetworks = $_POST['socialNetworks'];
$subject = implode($_POST['subject']);
$date = $_POST['date'];

$add->addOrder($full_name, $phone, $socialNetworks, $subject, $date);

header('Location: /index.php');

