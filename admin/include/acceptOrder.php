<?php

require('../../include/db.php');

$phone = $_POST['phone'];

$accept = new db();

$accept -> acceptOrder($phone);

header('Location: ../orders.php');