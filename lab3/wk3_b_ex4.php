<!doctype html>
<html lang="en">
<head>

    <title>Example of PHP GET method</title>
</head>


<?php
//superglobal variable $_GET

if (isset($_GET['name']))

    echo "<p> Hi, " . $_GET['name']. "</p>"


?>

<form method="get" action="<?php echo
    $_SERVER["PHP_SELF"];?>">
    <label for="inputName" > Name </label>
    <input type="text" name="name" id="inputName">
    <input type="submit"  id="Submit">

</form>




</body>
</html>



