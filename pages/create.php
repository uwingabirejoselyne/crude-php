<?php
include '../db_connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $query = "INSERT INTO clients (name, email, password, address, phone) VALUES ('$name', '$email', '$hashed_password', '$address', '$phone')";

    if (mysqli_query($conn, $query)) {
        echo "<script>
                alert('Client successfully added!');
                window.location.href = '../pages/tables.php';
              </script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
    mysqli_close($conn);
} else {
    echo "Invalid request method.";
}
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" type="image/png" href="../assets/img/favicon.png">
        <title>Dashboard - Create Client</title>
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700,900" />
        <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
        <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
        <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
        <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.2.0" rel="stylesheet" />
    </head>

    <body class="g-sidenav-show bg-gray-100">
        <!-- Sidebar Section -->
        <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-radius-lg fixed-start ms-2  bg-white my-2" id="sidenav-main">
            <div class="sidenav-header">
                <i class="fas fa-times p-3 cursor-pointer text-dark opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
                <a class="navbar-brand px-4 py-3 m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
                    <img src="../assets/img/logo-ct-dark.png" class="navbar-brand-img" width="26" height="26" alt="main_logo">
                    <span class="ms-1 text-sm text-dark">Creative joselyne</span>
                </a>
            </div>
            <hr class="horizontal dark mt-0 mb-2">
            <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="../pages/dashboard.html">
                            <i class="material-symbols-rounded opacity-5">dashboard</i>
                            <span class="nav-link-text ms-1">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active bg-gradient-dark text-white" href="../pages/create.php">
                            <i class="material-symbols-rounded opacity-5">person_add</i>
                            <span class="nav-link-text ms-1">Create Client</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active bg-gradient-dark text-white" href="../pages/tables.php">
                            <i class="material-symbols-rounded opacity-5">table_view</i>
                            <span class="nav-link-text ms-1">Tables</span>
                        </a>
                    </li>
                    <li class="nav-item mt-3">
                        <h6 class="ps-4 ms-2 text-uppercase text-xs text-dark font-weight-bolder opacity-5">Account pages</h6>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="../pages/profile.html">
                            <i class="material-symbols-rounded opacity-5">person</i>
                            <span class="nav-link-text ms-1">Profile</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="../pages/sign-in.html">
                            <i class="material-symbols-rounded opacity-5">login</i>
                            <span class="nav-link-text ms-1">Sign In</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="../pages/sign-up.html">
                            <i class="material-symbols-rounded opacity-5">assignment</i>
                            <span class="nav-link-text ms-1">Sign Up</span>
                        </a>
                    </li>
                </ul>
            </div>

        </aside>

        <!-- Main Content Section -->
        <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
            <div class="container-fluid py-4 ">
                <h3 class="text-dark mb-4 text-center">Create New Client</h3>
                <div class="row">
                    <div class="">
                        <div class="card shadow-sm">
                            <div class="card-header bg-gradient-dark text-white">
                                <h6 class="text-white">Client Information</h6>
                            </div>
                            <div class="card-body ">
                                <form method="POST">
                                    <!-- Client Name -->
                                    <div class="mb-3 input-group input-group-outline mb-3">
                                        <input type="text" class="form-control w-full h-25 p-1" placeholder="Client Name" name="name" required>
                                    </div>
                                    <!-- Email -->
                                    <div class="mb-3 input-group input-group-outline mb-3">
                                        <input type="email" class="form-control" placeholder="email" name="email" required>
                                    </div>
                                    <!-- Phone Number -->
                                    <div class="mb-3 input-group input-group-outline mb-3">
                                        <input type="text" class="form-control" placeholder="password" name="password" required>
                                    </div>
                                    <!-- Address -->
                                    <div class="mb-3 input-group input-group-outline mb-3">
                                        <input type="text" class="form-control" placeholder="address" name="address">
                                    </div>
                                    <div class="mb-3 input-group input-group-outline mb-3">
                                        <input type="text" class="form-control" placeholder="phone" name="phone">
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <button type="submit" class="btn bg-gradient-dark">Create Client</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <!-- JavaScript Files -->
        <script src="../assets/js/core/popper.min.js"></script>
        <script src="../assets/js/core/bootstrap.min.js"></script>
        <script src="../assets/js/material-dashboard.min.js?v=3.2.0"></script>
    </body>

    </html>