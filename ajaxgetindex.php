<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
function showvalue(){
   var name = $(".iname").val();
    $(".iname").keyup(function(){
    $.get("ajget.php"+"?name="+name, function(data, status){
        $("#result").html(data);
   
    });
  });
}
</script>

</head>
<body>

<div id="div1"><h2>Let jQuery AJAX </h2></div>

<form action="" method="post">
<input type="text" class="iname" name="sname" onkeyup="showvalue()" >
<p>Result is:<b><span id="result"></b></span></p>

</form>
</body>
</html>