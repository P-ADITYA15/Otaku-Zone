<?php
$room =$_POST['room'];

if(strlen($room)>20 or strlen($room)<2){
    $message="Please choose a name between 2 to 20 char";
    echo '<script language="javascript">;';
    echo 'alert("'.$message.'");';  
    echo 'window.location="http://localhost/chatroom";';
    echo '</script>';
  
}
else if(!ctype_alnum($room)){
    $message="Please choose an alpha numeric name";
    echo '<script language="javascript">;';
    echo 'alert("'.$message.'");';  
    echo 'window.location="http://localhost/chatroom";';
    echo '</script>';

}
else{
    include 'dbconnect.php';

}
$sql= "SELECT * FROM `rooms` WHERE roomname = '$room'";
$result = mysqli_query($conn,$sql);
if($result){
    if(mysqli_num_rows($result)>0){
        $message="Please choose a different room name";
        echo '<script language="javascript">;';
        echo 'alert("'.$message.'");';  
        echo 'window.location="http://localhost/chatroom";';
        echo '</script>';

    }
    else{
        $sql="INSERT INTO `rooms` (`roomname`,`stime`) VALUES('$room',CURRENT_TIMESTAMP);";
        if(mysqli_query($conn,$sql)){
            $message="Your room is ready";
            echo '<script language="javascript">;';
            echo 'alert("'.$message.'");';  
            echo 'window.location="http://localhost/live-chatroom-main/rooms.php?roomname='  .$room.  '";';
            echo '</script>';
            
        }
    }
}
else{
     echo "error: ".mysqli_error($conn);
}
?>