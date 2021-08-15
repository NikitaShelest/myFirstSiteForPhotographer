<?php 
    require ('include/auth.php');

    session_start([
        'cookie_lifetime' => 15,
    ]);

    $link = $_POST['link'];
?>


<?php if(isset($_SESSION['log_user']) ) : ?>
<style>
    .del_photo {
        display: flex;
        justify-content: center;
    }
    img {
        display: block;
    }
    button{
        width: 100%;
        border: none;
        height: 30px;
    }
</style>


<button style="background:green; color: white;"><a href="../galery.php" style="text-decoration: none; color: white">ВЕРНУТЬСЯ</a></button>

<section class="del_photo">

    <div>
        <form action="/include/deletePhoto.php" methon="GET">
            <h1>Вы хотите удалить это фото?</h1>
            <img src="<?php echo  $link ?>" alt="" width='300px'>
            <input type="hidden" name="link" value="<? echo $link ?>">
            <button type="submit" style="background:red; color: white;">УДАЛИТЬ</button>
        </form>
    </div>
</section>


<?php ?>

<?php else : ?>


<?php endif;?>