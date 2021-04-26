<?php
session_start();
//unset($_SESSION['name']);
session_destroy();

?>



<!doctype html>
<html lang="en">
<head>

    <title>PHP session 1</title>
</head>
<body>


<h1>Hello <?php echo  $name; ?>  </h1>






</body>
</html>
