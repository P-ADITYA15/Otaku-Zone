<?php
$roomname = $_GET['roomname'];

include 'dbconnect.php';

$sql= "SELECT * FROM `rooms` WHERE roomname= '$roomname'";

$result = mysqli_query($conn,$sql);
if($result)
{
    if(mysqli_num_rows($result)==0){
        $message="This room does not exist";
        echo '<script language="javascript">;';
        echo 'alert("'.$message.'");';  
        echo 'window.location="http://localhost/chatroom";';
        echo '</script>';


    }

}
else{
    echo "ERROR :". mysqli_error($conn);

}
?>
<!DOCTYPE html>
<html>
<head>
<title>Otaku Zone</title>

<link rel="icon" type="image/png" href="/images/luffy1.png">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/cover/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<style>
body {
  margin: 0 auto;
  max-width: 800px;
  padding: 0 20px;
}

.container {
  border: 2px solid #dedede;
  background-color: #f1f1f1;
  border-radius: 5px;
  padding: 10px;
  margin: 10px 0;
}

.darker {
  border-color: #ccc;
  background-color: #ddd;
}

.container::after {
  content: "";
  clear: both;
  display: table;
}

.container img {
  float: left;
  max-width: 60px;
  width: 100%;
  margin-right: 20px;
  border-radius: 50%;
}

.container img.right {
  float: right;
  margin-left: 20px;
  margin-right:0;
}

.time-right {
  float: right;
  color: #aaa;
}

.time-left {
  float: left;
  color: #999;
}
.anyClass{
    height:350px;
    overflow-y:scroll;

}
</style>
</head>
<body >

<h2>Chat Room - <?php echo $roomname?></h2>

<div class="container">
    <div class="anyClass">
  

</div>
</div>


<input type="text" class="form-control" name="usermsg" id="usermsg" placeholder="add messgae"><br>
<button class="btn btn-light" name="submitmsg" id="submitmsg">Send</button>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

<script type="text/javascript">

setInterval(() => {
    $.post("htcont.php",{room:'<?php echo $roomname ?>'},
    function(data,status){
        document.getElementsByClassName('anyClass')[0].innerHTML=data;

    })

    
}, 1000);    

   
var input = document.getElementById("usermsg");


input.addEventListener("keypress", function(event) {
  
  if (event.key === "Enter") {
    
    event.preventDefault();
   
    document.getElementById("submitmsg").click();
  }
});

$("#submitmsg").click(function(){
    var clientmsg = $("#usermsg").val();
  $.post("postmsg.php", {text: clientmsg, room:'<?php echo $roomname ?>', ip:'<?php echo $_SERVER['REMOTE_ADDR'] ?>'},
  function(data,status){
    document.getElementsByClassName('anyClass')[0].innerHTML= data;});
    $("#usermsg").val("");
    return false;
  });
  </script>

</body>
</html>
