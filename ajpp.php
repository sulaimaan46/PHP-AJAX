<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "students";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error)
  {
      die("Connection failed: " . $conn->connect_error);
  }

  
$req=$_GET["name"];
// echo $req;
  
   $val = $conn->query("SELECT * FROM students_details WHERE name LIKE '%{$req}%' ");

      if ($val->num_rows > 0) {

//         $row=$val->fetch_array(MYSQLI_ASSOC);
// // print_r($row);exit;

//         $emp = array();

//         foreach($row as $result){

//           // print_r($result);
//                $result=arraypush($emp);
//                print_r($emp);

//         }
    
       while($row=$val->fetch_array(MYSQLI_ASSOC)){

          $id=$row["id"];
          $studentname=$row["name"];
          $dob=$row["dob"];
          $phonenumber=$row["phonenumber"];
          $stuclass=$row["class"];
          $stuaddress=$row["address"];


          $return_arr[] = array("id" => $id,
          "name" => $studentname,
          "dob" => $dob,
          "phonenumber" => $phonenumber,
          "class" => $stuclass,
          "address" => $stuaddress
        );

        
       }
       $res= json_encode($return_arr);
       print_r($res); 
      }   
      else {
        echo "0 results";
      }
  
    
  $conn->close();

?>