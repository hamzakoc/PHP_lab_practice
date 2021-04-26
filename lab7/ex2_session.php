<?php


session_start();

$name = $_SESSION['name'];
$email = $_SESSION['email'];

?>

<!doctype html>
<html lang="en">
<head>

    <title>PHP session 1</title>
</head>
<body>


    <h5>Thank you <?php echo  $name; ?> You have subsricbed with the email </h5>
    <?php echo $email; ?>

    <a href="ex3_session.php">Go to page 3</a>



</body>
</html>

