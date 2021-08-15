<title>Главная</title>

<?php
require('include/db.php');

$issue = new db();
$instagram = $issue->issuingContact()[0]['instagram'];
$facebook = $issue->issuingContact()[0]['facebook'];
$vk = $issue->issuingContact()[0]['vk'];
$head = $issue->issuingAbout()[0]['head'];
$opening = $issue->issuingAbout()[0]['opening'];

$random_photo = $issue->issuingSlaiderImage();

?>
<?php
include "static/header.php";
?>

<?php include "static/changeDesign.php" ?>

<section class="main-content">
    <div class="content">
        <h3><?php echo $head; ?></h3>
    </div>
    <div class="content">
        <p><?php echo $opening; ?></p>
    </div>
</section>

<script src="JS/slider.js" defer></script>
<div class="container">
    <div class="slider">
        <?php
        foreach ($random_photo as $key => $id) {
            echo "<img class='hiddenPhoto' src='" . $random_photo[$key]["link"] . "' alt='photo' hidden>";
        }
        ?>
        <img class="slide" src="#" alt="img" width=400px>
        <button class="button btn-left">❮|</button>
        <button class="button btn-right">|❯</button>
    </div>
</div>



<?php
include "static/footer.php";
?>