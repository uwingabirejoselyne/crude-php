<?php
include '../db_connect.php';
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
        <link rel="icon" type="image/png" href="../assets/img/favicon.png">
        <title>
            Dashboard by Creative joselyne
        </title>
        <!--     Fonts and icons     -->
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700,900" />
        <!-- Nucleo Icons -->
        <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
        <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
        <!-- Font Awesome Icons -->
        <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
        <!-- Material Icons -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
        <!-- CSS Files -->
        <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.2.0" rel="stylesheet" />
    </head>

    <body class="g-sidenav-show  bg-gray-100">
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
                        <a class="nav-link active bg-gradient-dark text-white" href="../pages/tables.html">
                            <i class="material-symbols-rounded opacity-5">table_view</i>
                            <span class="nav-link-text ms-1">Users</span>
                        </a>
                    </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="../pages/billing.html">
            <i class="material-symbols-rounded opacity-5">receipt_long</i>
            <span class="nav-link-text ms-1">Billing</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="../pages/virtual-reality.html">
            <i class="material-symbols-rounded opacity-5">view_in_ar</i>
            <span class="nav-link-text ms-1">Virtual Reality</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="../pages/rtl.html">
            <i class="material-symbols-rounded opacity-5">format_textdirection_r_to_l</i>
            <span class="nav-link-text ms-1">RTL</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="../pages/notifications.html">
            <i class="material-symbols-rounded opacity-5">notifications</i>
            <span class="nav-link-text ms-1">Notifications</span>
          </a>
        </li>
                </ul>
            </div>

        </aside>
        <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
            <!-- Navbar -->
            <nav class="navbar navbar-main navbar-expand-lg px-0 mx-3 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
                <div class="container-fluid py-1 px-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
                            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Tables</li>
                        </ol>
                    </nav>
                    <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4 d-flex justify-content-end" id="navbar">

                        <ul class="navbar-nav d-flex align-items-center  justify-content-end">
                            <li class="nav-item ">
                                <a class="btn btn-outline-secondary btn-sm mb-0 me-3 " target="_blank" href="../pages/create.php">Add Client</a>
                            </li>
                            <li>
         <a class="dropdown-item" href="../pages/profile.html">
            <i class="fas fa-user me-2"></i>
        </a>
    </li>
    <li>
        <a class="dropdown-item" href="./logout.php">
            <i class="fas fa-sign-out-alt me-2"></i> Logout
        </a>
    </li>
                            

                        </ul>
                        </div>
                        </div>
            </nav>
            <!-- End Navbar -->
            <div class="container-fluid py-2">
                <div class="row">
                    <div class="col-12">
                        <div class="card my-4">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3">
                                    <h6 class="text-white text-capitalize ps-3">Clients table</h6>
                                </div>
                            </div>
                            <div class="card-body px-0 pb-2">
                                <div class="table-responsive p-0">
                                    <table class="table align-items-center mb-0">
                                        <thead>
                                            <tr>

                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id</th>
                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Email</th>
                                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">address</th>

                                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">status</th>
                                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">phone</th>
                                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">createdAt</th>
                                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                                                <th class="text-secondary opacity-7"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                if (!$conn) {
                    die("Connection failed: " . $conn->error);
                }
                $sql = "SELECT * FROM clients";
                $result = $conn->query($sql);
                if (!$result) {
                    die("Connection failed: " . $conn->error);
                }
                while ($row = $result->fetch_assoc()) {
                   

                    echo '
                           <tr>
                                                <td>
                                                    <p class="text-xs font-weight-bold mb-0">' . $row['id'] . '</p>
                                                </td>
                                                <td>
                                                                                                      <p class="text-xs font-weight-bold mb-0">' . $row['name'] . '</p>
                                                </td>
                                                <td>
                                                                                                      <p class="text-xs font-weight-bold mb-0">' . $row['email'] . '</p>
                                                </td>
                                               
                                                <td>
                                                   <p class="text-xs font-weight-bold mb-0">' . $row['address'] . '</p>
                                                </td>
                                                <td class="align-middle text-center text-sm">
                                                    <span class="badge badge-sm bg-gradient-success">' . $row['status'] . '</span>
                                                </td>
                                                <td class="align-middle text-center">
                                                                                                       <p class="text-xs font-weight-bold mb-0">' . $row['phone'] . '</p>

                                                </td>
                                                <td class="align-middle text-center">
                                                                                                       <p class="text-xs font-weight-bold mb-0">' . $row['created_at'] . '</p>

                                                </td>
                                                <td class="align-middle text-center text-sm text-white">
                                                    <a href="javascript:;" class="text-white font-weight-bold text-xs badge badge-sm bg-gradient-success" data-toggle="tooltip" data-original-title="Edit user">  Edit </a>

                                            <a href="delete.php?id=' . $row['id'] . '" class="text-white font-weight-bold text-xs badge badge-sm bg-gradient-primary" data-toggle="tooltip" data-original-title="Edit user" 
    onclick="return confirm(\'Are you sure you want to delete this item?\');">Delete</a>
                                                </td>
                                            </tr>
                    ';
                }
                ?>







                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </main>

        <!--   Core JS Files   -->
        <script src="../assets/js/core/popper.min.js"></script>
        <script src="../assets/js/core/bootstrap.min.js"></script>
        <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
        <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
        <script>
            var win = navigator.platform.indexOf('Win') > -1;
            if (win && document.querySelector('#sidenav-scrollbar')) {
                var options = {
                    damping: '0.5'
                }
                Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
            }
        </script>
        <!-- Github buttons -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>
        <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
        <script src="../assets/js/material-dashboard.min.js?v=3.2.0"></script>
    </body>

    </html>