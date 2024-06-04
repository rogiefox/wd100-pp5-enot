<?php
  session_start();
  include "admin.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <title>Admin Import Products</title>
</head>
<body>
    <div class="container-fluid">
        <nav>
            <div class="d-flex align-items-start justify-content-evenly mt-3">
                
                <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <div class="d-flex align-items-center mb-4">
                        <img src="../img/logo.png" alt="" height="100" width="150">
                        <div class="flex-column">
                            <h4 class="fw-bold">ADMIN</h4>
                            <a href="../logout.php" class="text-dark fw-bold btn btn-outline-primary" style="text-decoration: none;">Logout</a>
                        </div>
                    </div>
                    <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Insert Products</button>
                    <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">List Products</button>
                    <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Products Details</button>
                </div>
                <div class="tab-content" id="v-pills-tabContent d-flex align-items-center justify-content-center">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card shadow" style="height: 600px">
                                    <div class="card-header">
                                        <h1 class="text-center">Import Products</h1>
                                    </div>
                                    <div class="card-body">
                                        <form action="product_getter.php" method="POST" enctype = "multipart/form-data">
                                            <div class="row g-3">
                                                <div class="col-md-6 d-flex">
                                                    <label for="" class="fw-bold d-flex align-items-center justify-content-center" style="width: 140px;">Product Name:</label>
                                                    <input type="text" name="name" class="w-75 form-control" required>
                                                </div>
                                                <div class="col-md-6 d-flex">
                                                    <label for="" class="fw-bold d-flex align-items-center justify-content-center" style="width: 150px;">Product Model:</label>
                                                    <input type="text" name="model" class="w-75 form-control" required>
                                                </div>
                                                <div class="col-md-3 d-flex">
                                                    <label for="" class="fw-bold d-flex align-items-center justify-content-center" style="width: 200px;">Product Category:</label>
                                                    <input type="text" name="category" class="w-50 form-control pe-5" required>
                                                </div>
                                                <div class="col-md-3 d-flex">
                                                    <label for="" class="fw-bold d-flex align-items-center justify-content-center" style="width: 135px;">Product Price:</label>
                                                    <input type="text" name="price" class="w-50 form-control" required>
                                                </div>
                                                <div class="col-md-3 d-flex">
                                                    <label for="" class="fw-bold d-flex align-items-center justify-content-center" style="width: 150px;">Product Brands:</label>
                                                    <input type="text" name="brands" class="w-50 form-control" required>
                                                </div>
                                                <div class="col-md-3 d-flex">
                                                    <label for="" class="fw-bold d-flex align-items-center justify-content-center" style="width: 135px;">Product Qty:</label>
                                                    <input type="number" name="qty" class="w-50 form-control" required>
                                                </div>
                                                <div class="col-md-12 text-center d-flex justify-content-center align-items-center">
                                                    <label for="" class="p-2 fw-bold">Product Image:</label>
                                                    <input type="file" name="image" class="form-control w-25" required>
                                                </div>
                                                <div class="col-md-12 text-center">
                                                    <label for="" class="fw-bold">Product Description:</label>
                                                    <textarea type="text" name="desc" class="form-control w-100" style="height: 230px" required></textarea>
                                                </div>
                                                <div class="col-md-12 mt-4 text-center">
                                                    <input type="submit" value="Submit" class="w-50 btn btn-outline-warning text-dark">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <div class='container'>
                        <div class='row'>
                            <?php
                                include "product_db.php";
                                $selectProductStmt = "SELECT * FROM product_tbl";
                                $productQuery = mysqli_query($conn, $selectProductStmt);

                                while($productShow = mysqli_fetch_assoc($productQuery)){
                                    echo "
                                        <div class='col-md-4'>
                                            <div class='card my-3'>
                                                <div class='card-body shadow'>
                                                    <form method='POST' action='product_getter_modify.php'>
                                                        <div class='row flex-column'>
                                                            <div class='col-md-12 text-center'>
                                                                <img src='$productShow[Product_Image]' width='200' height='150'>
                                                            </div>
                                                            <div class='col-md-12 input-group mb-1'>
                                                                <span class='input-group-text' id='inputGroup-sizing-sm'>Name</span>    
                                                                <input type='text' value='$productShow[Product_Name]' name='name' class='form-control'>
                                                            </div>
                                                            <div class='col-md-12 input-group mb-1'>
                                                                <span class='input-group-text' id='inputGroup-sizing-sm'>Model</span>  
                                                                <input type='text' value='$productShow[Product_Model]' name='model' class='form-control'>
                                                            </div>
                                                            <div class='col-md-12 input-group mb-1'>
                                                                <span class='input-group-text' id='inputGroup-sizing-sm'>Category</span>    
                                                                <input type='text' value='$productShow[Product_Category]' name='category' class='form-control'>
                                                            </div>
                                                            <div class='col-md-12 input-group mb-1'>
                                                                <span class='input-group-text' id='inputGroup-sizing-sm'>Price</span> 
                                                                <input type='text' value='$productShow[Product_Price]' name='price' class='form-control'>
                                                            </div>
                                                            <div class='col-md-12 input-group mb-1'>
                                                                <span class='input-group-text' id='inputGroup-sizing-sm'>Brands</span> 
                                                                <input type='text' value='$productShow[Product_Brands]' name='brands' class='form-control'>
                                                            </div>
                                                            <div class='col-md-12 input-group mb-1'>
                                                                <span class='input-group-text' id='inputGroup-sizing-sm'>Quantity</span>    
                                                                <input type='text' value='$productShow[Product_Quantity]' name='qty' class='form-control'>
                                                            </div>
                                                            <div class='col-md-12 input-group mb-1'>
                                                                <span class='input-group-text description-box' id='inputGroup-sizing-sm'>Desc</span>    
                                                                <textarea class='form-control' name='desc' rows='4'>$productShow[Product_Description]</textarea>
                                                            </div>
                                                            <div class='col-md-12 ms-1'>
                                                                <input type='hidden' name='id' value='$productShow[Product_ID]'>
                                                                <input type='submit' name='DELETE' value='DELETE'>
                                                                <input type='submit' name='UPDATE' value='UPDATE'>
                                                            </div>    
                                                        </div>
                                                    </form> 
                                                </div>
                                            </div>
                                        </div>     
                                    ";
                                }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
                
            </div>
        </nav>
    </div>
    
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>