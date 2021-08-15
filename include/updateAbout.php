<?php

require ('db.php');

$update = new db();

$full_name = $_POST['full_name'];
$phone = $_POST['phone'];
$instagram = $_POST['instagram'];
$facebook = $_POST['Facebook'];
$vk = $_POST['vk'];

$update->updateContact($full_name, $phone, $instagram, $facebook, $vk);

header('Location: ../contact.php');