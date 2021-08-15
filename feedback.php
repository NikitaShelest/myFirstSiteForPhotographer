<title>Отзывы</title>

<?php 
    require('include/db.php');
    
    $select = new db();

    $feedbacks = $select->selectFeedback();
?>
<?php include "static/header.php";?>
<?php include "static/changeDesign.php";?>



<section class="feedbacks">
    <h1>Отзывы</h1>
        <?php 
            foreach($feedbacks as $key=>$id) {
                echo "<div class='feedback'>";
                echo "<div class='id'><p>".$feedbacks[$key]['id']."</p></div>";
                echo "<div class='name'><p>".$feedbacks[$key]['name']."</p></div>";
                echo "<div class='text'><p>".$feedbacks[$key]['text']."</p></div>";
                echo "<div class='date'><p>".$feedbacks[$key]['date']."</p></div>";
                echo "</div>";
                }
        ?>
  
</section>
<section class="addFeedback">

    <form action="include/addFeedback.php" method="POST">
    <h2>Оставить отзыв</h2>
        <div class="item">
            <input type="text" id="username" required name="username" placeholder="Введите имя">
        </div>

        <div class="item">
            <textarea name="text_feedback" id="text" required cols="50" rows="5" placeholder="Введите текст отзыва"></textarea>
        </div>

        
        <div class="item">
            <button type="sublit">Добавить</button>
        </div>
        
    </form>
</section>

<?php include "static/footer.php";?>