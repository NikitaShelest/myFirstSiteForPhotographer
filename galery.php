<?php
require ('include/db.php');
require ('include/auth.php');

$issue = new db();
$instagram = $issue->issuingContact()[0]['instagram'];
$facebook = $issue->issuingContact()[0]['facebook'];
$vk = $issue->issuingContact()[0]['vk'];
$type = $_GET['type'];

$page = isset($_GET['page']) ? $_GET['page']: 1;
$limit = 9;
$offset = $limit * ($page - 1);

$element =  $issue->countGallery()[0][0];
$pag_item = $element / $limit;

$photo = $issue->issuingGallery($limit, $offset);


$photoType = $issue->issuingGalleryType($type);




session_start([
    'cookie_lifetime' => 30000,
]);

?>
     <?php 
            include "static/header.php";
        ?>

<?php include "static/changeDesign.php" ?>

    <section>
        <div class="container">

            <div class="galery">
                <h1>Галерея</h1>
                <?php
                    if(!empty($_GET['type'])){
                        echo '<h3>'.$_GET['type'].'</h3>';

                    }
                ?>
                <div class="photo-items">
                <?php if(isset($_SESSION['log_user']) ) : ?>
                    <?php

                        
                        if(!empty($_GET['type'])) {
                            foreach($photoType as $key=>$id) {
                                echo '<div class="item">';
                                echo "<form action='removePhoto.php' method='POST'>";
                                echo "<input type='hidden' name='link' value='".$photoType[$key]['link']."'>";
                                echo '<button type="submit" class="btn-remove">x</button>';
                                echo '<a href="'.$photoType[$key]['link'].'" data-lightbox="test"><img src="'.$photoType[$key]['link'].'"></a>';
                                echo "</form>";
                                echo '</div>';
                            }

                        }elseif(empty($_GET['type'])) {
                            foreach($photo as $key=>$id) {
                                echo '<div class="item">'; 
                                echo "<form action='removePhoto.php' method='POST'>";
                                echo "<input type='hidden' name='link' value='".$photo[$key]['link']."'>";
                                echo '<button type="submit" class="btn-remove">x</button>';
                                echo '<a href="'.$photo[$key]['link'].'" data-lightbox="test"><img src="'.$photo[$key]['link'].'"></a>';
                                echo "</form>";
                                echo '</div>';
                            
                            }
                            $this_page = $page - 1;
                            $this_page ? 0: $this_page =1;
                           
                        } ?>

                <?php else : ?>
                    <?php
                        if(!empty($_GET['type'])) {
                            foreach($photoType as $key=>$id) {
                                echo '<div class="item">';
                                echo '<a href="'.$photoType[$key]['link'].'" data-lightbox="test"><img src="'.$photoType[$key]['link'].'"></a>';
                                echo '</div>';
                            }

                        }elseif(empty($_GET['type'])) {
                            foreach($photo as $key=>$id) {
                                echo '<div class="item">'; 
                                echo '<a href="'.$photo[$key]['link'].'" data-lightbox="test"><img src="'.$photo[$key]['link'].'"></a>';
                                echo '</div>';
                            }
                        }
                    ?>
                    <?php endif;?>
                </div>
            </div>

            <?php
            if(empty($_GET['type'])) {
                echo '<div class="pagination">';
                echo '<div class="links">';
                for ($i = 1; $i <= $pag_item; $i++) {
                    $this_page++;
                    if ($pag_item < $this_page) {
                        $this_page++;
                        break;
                    }
                    
                    echo '<a href="?page='.$this_page.'" class="link">'.$this_page.'</a>';
                    
                    
                    
                    
                }
                echo '</div>';
                echo '</div>';
            }

           
            ?>
        </div>
        <section>
        <script src="dist/js/lightbox-plus-jquery.js"></script>

        <?php 
            include "static/footer.php";
        ?>