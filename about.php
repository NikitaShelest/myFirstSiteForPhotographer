<title>О себе</title>

<?php 

$headName = "О себе";

require('include/db.php');

$add = new db();


$text = $add -> selectAboutMe();

?>

<?php include "static/header.php"?>
<?php include "static/changeDesign.php"?>

<h2 id="about-head">О себе</h2>

<section class="about">
    
    <p class="text">
        <?echo $text[0]['text'] ?>
    </p>
</section>

<?php include "static/footer.php"?>