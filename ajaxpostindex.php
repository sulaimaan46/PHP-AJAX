<html>
<head>
<title>Ajax</title>
</head>
<body>
<div class="container">
<form id="myForm" method="post">
<div>Name: <input type="text" class="sname" name="name" ></div><br>
<div>EMail: <input type="text" class="semail" name="email"> </div><br>
<div>Phone Number: <input type="text" class="sphnumber" name="phnumber"> </div><br>
<div>City: <input type="text" class="scity"  name="city"> </div><br><br>

<div><input type="submit" name="Submit" > </div>
</form>
<div id="result"></div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){

$("form").submit(function(event){

    e.preventDefault();

$.ajax(function(){

    url:"ajpost.php";
    type:"POST";
    data:($this).serialize()
});
.done(function(){
 $("#result").html(data);
});
.fail(function(){

    alert("This Form Was not Submitted");
});
return false;
});

});

</script>
</body>
</html>