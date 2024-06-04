<?php
    include "product_db.php";
    $id = $_POST['id'];
    if(isset($_POST['DELETE'])){
        echo "$id";

        $deleteProductStmt = "DELETE FROM product_tbl WHERE Product_ID = $id";
        mysqli_query($conn, $deleteProductStmt);
        header("Location: index.php");
    }
    if(isset($_POST['UPDATE'])){
        $name = $_POST['name'];
        $model = $_POST['model'];
        $category = $_POST['category'];
        $price = $_POST['price'];
        $desc = $_POST['desc'];
        $brands = $_POST['brands'];
        $qty = $_POST['qty'];
        
        echo "$name";

        $updateProductStmt = "UPDATE product_tbl SET Product_Name ='$name', Product_Model ='$model', Product_Category ='$category', Product_Price ='$price', Product_Description ='$desc', Product_Brands ='$brands', Product_Quantity ='$qty' WHERE Product_ID = $id";
        mysqli_query($conn, $updateProductStmt);
        header("Location: index.php");
    }    
?>  

