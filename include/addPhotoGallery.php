<?php

require 'db.php';

$name = $_FILES['image']['name'];
$tmp_name = $_FILES['image']['tmp_name'];
$type = $_POST['photo'][0];

$extension = strtolower(substr(strrchr($_FILES['image']['name'], '.'), 1));//узнаем расширение файла


if($_POST['photo'][0] == 'LoveStory'){
    $path = "/IMG/Gallery/LoveStory/";
    $target = getRandomFileName($path, $extension);
    $link = $path.$target.'.'.$extension;
    move_uploaded_file($tmp_name, '..'.$link);
}
elseif($_POST['photo'][0] == 'Studio'){
    $path = "/IMG/Gallery/Studio/";
    $target = getRandomFileName($path, $extension);
    $link = $path.$target.'.'.$extension;
    move_uploaded_file($tmp_name, '..'.$link);
}
elseif($_POST['photo'][0] == 'Group'){
    $path = "/IMG/Gallery/Group/";
    $target = getRandomFileName($path, $extension);
    $link = $path.$target.'.'.$extension;
    move_uploaded_file($tmp_name, '..'.$link);
}
elseif($_POST['photo'][0] == 'Family'){
    $path = "/IMG/Gallery/Family/";
    $target = getRandomFileName($path, $extension);
    $link = $path.$target.'.'.$extension;
    move_uploaded_file($tmp_name, '..'.$link);
}
elseif($_POST['photo'][0] == 'Wedding'){
    $path = "/IMG/Gallery/Wedding/";
    $target = getRandomFileName($path, $extension);
    $link = $path.$target.'.'.$extension;
    move_uploaded_file($tmp_name, '..'.$link);
}
elseif($_POST['photo'][0] == 'Celebration'){
    $path = "/IMG/Gallery/Celebration/";
    $target = getRandomFileName($path, $extension);
    $link = $path.$target.'.'.$extension;
    move_uploaded_file($tmp_name, '..'.$link);
}
elseif($_POST['photo'][0] == 'Walking'){
    $path = "/IMG/Gallery/Walking/";
    $target = getRandomFileName($path, $extension);
    $link = $path.$target.'.'.$extension;
    move_uploaded_file($tmp_name, '..'.$link);
}

$add = new db();

$add->addPhotoGallery($link, $type);

function getRandomFileName($path, $extension='')
    {
        $extension = $extension ? '.' . $extension : '';
        $path = $path ? $path . '/' : '';
 
        do {
            $name = md5(microtime() . rand(0, 9999));
            $file = $path . $name . $extension;
        } while (file_exists($file));
 
        return $name;
    }


header('Location: /admin/photo-maneger.php');