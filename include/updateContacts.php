<?php

require ('db.php');

$update = new db();

$head = $_POST['head'];
$opening = $_POST['opening'];

$update->updateAbout($head, $opening);

header('Location: ../index.php');