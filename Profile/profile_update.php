<?php
 
 session_start();
 include "connection.php";
 if($_SERVER['REQUEST_METHOD']=="POST")
 { 
    $sql = "SELECT * FROM `login` WHERE user_id =" .$_SESSION["user_id"];    
        $result = mysqli_query($conn, $sql);
        $result_arr = mysqli_fetch_array($result);
        $cuser_id = $result_arr["user_id"];
        $_SESSION['cuser']=$cuser_id;
    echo "$cuser_id";
    $name=$_POST['name'];
    $mail=$_POST['mail'];
    $number=$_POST['number'];
    $age=$_POST['age'];
    $update = "UPDATE `user` SET `User_name`='$name',`Number`='$number',`Email`='$mail',`Age`='$age'  where user_id='$cuser_id'";
       $sql2=mysqli_query($conn,$update);
 }
session_write_close();
?>