<?php

//PHP & MySQLI OOP

$db_con = new mysqli("localhost","root","","schooldb");

// Check connection
if ($db_con -> connect_errno) {
    die("Failed to connect to MySQL: " . $db_con -> connect_error);

}

// Perform query
$query= "SELECT * FROM students";

$result = $db_con -> query($query);



  while($row=$result ->fetch_assoc())
  {

      echo 'Name: ' .$row['name'] . ', StudentID: ' .$row['student_id']. '<br>';

  }

$result -> free_result();
$db_con -> close();
