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
    <div class="container-fluid" style="background-color: #D00000;">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center ms-5">
                <div class="col-md-3 d-flex text-white">
                    <div class="d-flex justify-content-center align-items-center" style="font-size: 20px;"><i class="fa-solid fa-piggy-bank"></i></div>
                    <div class="ms-3 mt-3">
                        <h5 style="font-size: 15px;">EVERYDAY LOW PRICES</h5>
                        <p style="font-size: 10px;">the best you can find</p>
                    </div>
                </div>
                <div class="col-md-3 d-flex text-white">
                    <div class="d-flex justify-content-center align-items-center" style="font-size: 20px;"><i class="fa-solid fa-map-location-dot"></i></div>
                    <div class="ms-3 mt-3">
                        <h5 style="font-size: 15px;">PERSONAL ITEM PICKUP</h5>
                        <p style="font-size: 10px;">convenient in-store pickup</p>
                    </div>
                </div>
                <div class="col-md-3 d-flex text-white">
                    <div class="d-flex justify-content-center align-items-center" style="font-size: 20px;"><i class="fa-solid fa-headset"></i></div>
                    <div class="ms-3 mt-3">
                        <h5 style="font-size: 15px;">INSTANT CHAT SUPPORT</h5>
                        <p style="font-size: 10px;">contact us via FB or Viber</p>
                    </div>
                </div>
                <div class="col-md-3 d-flex text-white">
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
    <!-- 2nd content -->
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">
                <h1 class="fw-bold text-center">ABOUT US</h1>
                <p class="p-3" style="background-color: #F2F2F2;">Whether you’re looking for power tools, batteries or accessories, we’ve got you covered. For top brands at great prices, MIGTHY TOOLS has everything you need to get the job done. And with same day delivery (12 noon cut off) for available huge range of stock items, you get your tools when you need them.</p>
            </div>
            <div class="col-md-6 text-center mt-4 shadow">
                <img src="img/mission.png" alt="" height="250px" width="250px" class=>
                <p class="fw-bold">To be a premium globally competitive company with a clear goal of being the most comprehensive tool provider in our business segment</p>
            </div>
            <div class="col-md-6 text-center mt-4 shadow">
                <img src="img/vision.png" alt="" height="250px" width="250px">
                <p class="fw-bold">To provide and deliver the best priced, quality hardware and tools for all our customers</p>
            </div>
            <div class="col-md-12 mt-5">
                <p class="p-4 text-white" style="background-color: #253139;">Our Group of Companies possess over 70 years of experience in tools and hardware, and in the process has become one of the Philippines largest tools distributor - and we're still growing. Browse our website to find the best deals on the brands you love – delivered direct to your door. Or if you know what you're looking for, just use the search box on top. </p>
            </div>
        </div>
    </div>




    <!-- Footer -->
    <?php
        include "footer.php"
    ?>

    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>