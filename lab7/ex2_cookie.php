<?php

if (isset($_POST['submit'])){
    $username=htmlentities($_POST['username']);
    setcookie('username', $username, time()+3600);
    header('Location: ex3_cookie.php');

}
?>

<!doctype html>
<html lang="en">
<head>

    <title>PHP cookies</title>
</head>
<body>
    <form method="POST" action="<?php $_SERVER['PHP_SELF'];?>">
    <br>
        <input type="text" name="username" placeholder="Enter useraname">
        <br>
        <input type="submit" name="submit" value="Submit">



    </form>
</body>
</html>
