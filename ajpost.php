<?php 
$v1=$_POST["submit"];

if(isset($v1)){

    $name=$_POST["name"];
    echo $name;
    $email=$_POST["email"];
    $phonenumber=$_POST["phnumber"];
    $city=$_POST["city"];

}
else{
    echo "The form Was Not Submitted";
}

?>

<html>
<head>
<style type="text/css">
table { border-collapse: collapse; }
table, th, td { border: 2px solid black; }
</style>
</head>
<body>
<table class="mytable">
<th>
<td>Name</td>
<td>email</td>
<td>Pone Number</td>
<td>City</td>
</th>
<tbody>
<?php echo "<tr><td>" .$name. "</td><td>" .$email. "</td><td>" .$phonenumber. "</td><td>" .$city. "</td></tr>" ; ?>
</tbody>
</table>
</body>
</html>