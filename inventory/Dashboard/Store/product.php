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
        $sql = "INSERT INTO product(`Product_id`, `Product_name`, `Category`, `Seller`, `Quantity`, `Unit_price`) VALUES ('$id', '$name', '$category','$seller', '$quantity', '$price')";
        $result = mysqli_query($conn, $sql);
        // header("location: index.html");
    }
?> 