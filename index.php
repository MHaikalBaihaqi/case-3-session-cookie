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

<?php
session_start();

// Periksa apakah pengguna sudah login atau belum, jika belum, redirect ke halaman login
if (!isset($_SESSION['email'])) {
    header('Location: login.php');
    exit;
}
?>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg justify-content-between w-100 position-fixed" style="top: 0px">
    <div class="container">
        <h1 class="navbar-brand" href="#" style="font-size: 30px; font-weight: 700">Case 3</h1>
    </div>
</nav>

<style>
    body {
        background-image: url('img/bgprofile.svg');
        background-position: top;
        background-size: contain;
        background-repeat: no-repeat;
    }
</style>

<body>
    <div class="container my-5 py-5 px-5">
        <div class="row px-5">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <h2 class="text-center mt-5 fw-bold">Profile</h2>
                <div class="text-center">
                    <img class="img-fluid pt-5 pb-3 text-center" src="img/avatar.svg" style="width: 200px; height: auto;" alt="" />
                </div>
                <h2 class="text-center">Fabian Greyson</h2>
                <p class="text-center">fabiangreyson@gmail.com</p>
                <form method="post">
                    <div class="mb-4 mt-5">
                        <label for="fullname" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="fullname" value="Fabian Greyson">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" value="fabiangreyson@gmail.com">
                    </div>
                    <div class="mb-4">
                        <label for="phonenumber" class="form-label">Phone Number</label>
                        <input type="text" class="form-control" id="phonenumber" value="08678910111213">
                    </div>
                    <div class="mb-4">
                        <label for="dateofbirth" class="form-label">Date of birth</label>
                        <input type="date" class="form-control" id="dateofbirth" value="2000-12-31">
                    </div>
                    <div class="mb-4">
                        <label for="languages" class="form-label">Languages</label>
                        <select class="form-select">
                            <option selected>English</option>
                            <option value="1">Indonesia</option>
                        </select>
                        <div class="text-center px-5">
                            <button class="btn btn-primary rounded-pill form-control mt-5 mb-4">Save changes</button> 
                        </div>
                        <div class="text-center px-5">
                            <button class="btn btn-primary rounded-pill form-control" type="submit" name="logout" >Logout</button> 
                        </div>
                    </div>
                </form>
                <?php
                if(isset($_POST['logout'])){
                    $_SESSION= [];
                    session_unset();
                    session_destroy();
                    header("Location: login.php");
                    exit();
                }
                ?>
            </div>
            <div class="col-lg-3"></div>
        </div>
    </div>
</body>

<!-- Footer -->
<footer class="text-white p-3 text-center justify-content-center">
    <p class="mb-0" style="font-size: 14px">Copyright ©2024 <strong>Case 3 PEMWEB</strong>. All rights reserved.</p>
</footer>