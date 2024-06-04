<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log-in Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="user_login_getter.php" method="POST">
        <div class="container min-vh-100 d-flex justify-content-center">
            <div class="row">
                <div class="col-md-12 d-flex flex-column align-items-center justify-content-center">
                    <div class="card w-100 rounded shadow">
                        <div class="card-header d-flex align-items-center justify-content-center" style="background-color: #0e2a8e;">
                            <img src="img/logo.png" alt="" height="250" width="400">
                        </div>
                        <div class="card-body">
                            <h4 class="text-center">MEMBER LOGIN</h4>
                            <div class="form-group d-flex align-items-center justify-content-center pb-2">
                                <input type="text" class="form-control w-100" name="username" placeholder="Username">
                            </div>
                            <div class="form-group d-flex align-items-center justify-content-center">
                                <input type="password" class="form-control w-100" name="password" placeholder="Password">
                            </div>
                            <div class="form-group d-flex align-items-center justify-content-center pt-2">
                                <input type="submit" value="LOGIN" class="form-control w-50 btn btn-outline-warning text-dark">
                            </div>
                                <p class="text-center mt-2" style="font-size: x-small;">Forgot Password?<a href="#">Click Here</a></p>
                                <hr>
                            <div class="form-group d-flex align-items-center justify-content-center">
                                <input type="submit" value="REGISTER" class="form-control w-50 text-white" style="background-color: #006aad;">
                            </div>     
                        </div>   
                    </div>                  
                </div>
            </div>
        </div>
    </form>    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>