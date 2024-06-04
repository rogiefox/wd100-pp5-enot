<?php
    include "product_db.php";

    $name = $_POST["name"];
    $model = $_POST["model"];
    $category = $_POST["category"];
    $price = $_POST["price"];
    $desc = $_POST["description"];
    $brands = $_POST["brands"];
    $qty = $_POST["qty"];
    $directory = "images/";
    $image = $directory . basename($_FILES['image']['name']);
    
    move_uploaded_file($_FILES['image']['tmp_name'], $image);
    $storeProductStmt = "INSERT INTO product_tbl (Product_Name, Product_Model, Product_Category, Product_Price, Product_Description, Product_Brands, Product_Quantity, Product_Image) VALUES ('$name', '$model', '$category', '$price', '$desc', '$brands', '$qty', '$image')";
    mysqli_query($conn, $storeProductStmt);
    echo " $name <br> $model <br> $category <br> $price <br> $desc <br> $brands <br> $qty <br> $image";
    header("Location: index.php");

?>