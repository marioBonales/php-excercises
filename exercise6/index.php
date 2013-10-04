<!Doctype html>
<html>
<title>Exercise 6</title>
<body>
<nav>
<a href='/?page=list_persons'>List all</a>
<a href='/?page=new_person'>New</a>
</nav>
<?php
include("Controller.php");
$page = $_GET['page'];
$controller = new Controller();
$controller->renderPage($page);
?>
</body></html>
