<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" />

    <title>Case3Pemweb</title>
</head>

<body>
    <div class="container custom-container">
        <div class="row">
            <div class="col-lg-7">
                <img class="img-fluid w-100" src="img/illustration.svg" alt="" />
            </div>
            <div class="col-lg-1"></div>

            <!-- Login Form -->

            <div class="col-lg-4 d-flex align-items-center" id="login-box">
                <div class="container">
                    <h1 class="text-center mt-2 fw-bold">Login to Case 3</h1>
                    <p class="text-center">Login to your account with email and password</p>
                    <div id="dialog"></div>
                    <form action="" method="post" role="form" class="p-2" id="login-form">
                        <div class="form-group mt-2">
                            <label for="inputemail" class="form-label">Email</label>
                            <input type="text" name="inputemail" class="form-control" id="inputemail" placeholder="Enter your email" required>
                        </div>
                        <div class="form-group mt-3">
                            <label for="inputpassword" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="inputpassword" placeholder="Enter your password" required>
                        </div>
                        <div class="form-group mt-4">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="rem" class="custom-control-input" id="customCheck">
                                <label for="customCheck" class="custom-control-label" style="font-size: 14px;" onclick="setcookie()">Remember Me</label>
                                
                            </div>
                        </div>
                        <div class="form-group mt-5 px-5">
                            <input type="submit" name="login" id="login" value="Login" class="btn btn-primary form-control rounded-pill"> 
                        </div>
                    </form>
                    <!-- JavaScript -->
                    <script src="login.js"></script>
                </div>
            </div>
        </div>
    </div>

</body>

</html>