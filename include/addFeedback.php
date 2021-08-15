<?php 

  require('db.php');

  $add = new db();

   $name = $_POST['username'];
   $text = $_POST['text_feedback'];
   $date = date('o-m-d H:i:s');
   
   $add-> addFeedback($name, $text, $date);
   header('Location: /feedback.php');
?>