<?php
include("Controller.php");
$page = $_GET['page'];
$controller = new Controller();
$controller->renderPage($page);
