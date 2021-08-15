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
        <a href="orders.php" class="abs_link_back">К заказам</a>
        <a href="photo-maneger.php" class="photo_link_out">Менеджер фото</a>
        <a href="../include/out.php" class="abs_link_out">Выйти</a>
        

    <main class="main">
        <h1>Админ панель</h1>
        <div class="container-box">
        
            <section class="edit-contact">
            <h3 >Редактирование контактов</h3>
                <form action="../include/updateAbout.php" method="post">
                    <div class="items">

                        <label for="full_name">Ф.И.О</label>
                        <div class="item">

                            <input type="text" name="full_name" id="full_name">
                        </div>
                        <label for="phone">Телефон</label>
                        <div class="item">

                            <input type="text" name="phone" id="phone">
                        </div>
                        <label for="instagram">Инстаграм</label>
                        <div class="item">
                            <input type="text" name="instagram" id="instagram">
                        </div>
                        <label for="Facebook">Фейсбук</label>
                        <div class="item">

                            <input type="text" name="Facebook" id="Facebook">
                        </div>
                        <label for="vk">VK</label>
                        <div class="item">

                            <input type="text" name="vk" id="vk">
                        </div>

                        <div class="item">
                            <button type="submit">Изменить</button>
                        </div>

                    </div>
                </form>
            </section>

            
            <section class="edit-about">
                    <h3>Информация на главную страницу</h3>
                <form action="../include/updateContacts.php" method="post">

                    <label for="head">Заголовок</label>
                    <div class="item">
                        <input type="text" name="head" id="head">
                    </div>

                    <label for="opening">Вступительный текст</label>
                    <div class="item">
                        <textarea name="opening" id="opening" cols="30" rows="10"></textarea>
                    </div>

                    <div class="item">
                        <button type="submit">Изменить</button>
                    </div>
                    
                    
                </form>
            </section>
            
            <section class="edit-about-list">
            <h3>Информация о себе</h3>
                <form action="../include/updateMyAbout.php" method="post">

                    <label for="text">About</label>
                    <div class="item">
                        <textarea name="text" id="opening" cols="30" rows="10"></textarea>
                    </div>

                    <div class="item">
                        <button type="submit">Изменить</button>
                    </div>
            </section>

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