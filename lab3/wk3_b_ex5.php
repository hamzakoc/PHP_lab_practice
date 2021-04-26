<!doctype html>
<html lang="en">
<head>

    <title>Example of PHP POST method</title>
</head>



    <?php
    //superglobal variable $_GET

    if (isset($_POST['name']))

        echo "<p> Hi, " . $_POST['name']. "</p>"

    ?>

    <form method="post" action="<?php echo
    $_SERVER["PHP_SELF"];?>">
        <label for="inputName" > Name </label>
        <input type="text" name="name" id="inputName">
        <input type="submit"  id="Submit">

    </form>

    </body>
</html>





