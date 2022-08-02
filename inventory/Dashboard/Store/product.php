<?php
    include "connection.php";

    error_reporting(0);
    session_start();
    
    echo "Welcome Server";
    
    if($_SERVER['REQUEST_METHOD']=="POST")
    {
        $name = $_POST['name'];
        $id = $_POST['id'];
        $category = $_POST['category'];
        $quantity = $_POST['qty'];
        $seller = $_POST['seller'];
        $price = $_POST['price'];
        $sql = "SELECT * FROM product WHERE Product_id = '$id' AND Seller = '$seller';";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
        if ($row)
        {
          $oqty = $row['Quantity'];
          $nqty = $oqty + $quantity;
          $sql = "UPDATE `product` SET `Quantity`='$nqty' WHERE Product_id = '$id'; ";
          $result = mysqli_query($conn, $sql);
          header("location: index.php");

        }

       else{

       
        $sql = "INSERT INTO product(`Product_id`, `Product_name`, `Category`, `Seller`, `Quantity`, `Unit_price`) VALUES ('$id', '$name', '$category','$seller', '$quantity', '$price')";
        $result = mysqli_query($conn, $sql);
        header("location: index.php");
       }
    }
?> 