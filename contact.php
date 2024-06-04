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
        <div class="container-fluid">
        <div class="w-90 mb-2">
            <section id="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1960.9207173991501!2d124.01450524803116!3d10.591567727165321!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a9b18062ce7569%3A0x3f314954e6c86136!2s646%20Gomez%2C%20Carmen%2C%20Cebu!5e0!3m2!1sen!2sph!4v1717510647133!5m2!1sen!2sph" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </section>
        </div>
        </div>
        <div class="container shadow mb-3 px-4 pt-2">
            <div class="row">
                <div class="col-md-6">
                    <div>
                        <h1>Contact US</h1>
                        <p class="mt-4">Feel free to drop us a line via this contact form, or visit our store. MIGTHY TOOLS is always looking for feedbacks and comments from you to improve our service quality. Our working hours is from 8:00AM to 5:00PM from Monday to Saturday (except holidays).</p>
                    </div>
                    <div class="d-flex mt-5">
                        <div>
                            <h3><i class="fa-solid fa-location-dot"></i> Address</h3>
                            <p class="text-break">646 gomez st. <br>Brgy. Cogon West <br> Carmen Cebu</p>
                        </div>
                        <div class="ms-5 ps-5">
                            <h3><i class="fa-regular fa-clock"></i> Opening Hours</h3>
                            <p>Monday to Saturday: 08:00AM - 5:00PM</p>
                        </div>
                    </div>
                    <div class="d-flex mt-4">
                        <div>
                            <h3><i class="fa-solid fa-phone"></i> Phone</h3>
                            <p>+63 918-693-4954 <br> +01 335 633 77</p>
                        </div>
                        <div class="ms-5 ps-5">
                            <h3><i class="fa-solid fa-envelope"></i> Email</h3>
                            <p>mightytools@gmail.com</p>
                        </div>
                    </div> 
                </div>
                <div class="col-md-6">
                    <h3>Get on touch</h3>
                    <div class="d-flex flex-column row-gap-4 mt-4 mb-3">
                        <input type="text" placeholder="First Name and Last Name" class="form-control shadow" style="height: 50px;">
                        <input type="text" placeholder="Email Address" class="form-control shadow" style="height: 50px;">
                        <input type="text" placeholder="Mobile Phone Pumber" class="form-control shadow" style="height: 50px;">
                        <textarea placeholder="Input Your Message" class="form-control shadow" style="height: 85px;"></textarea>
                        <input type="button" class="btn btn-outline-warning text-dark" value="submit" style="width: 100px;">
                    </div>    
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