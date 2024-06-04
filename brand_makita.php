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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <title>Makita Products</title>
</head>
<body>
    <!-- Navigation Bar -->
    <?php
        include "navbar.php"
    ?>
    
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/makita_banner1.jpg" class="d-block w-100" alt="..." height="600">
            </div>
            <div class="carousel-item">
                <img src="img/makita_banner2.jpg" class="d-block w-100" alt="..." height="600">
            </div>
            <div class="carousel-item">
                <img src="img/makita_banner3.jpg" class="d-block w-100" alt="..." height="600">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class='container'>
    <div class='row my-3'>
    <?php
       
        $selectProductStmt = "SELECT * FROM `product_tbl` WHERE Product_Brands = 'Makita'";
        $productQuery = mysqli_query($conn, $selectProductStmt);

        while($productShow = mysqli_fetch_assoc($productQuery)){
            echo "
                <div class='col-md-4'>
                    <div class='card shadow my-3'>
                        <div class='card-body'>
                            <form>                            
                                <div class='row'>
                                    <div class='col-md-12 text-center'>
                                        <img src='admin/$productShow[Product_Image]' width='300' height='300'>
                                    </div>
                                    <div class='col-md-12 mb-1 d-flex flex-column form-control border-0'>
                                        <div class='text-dark fw-bold text-center'>$productShow[Product_Name]</div>
                                        <div class='text-dark fw-bold text-center'>$productShow[Product_Model]</div>
                                        <div class='text-dark fw-bold'>&#8369; $productShow[Product_Price]</div>    
                                    </div>
                                    <div class='col-md-12'>
                                        <button type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#exampleModal-$productShow[Product_ID]'>
                                            View Details
                                        </button>  
                                    </div>    
                                </div>
                            </form>    
                        </div>
                    </div>
                </div>
                
                <div class='modal fade' id='exampleModal-$productShow[Product_ID]' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                    <div class='modal-dialog'>
                      
                            <div class='modal-content'>
                                <div class='modal-header' style='background-color: #018A9C;'>
                                    <h1 class='modal-title fs-5 text-white' id='exampleModalLabel'>$productShow[Product_Name]</h1>
                                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                </div>
                                <div class='modal-body'>
                                    <img class='w-100' src='admin/$productShow[Product_Image]' alt='Card image cap'>
                                    <p class='card-text fw-bold'>$productShow[Product_Description]</p>
                                    <p class='card-text fw-bold'>&#8369; $productShow[Product_Price]</p>
                                </div>
                                <div class='modal-footer'>
                                <form action='cartpage.php' method='POST'>
                                    <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
                                    <input type='hidden' name='ProductID' value='$productShow[Product_ID]'>
                                    <input type='hidden' name='UserID' value='$_SESSION[User_ID]'>
                                    <input type='submit' name='addtocart' value='Add to Cart' class='btn btn-primary'>
                                </form> 
                                </div>
                            </div>
                           
                    </div>
                </div>   
            ";
        }
    ?>
        </div>
    </div>
    <!-- Footer -->
    <?php
        include "footer.php"
    ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>