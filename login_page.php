<?php
    include "connection.php";

    error_reporting(0);
    session_start();
    
    echo "Welcome Server";
    
    if($_SERVER['REQUEST_METHOD']=="POST")
    {
        $name = $_POST['name'];
        $pass = $_POST['pass'];
        
        $sql = "SELECT * FROM `Login` WHERE User_name = '$name'";
        if(!empty($name) && !empty($pass)) {    
            $result = mysqli_query($conn, $sql);
            $result_arr = mysqli_fetch_array($result);
            $login_name = $result_arr["User_name"];
            $user_id = $result_arr["user_id"];
            $login_pass = $result_arr["Password"];
              if(strcmp($login_pass,$pass)==0) {
                  $_SESSION["user_id"] = $user_id;
               
                    header("location: /stack-area/inventory/Dashboard/index.php");
                
               
            }
            else {
                // Password Error
                // $offset[1] = -1;
                // header("location: admin_dashboard.php?offset=".http_build_query($offset));
            }
        }
    }
?>