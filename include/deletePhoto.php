<?php

require 'db.php';

$link = $_GET["link"];

$remove = new db();

$remove -> deletePhotoGallery($link);

$fh = fopen('../'.$link, 'a');
fclose($fh);

unlink('../'.$link);

header('Location: /galery.php');
