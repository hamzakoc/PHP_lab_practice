<?php

// PHP & MySQLI



//1. connect to database
$db_con = mysqli_connect("localhost","root","","schooldb");
    //var_dump($db_con);
//2. validation
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }

//3.query preparation

    $query= "SELECT * FROM students";
    //echo $query;

//4.query execution

    $result = mysqli_query($db_con, $query);
    //var_dump($result);
    //echo "Returned rows are: " . mysqli_num_rows($result);
    while($row=mysqli_fetch_array($result)){
//        echo 'Row values: ' . print_r($row,true) . '<hr>';
        echo 'Name: ' .$row[1] . ', StudentID: ' .$row[2]. '<br>';

    }
mysqli_free_result($result);
mysqli_close($db_con);

//5.manage the information

