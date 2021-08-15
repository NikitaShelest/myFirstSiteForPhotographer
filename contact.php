<title>Контакты</title>

<?php
require ('include/db.php');

$issue = new db();
$name = $issue->issuingContact()[0]['full_name'];
$phone = $issue->issuingContact()[0]['phone'];
$instagram = $issue->issuingContact()[0]['instagram'];
$facebook = $issue->issuingContact()[0]['facebook'];
$vk = $issue->issuingContact()[0]['vk'];
?>
<?php 
    include "static/header.php";
?>

<?php include "static/changeDesign.php" ?>

<main>
    <div class="container">
        
        <div class="contact">
        <h1>Контакты фотографа</h1>
            <div class="item">
                <img src="IMG/icons/photograph.png" width=30 class="left-icon">
                <img src="IMG/icons/photograph.png" width=30 class="right-icon">
                <p><?php echo $name?></p>
                <br>
                <hr>
            </div>

            <div class="item">
                <img src="IMG/icons/phone.png" width=30 class="left-icon">
                <img src="IMG/icons/phone.png" width=30 class="right-icon">
                <a href="tel:<?php echo $phone?>" class="phone"><?php echo $phone?></a>
            </div>

            <div class="item">
                <img src="IMG/icons/inst.png" width=30 class="left-icon">
                <img src="IMG/icons/inst.png" width=30 class="right-icon">
                <a href="<?php echo $instagram?>"><?php echo $instagram?></a>
            </div>

            <div class="item">
                <img src="IMG/icons/fb.png" width=30 class="left-icon">
                <img src="IMG/icons/fb.png" width=30 class="right-icon">
                <a href="<?php echo $facebook?>"><?php echo $facebook?></a>
            </div>

            <div class="item">
                <img src="IMG/icons/vk.png" width=30 class="left-icon">
                <img src="IMG/icons/vk.png" width=30 class="right-icon">
                <a href="<?php echo $vk?>"><?php echo $vk?></a>
            </div>
                
                
                


        </div>
    </div>
</main>
<?php 
    include "static/footer.php";
?>