<?php
require ('../include/db.php');

$issue = new db();
$instagram = $issue->issuingContact()[0]['instagram'];
$facebook = $issue->issuingContact()[0]['facebook'];
$vk = $issue->issuingContact()[0]['vk'];

$orders = $issue->giveOrder();

session_start([
    'cookie_lifetime' => 15,
]);
?>

    <?php include 'static/header.php'; ?>

    <?php include "../static/changeDesign.php" ?>

    <a href="../admin/index.php" class="abs_link_back">Назад</a>
    
    <?php if(isset($_SESSION['log_user']) ) : ?>
     
    <main class="main">
        <h1>Заказы</h1>
        <div class="container-box">
            <table>
                <tr class="table-header">
                    <td>Полное Имя</td>
                    <td>Телефон</td>
                    <td>Социальные сети</td>
                    <td>Тип</td>
                    <td>Дата</td>
                    <td>Статус</td>
                </tr>
                <?php
                //print_r($orders);
                foreach($orders as $key=>$id) {
                    echo '<tr>';
                        echo '<td>'.$orders[$key]['full_name'].'</td>';
                        echo '<td>'.$orders[$key]['phone'].'</td>';
                        echo '<td>'.$orders[$key]['socialNetworks'].'</td>';
                        echo '<td>'.$orders[$key]['subject'].'</td>';
                        echo '<td>'.$orders[$key]['date_order'].'</td>';
                        echo '<td class="td-rel">'.$orders[$key]['state'].'</td>';
                        echo '<td><form action="include/acceptOrder.php" method="POST">';
                            echo '<input type="hidden" name="phone" value="'.$orders[$key]['phone'].'">';
                            echo '<input type="hidden" name="date" value="'.$orders[$key]['date_order'].'">';
                            echo '<button class="accept">Принять</button>';
                        echo '</form>';
                        echo '<form action="include/deleteOrder.php" method="POST">';
                            echo '<input type="hidden" name="phone" value="'.$orders[$key]['phone'].'">';
                            echo '<input type="hidden" name="date" value="'.$orders[$key]['date_order'].'">';
                            echo '<button class="delete">Удалить</button>';
                        echo '</form></td>';
                    echo '</tr>';
                }
                ?>
            </table>
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