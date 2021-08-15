<?php
require ('include/db.php');

$issue = new db();
$instagram = $issue->issuingContact()[0]['instagram'];
$facebook = $issue->issuingContact()[0]['facebook'];
$vk = $issue->issuingContact()[0]['vk'];
?>

<?php 
    include "static/header.php";
?>

<?php include "static/changeDesign.php" ?>

    <main class="form-registration">
        <div class="container">

            <form action="include/addRegistration.php" method="POST">

                <div class="item">
                    <h2>Запись на фотосессию к фотографу</h2>
                </div>

                <label for="full_name">Ваше Ф.И.О</label>
                <div class="item">
                    <input type="text" name="full_name" id="full_name" placeholder="Иван Иванов Иванович" required>
                </div>

                <label for="phone">Ваш телефон</label>
                <div class="item">
                    <input type="text" name="phone" id="phone" placeholder="+38501234567" required>
                </div>

                <label for="socialNetworks">Ваши социальные сети</label>
                <div class="item">
                    <input type="text" name="socialNetworks" id="socialNetworks" placeholder="instagram.com/example">
                </div>

                <label for="subject">Тематика</label>
                <div class="item">
                    <select id="subject" name="subject[]" class="custom-select" required>
                        <option disabled selected>Выберите тематику фотосесси</option>
                        <option value="Прогулочная">Прогулочная</option>
                        <option value="Love Story">Love Story</option>
                        <option value="Праздники">Праздники</option>
                        <option value="Свадебные">Свадебные</option>
                        <option value="Семейные">Семейные</option>
                        <option value="Студийные">Студийные</option>
                        <option value="Груповые">Груповые</option>
                    </select>
                </div>

                <label for="date">Предварительная дата</label>
                <div class="item">
                    <input type="date" name="date" id="date">
                </div>

                <div class="item">
                    <button type="submit">Записаться</button>
                </div>

            </form>
        </div>
    </main>
<?php 
    include "static/footer.php";
?>