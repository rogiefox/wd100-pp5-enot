<?php
    session_start();
    include "user.php";

    include "admin/product_db.php";

  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        include "navbar.php"
    ?>
    <?php
        if(isset($SESSION['cart'])){
            $_SESSION['cart'] = array();
        }
        

        if(isset($_POST['addtocart'])){
            $_SESSION['UserID'] = $_POST['UserID'];
            $_SESSION['ProductID'] = $_POST['ProductID'];
            $stmt = "SELECT * FROM product_tbl WHERE Product_ID = {$_SESSION['ProductID']}";
            $query = mysqli_query($conn, $stmt);
            $product = mysqli_fetch_assoc($query);
            $_SESSION['cart'][] = $product;
            // header("Location: brand_makita.php");
            
        }

        if(isset($_POST['REMOVEFROMCART'])){
            if(isset($_POST['index'])){
                $indexToRemove = $_POST['index'];
                array_splice($_SESSION['cart'], $indexToRemove, 1);
            }
        }

        $totalAmount = 0;
        echo "<div class='container mt-5'>";
        echo "<h1>Your Cart Here</h1>";
        if(isset($_SESSION['cart']) && !empty($_SESSION['cart'])){
        echo "<table class='table table-hover table-bordered' style='background-color: #018A9C;'>";
        echo "    
                    <tr class='text-center'>
                        <th>Product Image</th>
                        <th>Product Name</th>
                        <th>Product Price</th>
                        <th>Action</th>
                    </tr>          
                
            ";
                foreach($_SESSION['cart'] as $index => $item){
                $totalAmount += $item['Product_Price'];
                echo "
                <tr>
                    <td class='d-flex justify-content-center align-items-center'><img src='admin/{$item['Product_Image']}' height='200px' width='200px'></td>
                    <td>{$item['Product_Name']}</td>
                    <td><strong>&#8369;{$item['Product_Price']}</strong></td>
                    <td>
                        <form action='' method='post' class='d-flex justify-content-center align-items-center'>
                            <input type='hidden' name='index' value='{$index}'>
                            <input type='submit' name='REMOVEFROMCART' value='Remove'>
                        </form>
                    </td>
                 </tr> 
                 ";              
                }
         echo "</table>";
         echo "<h4>Total Amount: <storng>&#8369;$totalAmount</strong></h4>";
        }else {
            echo "<p>Your cart is empty.</p>";
        }      
        echo "</div>";   
    ?>

    <div class="container">
        <h3 class="text-center">Shipping Information</h3>
            <?php
                $selectUserStmt = "SELECT * FROM user_tbl WHERE User_ID = {$_SESSION['User_ID']}";
                $userQuery = mysqli_query($conn, $selectUserStmt);
                
                while($userShow = mysqli_fetch_assoc($userQuery)){
                    echo"
                        <form action='' method='POST' class='horizontal'>
                            <div class='form-group'>
                                <label for='FullName' class='col-sm-2 control-label'>Full Name:</label>
                                    <div class='col-sm-10'>
                                        <input type='text' class='form-control' value='$userShow[FullName]' name='fullname'>
                                    </div>    
                            </div>
                            <div class='form-group'>
                                <label for='Email' class='col-sm-2 control-label'>Email Address:</label>
                                    <div class='col-sm-10'>
                                        <input type='text' class='form-control' value='$userShow[Email]' name='email'>
                                    </div>    
                            </div>
                            <div class='form-group'>
                                <label for='Address' class='col-sm-2 control-label'>Address:</label>
                                    <div class='col-sm-10'>
                                        <input type='text' class='form-control' value='$userShow[Address]' name='address'>
                                    </div>    
                            </div>
                            <form action='order_getter.php' method='post' class='d-flex justify-content-center align-items-center'>
                                <input type='hidden' name='UserID' value='$_SESSION[User_ID]'>
                                <input type='submit' name='CHECKOUT' value='Checkout'>
                            </form>
                        </form>
                    ";
                }

            ?>
    </div>
  
<footer class="text-white pt-5 pb-4 mt-1">
        <div class="container text-center text-md-left">
            <div class="row text-center text-md-left">
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3 text-start">
                    <img src="img/logo.png" alt="" width="300" height="250" class="rounded-pill">
                </div>
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3 text-start">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-white" style="color: #000000;">
                        Brands
                    </h5>
                    <p>
                        <a href="#" class="text-white" style="text-decoration: none;">Makita</a>
                    </p>
                    <p>
                        <a href="#" class="text-white" style="text-decoration: none;">Bosch</a>
                    </p>
                    <p>
                        <a href="#" class="text-white" style="text-decoration: none;">DeWalt</a>
                    </p>
                    <p>
                        <a href="#" class="text-white" style="text-decoration: none;">iNGCO</a>
                    </p>
                    <p>
                        <a href="#" class="text-white" style="text-decoration: none;">DCA</a>
                    </p>
                    <p>
                        <a href="#" class="text-white" style="text-decoration: none;">Lotus</a>
                    </p>
                </div>
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3 text-start">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-white" style=" color:#000000;">
                        Links
                    </h5>
                    <p>
                        <a href="#" class="text-white" style="text-decoration: none;">FAQ</a>
                    </p>
                    <p>
                        <a href="#" class="text-white" style="text-decoration: none;">Become a Partner</a>
                    </p>
                    <p>
                        <a href="#" class="text-white" style="text-decoration: none;">Shipping Requirements</a>
                    </p>
                </div>
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3 text-start">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-white" style=" color: #000000;">
                        Contacts
                    </h5>
                    <p class="fst-italic">
                        <i class="fa-solid fa-house"></i> Carmen, Cebu
                    </p>
                    <p class="fst-italic">
                        <i class="fa-solid fa-envelope"></i> mightytools@gmail.com
                    </p>
                    <p class="fst-italic">
                        <i class="fa-solid fa-phone"></i> +63 918-693-4954
                    </p>
                    <p class="fst-italic">
                        <i class="fa-solid fa-fax"></i> +01 335 633 77
                    </p>
                </div>
            </div>
            <hr class="mb-1 mt-3">
            <div class="row align-items-center text-start mt-1">
                <div class="col-md-7 col-lg-8">
                    <p class="fst-italic">
                        Copyright @2024 All Rights Reserved
                    </p>
                </div>
                <div class="col-md-5 col-lg-4">
                    <div class="text-center textmd-right">
                        <ul class="list-unstyled list-inline text-end">
                            <li class="list-inline-item">
                                <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fa-brands fa-facebook"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fa-brands fa-instagram"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fa-brands fa-tiktok"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fa-brands fa-twitter"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>