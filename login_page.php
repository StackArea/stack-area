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
            $login_pass = $result_arr["Password"];
            echo $login_name;
              if(strcmp($login_pass,$pass)==0) {
                
                    header("location: /inventory/Dashboard/index.html");
                
               
            }
            else {
                // Password Error
                // $offset[1] = -1;
                // header("location: admin_dashboard.php?offset=".http_build_query($offset));
            }
        }
    }
?>