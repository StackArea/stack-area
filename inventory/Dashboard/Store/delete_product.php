<?php
    include "connection.php";

    error_reporting(0);
    session_start();
    // echo "Welcome Server";
    
    if($_SERVER['REQUEST_METHOD']=="POST")
    {
       
        $id = $_POST['id'];
        $quantity = $_POST['qty'];
        $sql = "SELECT * FROM product WHERE Product_id = '$id';";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
        if ($row)
        {
        $oqty = $row['Quantity'];

        $new_stock = $oqty - $quantity;
        echo "$new_stock";
        $sql = "UPDATE `product` SET `Quantity`='$new_stock'  WHERE Product_id = '$id'; ";
        $result = mysqli_query($conn, $sql);
         header("location: index.php");
        }
        else
        {
            echo 'Item not found!  Please enter a valid product ID..';

        }
    }
?> 