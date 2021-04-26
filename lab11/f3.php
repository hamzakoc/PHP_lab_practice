<?php
//PHP & PDO

$dsn = 'mysql:host=localhost;dbname=schoolDB';
$username = "root";
$password = "";



try {
    $db_con = new PDO($dsn,$username, $password);
    // set the PDO error mode to exception

    $query= "SELECT * FROM students";

    $result = $db_con -> query($query);


    while($row=$result->fetch(PDO::FETCH_BOTH))
    {

        echo 'Name: ' .$row[1] . ', StudentID: ' .$row[student_id]. '<br>';

    }

} catch(PDOException $e) {

    echo "Connection failed: " . $e->getMessage();

}