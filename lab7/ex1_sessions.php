<?php

    if (isset($_POST['submit'])){
        session_start();
        $_SESSION['name']=htmlentities($_POST['username']);
        $_SESSION['email']=htmlentities($_POST['email']);

        header('Location: ex2_session.php');

}


?>

<!doctype html>
<html lang="en">
<head>

    <title>PHP session</title>
</head>
<body>


        <form method="POST" action="<?php $_SERVER['PHP_SELF'];?>">
            <br>
            <input type="text" name="username" placeholder="Enter useraname: ">
            <br>
            <input type="text" name="email" placeholder="Enter email: ">
            <br>
            <input type="submit" name="submit" value="Submit">

        </form>


</body>
</html>
