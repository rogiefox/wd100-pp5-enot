<?php
    session_start();
    include "user.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mighty Tools</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Navigation Bar -->
    <?php
        include "navbar.php"
    ?>
    <!-- Start of Body Content -->
    <!-- 1st Content -->
    <div class="container-fluid" style="background-color: #DDDDDD;">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center ms-5">
                <div class="col-md-3 d-flex">
                    <div class="d-flex justify-content-center align-items-center" style="font-size: 20px;"><i class="fa-solid fa-piggy-bank"></i></div>
                    <div class="ms-3 mt-3">
                        <h5 style="font-size: 15px;">EVERYDAY LOW PRICES</h5>
                        <p style="font-size: 10px;">the best you can find</p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="d-flex justify-content-center align-items-center" style="font-size: 20px;"><i class="fa-solid fa-map-location-dot"></i></div>
                    <div class="ms-3 mt-3">
                        <h5 style="font-size: 15px;">PERSONAL ITEM PICKUP</h5>
                        <p style="font-size: 10px;">convenient in-store pickup</p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="d-flex justify-content-center align-items-center" style="font-size: 20px;"><i class="fa-solid fa-headset"></i></div>
                    <div class="ms-3 mt-3">
                        <h5 style="font-size: 15px;">INSTANT CHAT SUPPORT</h5>
                        <p style="font-size: 10px;">contact us via FB or Viber</p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="d-flex justify-content-center align-items-center" style="font-size: 20px;"><i class="fa-solid fa-user-lock"></i></div>
                    <div class="ms-3 mt-3">
                        <h5 style="font-size: 15px;">100% TRUSTED SELLER</h5>
                        <p style="font-size: 10px;">5 out of 5 star 400+ reviews</p>
                    </div>
                </div>
            </div>
        </div>    
    </div>
    <!-- End of 1st Content -->
    <!-- 2nd Content -->
    <div class="container">
        <div class="row mt-1 g-4">
            <div class="col-md-3">
                <a href="brand_makita.php"><img src="img/Brand_Makita.jpg" alt="" class="w-100 h-100 rounded"></a>   
            </div>
            <div class="col-md-3">
                <a href="brand_bosch.php"><img src="img/Brand_Bosch.jpg" alt="" class="w-100 h-100 rounded "></a>
            </div>
            <div class="col-md-6">
                <a href="brand_dewalt.php"><img src="img/Brand_Dewalt.jpg" alt="" class="h-100 w-100 rounded"></a>
            </div>
            <div class="col-md-6">
                <a href="brand_ingco.php"><img src="img/Brand_Ingco.jpg" alt="" class="w-100 h-100 rounded"></a>
            </div>
            <div class="col-md-3">
                <a href="brand_dca.php"><img src="img/Brand_DCA.jpg" alt="" class="w-100 h-100 rounded"></a>
            </div>
            <div class="col-md-3">
                <a href="brand_lutos.php"><img src="img/Brand_Lotus.jpg" alt="" class="h-100 w-100 rounded"></a>  
            </div>
        </div>   
    </div>
    <br>
    <!-- End of 2nd Content -->
    <!-- 3rd Content -->
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="text-end p-3 d-flex flex-column justify-content-center align-items-end" style="background-color: #2F479D; height: 300px;">
                    <h3 class="text-white fw-bolder me-3">CORDLESS TOOLS</h3>
                    <div class="pe-5">
                        <a href="#" class="btn btn-outline-warning me-3">SHOP NOW</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
                    <div class="carousel-inner">
                        <!-- 1st Slide -->
                        <div class="carousel-item active">
                            <div class="cards-wrapper d-flex g-5">
                                <div class="card border-0" id="carousel_img">
                                    <a href="#"><img src="featured_img/Cordless/Cordless Hammer Drill DCD706B.jpg" class="card-img-top w-100 h-100" alt="..." ></a>
                                    <div class="card-body">
                                        <h5 class="card-text">Hammer Drill</h5>
                                        <div class="card-footer bg-transparent text-start p-0 border-white d-block justify-content-between">
                                            <p class="fw-bolder text-danger">
                                                &#8369; 1,500.00 
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card border-0">
                                    <a href="#"><img src="featured_img/Cordless/Cordless Hammer Drill GSB18V-1330CB14.jpg" class="card-img-top w-100 h-100" alt="..."></a>
                                    <div class="card-body">
                                        <h5 class="card-text">Hammer Drill</h5>
                                        <div class="card-footer bg-transparent text-start p-0 border-white d-block justify-content-between">
                                            <p class="fw-bolder text-danger">
                                                &#8369; 2,500.00 
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card border-0">
                                    <a href="#"><img src="featured_img/Cordless/Cordless Hammer Driver-Drill Kit PH06R1.jpg" class="card-img-top w-100 h-100" alt="..."></a>
                                    <div class="card-body">
                                        <h5 class="card-text">Hammer Drill</h5>
                                        <div class="card-footer bg-transparent text-start p-0 border-white d-block justify-content-between">
                                            <p class="fw-bolder text-danger">
                                                &#8369; 1,500.00 
                                            </p>
                                        </div>
                                    </div>
                                </div>   
                            </div>    
                        </div>
                        <!-- End of 1st Slide -->
                        <!-- 2nd Slide -->
                        <div class="carousel-item">
                            <div class="cards-wrapper d-flex g-5">
                                <div class="card border-0" id="carousel_img">
                                    <a href="#"><img src="featured_img/Cordless/Cordless Jig Saw DCS331B.jpg" class="card-img-top w-100 h-100" alt="..." ></a>
                                    <div class="card-body">
                                        <h5 class="card-text">Jig Saw</h5>
                                        <div class="card-footer bg-transparent text-start p-0 border-white d-block justify-content-between">
                                            <p class="fw-bolder text-danger">
                                                &#8369; 1,500.00 
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card border-0">
                                    <a href="#"><img src="featured_img/Cordless/Cordless Jig Saw Kit VJ04R1.jpg" class="card-img-top w-100 h-100" alt="..."></a>
                                    <div class="card-body">
                                        <h5 class="card-text">Jig Saw</h5>
                                        <div class="card-footer bg-transparent text-start p-0 border-white d-block justify-content-between">
                                            <p class="fw-bolder text-danger">
                                                &#8369; 2,500.00 
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card border-0">
                                    <a href="#"><img src="featured_img/Cordless/Cordless Jig Saw VJ05Z.jpg" class="card-img-top w-100 h-100" alt="..."></a>
                                    <div class="card-body">
                                        <h5 class="card-text">Jig Saw</h5>
                                        <div class="card-footer bg-transparent text-start p-0 border-white d-block justify-content-between">
                                            <p class="fw-bolder text-danger">
                                                &#8369; 1,500.00 
                                            </p>
                                        </div>
                                    </div>
                                </div>   
                            </div>    
                        </div>
                        <!-- End of 2nd Slide -->
                        <!-- 3rd Slide -->
                        <div class="carousel-item">
                            <div class="cards-wrapper d-flex g-5">
                                <div class="card border-0" id="carousel_img">
                                    <a href="#"><img src="featured_img/Cordless/Cordless Planer DCP580B.jpg" class="card-img-top w-100 h-100" alt="..." ></a>
                                    <div class="card-body">
                                        <h5 class="card-text">Planer</h5>
                                        <div class="card-footer bg-transparent text-start p-0 border-white d-block justify-content-between">
                                            <p class="fw-bolder text-danger">
                                                &#8369; 1,500.00 
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card border-0">
                                    <a href="#"><img src="featured_img/Cordless/Cordless Planer GHO12V-08N.jpg" class="card-img-top w-100 h-100" alt="..."></a>
                                    <div class="card-body">
                                        <h5 class="card-text">Planer</h5>
                                        <div class="card-footer bg-transparent text-start p-0 border-white d-block justify-content-between">
                                            <p class="fw-bolder text-danger">
                                                &#8369; 7,500.00 
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card border-0">
                                    <a href="#"><img src="featured_img/Cordless/Cordless Planer XPK01Z.jpg" class="card-img-top w-100 h-100" alt="..."></a>
                                    <div class="card-body">
                                        <h5 class="card-text">Planer</h5>
                                        <div class="card-footer bg-transparent text-start p-0 border-white d-block justify-content-between">
                                            <p class="fw-bolder text-danger">
                                                &#8369; 3,500.00 
                                            </p>
                                        </div>
                                    </div>
                                </div>   
                            </div>    
                        </div>
                        <!-- End of 3rd Slide -->
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- 4th content -->
    <!-- Corless & Corded Category Carousel-->
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div id="carouselCord" class="carousel slide" data-bs-ride="true">
                    <div class="carousel-inner">
                        <!-- 1st Slide -->
                        <div class="carousel-item active">
                            <div class="cards-wrapper d-flex g-5">
                                <div class="card border-0" id="carousel_img">
                                    <a href="#"><img src="featured_img/Corded/Hammer Drill DWE5010.jpg" class="card-img-top w-100 h-100" alt="..." ></a>
                                    <div class="card-body">
                                        <h5 class="card-text">Hammer Drill</h5>
                                        <div class="card-footer bg-transparent text-start p-0 border-white d-block justify-content-between">
                                            <p class="fw-bolder text-danger">
                                                &#8369; 1,500.00 
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card border-0">
                                    <a href="#"><img src="featured_img/Corded/Hammer Drill HD18-2.jpg" class="card-img-top w-100 h-100" alt="..."></a>
                                    <div class="card-body">
                                        <h5 class="card-text">Hammer Drill</h5>
                                        <div class="card-footer bg-transparent text-start p-0 border-white d-block justify-content-between">
                                            <p class="fw-bolder text-danger">
                                                &#8369; 2,500.00 
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card border-0">
                                    <a href="#"><img src="featured_img/Corded/Impact Drill AZJ02-13.jpg" class="card-img-top w-100 h-100" alt="..."></a>
                                    <div class="card-body">
                                        <h5 class="card-text">Impact Drill</h5>
                                        <div class="card-footer bg-transparent text-start p-0 border-white d-block justify-content-between">
                                            <p class="fw-bolder text-danger">
                                                &#8369; 1,500.00 
                                            </p>
                                        </div>
                                    </div>
                                </div>   
                            </div>    
                        </div>
                        <!-- End of 1st Slide -->
                        <!-- 2nd Slide -->
                        <div class="carousel-item">
                            <div class="cards-wrapper d-flex g-5">
                                <div class="card border-0" id="carousel_img">
                                    <a href="#"><img src="featured_img/Corded/Impact Drill ID6808.jpg" class="card-img-top w-100 h-100" alt="..." ></a>
                                    <div class="card-body">
                                        <h5 class="card-text">Impact Drill</h5>
                                        <div class="card-footer bg-transparent text-start p-0 border-white d-block justify-content-between">
                                            <p class="fw-bolder text-danger">
                                                &#8369; 1,500.00 
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card border-0">
                                    <a href="#"><img src="featured_img/Corded/Impact Drill LTHD16RE.jpg" class="card-img-top w-100 h-100" alt="..."></a>
                                    <div class="card-body">
                                        <h5 class="card-text">Impact Drill</h5>
                                        <div class="card-footer bg-transparent text-start p-0 border-white d-block justify-content-between">
                                            <p class="fw-bolder text-danger">
                                                &#8369; 2,500.00 
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card border-0">
                                    <a href="#"><img src="featured_img/Corded/Jig Saw JS470E.jpg" class="card-img-top w-100 h-100" alt="..."></a>
                                    <div class="card-body">
                                        <h5 class="card-text">Jig Saw</h5>
                                        <div class="card-footer bg-transparent text-start p-0 border-white d-block justify-content-between">
                                            <p class="fw-bolder text-danger">
                                                &#8369; 1,500.00 
                                            </p>
                                        </div>
                                    </div>
                                </div>   
                            </div>    
                        </div>
                        <!-- End of 2nd Slide -->
                        <!-- 3rd Slide -->
                        <div class="carousel-item">
                            <div class="cards-wrapper d-flex g-5">
                                <div class="card border-0" id="carousel_img">
                                    <a href="#"><img src="featured_img/Corded/Marble Cutter AZE110.jpg" class="card-img-top w-100 h-100" alt="..." ></a>
                                    <div class="card-body">
                                        <h5 class="card-text">Marble Cutter</h5>
                                        <div class="card-footer bg-transparent text-start p-0 border-white d-block justify-content-between">
                                            <p class="fw-bolder text-danger">
                                                &#8369; 1,500.00 
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card border-0">
                                    <a href="#"><img src="featured_img/Corded/Router DW618.jpg" class="card-img-top w-100 h-100" alt="..."></a>
                                    <div class="card-body">
                                        <h5 class="card-text">Router</h5>
                                        <div class="card-footer bg-transparent text-start p-0 border-white d-block justify-content-between">
                                            <p class="fw-bolder text-danger">
                                                &#8369; 7,500.00 
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card border-0">
                                    <a href="#"><img src="featured_img/Corded/Sander BO6030.jpg" class="card-img-top w-100 h-100" alt="..."></a>
                                    <div class="card-body">
                                        <h5 class="card-text">Sander</h5>
                                        <div class="card-footer bg-transparent text-start p-0 border-white d-block justify-content-between">
                                            <p class="fw-bolder text-danger">
                                                &#8369; 3,500.00 
                                            </p>
                                        </div>
                                    </div>
                                </div>   
                            </div>    
                        </div>
                        <!-- End of 3rd Slide -->
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselCord" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselCord" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-md-6">
                <div class="p-3 d-flex flex-column justify-content-center align-items-start" style="background-color: #2F479D; height: 300px;">
                    <h3 class="text-white fw-bolder ms-3">CORDED TOOLS</h3>
                    <div class="ps-5">
                        <a href="#" class="btn btn-outline-warning ms-3">SHOP NOW</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Corded Category -->

    <!-- Footer -->
    <?php
        include "footer.php"
    ?>

    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>