<?php

require_once'./controllers/HomeController.php';
include 'views/includes/header.php';
$home = new HomeController();

$home->index('home');
include 'views/includes/footer.php';
?>