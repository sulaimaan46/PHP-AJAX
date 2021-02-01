<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "students";

// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error)
    {
        die("Connection failed: " . $conn->connect_error);
    }

    $use=$_GET["sname"];

    echo $use;

    $db="SELECT * FROM students_details WHERE name LIKE '%{$use}%' ";

    $v=$conn->query($db);

    if($v->num_rows > 0){

        while($row=$v->fetch_array(MYSQLI_ASSOC)){

            $name=$row["name"];
        
            $df=json_encode($name);

             echo $df;
        
        }

        

    }else{

        echo "No Result";
    }