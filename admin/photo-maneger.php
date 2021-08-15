<?php
require ('../include/db.php');
require ('../include/auth.php');

$issue = new db();
$instagram = $issue->issuingContact()[0]['instagram'];
$facebook = $issue->issuingContact()[0]['facebook'];
$vk = $issue->issuingContact()[0]['vk'];

session_start([
    'cookie_lifetime' => 15,
]);
?>

    <?php include 'static/header.php'; ?>

    <?php include "../static/changeDesign.php" ?>

    <?php if(isset($_SESSION['log_user']) ) : ?>
        <a href="../admin/index.php" class="abs_link_back">Назад</a>

    <main class="main">
        <h1>Фото-менеджер</h1>
        <div class="form-add-photo">
          <form action="../include/addPhotoGallery.php" method="POST" enctype="multipart/form-data">

            <div class="item">
                <p>Загрузите файл</p>
                <input type="file" name="image">
            </div>

            <div class="item">
                <p>Выберите тип фотосесси</p>
                <select id="type-photo" name="photo[]" class="custom-select">
                        <option disabled selected>Выберите тематику фотосесси</option>
                        <option value="Walking">Прогулочная</option>
                        <option value="LoveStory">Love Story</option>
                        <option value="Celebration">Праздники</option>
                        <option value="Wedding">Свадебные</option>
                        <option value="Family">Семейные</option>
                        <option value="Studio">Студийные</option>
                        <option value="Group">Групповые</option>
                </select>
            </div>

            <div class="item">
                <button type="submit">Добавить фото</button>
            </div>
          </form>  
        </div>
        
    </main>
    <?php else : ?>
    <div class="login">
        <form action="../include/login.php" method="POST">
            <p>
            <p>Логин:</p>
            <input type="text" name="login" placeholder="Введите Логин">
            </p>
            <p>
            <p>Паполь:</p>
            <input type="password" name="password" placeholder="Введите Пароль">
            </p>
            <p>
                <button type="submit" name="do_log">Войти</button>
            </p>
        </form>
    </div>
    <?php endif;?>

    <?php include 'static/footer.php'; ?>