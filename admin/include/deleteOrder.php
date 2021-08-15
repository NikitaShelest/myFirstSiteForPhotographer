<?php

require('../../include/db.php');

$phone = $_POST['phone'];

$accept = new db();

$accept -> deleteOrder($phone);


header('Location: ../orders.php');