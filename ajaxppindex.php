<html>
<head>
<title>Ajax</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).on("click", ".sulai", function (){
    var user=$('.sname').val();

            $.ajax({
                url: "ajpp.php"+"?name="+user,
                method: 'GET',
                datatype: 'json',
                success: function(response) {
                   
                   console.log(response);
                 var len=response.length;
                  alert(len);
                 for(var i=0; i<len; i++){
                    
                    var id=response[i].id;
                  //   console.log(id);
                    var name=response[i].name;
                  //   console.log(name);
                    var dob=response[i].dob;
                    var phnumber=response[i].phonenumber;
                    var study=response[i].class;
                    var city=response[i].address;

                    var table_str = "<tr>" +
                    "<td align='center'>" + id + "</td>" +
                    "<td align='center'>" + name + "</td>" +
                    "<td align='center'>" + dob + "</td>" +
                    "<td align='center'>" + phnumber + "</td>" +
                    "<td align='center'>" + study + "</td>" +
                    "<td align='center'>" + city + "</td>" +
                    "</tr>";

                    $("#userTable tbody").append(table_str);

                }  
                

               
                }

                    
            });
           
});

</script>
</head>
<body>
<div class="container">
<form>
<div>Name: <input type="text" class="sname" name="name" ></div><br>

<div><input type="button" name="Submit" class="sulai" value="submit"> </div>
</form>
<div class="container">
   <table id="userTable" >
      <thead>
        <tr>
          <th width="5%">ID</th>
          <th width="20%">Name</th>
          <th width="30%">Date Of Birth</th>
          <th width="20%">PH. Number</th>
          <th width="20%">Class</th>
          <th width="20%">Address</th>
        </tr>
      </thead>
      <tbody></tbody>
   </table>
</div>
</div>
</body>
</html>