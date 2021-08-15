<?php 

require('db.php');

$update = new db();

$text = $_POST['text'];

$update -> updateAboutMe($text);
header('Location: ../index.php');

?>