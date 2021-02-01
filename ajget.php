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

     $search=$_GET["name"];

     $v="SELECT * FROM students_details WHERE name LIKE '%{$search}%'";

     $var = $conn->query($v);

     if ($var->num_rows > 0) {

        while ($row=$var->fetch_array(MYSQLI_ASSOC)) {

        $studentname=$row["name"];

         echo $studentname ;"<br></n>";

        }
        
    }
         else{
             echo "No Result";
            }

?>
