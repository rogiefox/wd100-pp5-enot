<?php
    session_start();
    include "admin/product_db.php";
    $id = $_POST['User_ID'];

    $itemProduct = "SELECT * FROM product_tbl WHERE Product_ID = $id";
    $itemResult = mysqli_query($conn, $itemProduct);
    $itemResultShow = mysqli_fetch_assoc($itemResult);

    // getting data to cart
    $orderID = $itemResultShow['Product_ID'];
    $orderUserID = $_SESSION['cart'];
    $orderName = $itemResultShow['Product_Name'];
    $orderPrice = $itemResultShow['Product_Price'];
    $orderImage = $itemResultShow['Product_Image'];

    echo "$orderID $orderUserID $orderName $orderPrice $orderImage";

    // transferring data to cart 
    $importProductOrder = "INSERT INTO cart_tbl (Cart_User_ID, Product_Name, Product_Price, Product_Image) VALUES ('$orderUserID', '$orderName', '$orderPrice', '$orderImage')";
    mysqli_query($conn, $importProductOrder);
    header("Location: index.php");
?>
