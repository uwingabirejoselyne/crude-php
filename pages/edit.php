<?php
// Include your database connection
include '../db_connect.php';

// Check if the 'id' parameter is set in the URL
if (!isset($_GET["id"])) {
    header("Location: ./tables.php");
    exit;
}

$id = $_GET["id"];

// Fetch the existing client details from the database
$sql = "SELECT * FROM clients WHERE id = $id";
$result = $conn->query($sql);

// Check if the client exists
if (!$result || $result->num_rows == 0) {
    header("Location: ./tables.php");
    exit;
}

// Fetch the client's data to prefill the form
$row = $result->fetch_assoc();
$name = $row['name'];
$email = $row['email'];
$phone = $row['phone'];
$address = $row['address'];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = !empty($_POST['name']) ? $_POST['name'] : $name;
    $email = !empty($_POST['email']) ? $_POST['email'] : $email;
    $phone = !empty($_POST['phone']) ? $_POST['phone'] : $phone;
    $address = !empty($_POST['address']) ? $_POST['address'] : $address;

    $sql = "UPDATE clients SET name = ?, email = ?, phone = ?, address = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssi", $name, $email, $phone, $address, $id);

    if ($stmt->execute()) {
        header("Location: ./tables.php");
        exit;
    } else {
        $errorMessage = "Error updating client: " . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <title>Dashboard - Edit Client</title>
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

    <!-- Main Content Section -->
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
        <div class="container-fluid py-4">
            <h3 class="text-dark mb-4 text-center">Edit Client</h3>
            <div class="row">
                <div class="">
                    <div class="card shadow-sm">
                        <div class="card-header bg-gradient-dark text-white">
                            <h6 class="text-white">Client Information</h6>
                        </div>
                        <div class="card-body">
                            <form method="POST">
                                <div class="mb-3 input-group input-group-outline mb-3">
                                    <input type="text" class="form-control" placeholder="Client Name" name="name" value="<?php echo $name; ?>" required>
                                </div>
                                <div class="mb-3 input-group input-group-outline mb-3">
                                    <input type="email" class="form-control" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
                                </div>
                                <div class="mb-3 input-group input-group-outline mb-3">
                                    <input type="password" class="form-control" placeholder="New Password" name="password" value="<?php echo $password; ?>">
                                </div>
                                <div class="mb-3 input-group input-group-outline mb-3">
                                    <input type="text" class="form-control" placeholder="Address" name="address" value="<?php echo $address; ?>">
                                </div>
                                <div class="mb-3 input-group input-group-outline mb-3">
                                    <input type="text" class="form-control" placeholder="Phone" name="phone" value="<?php echo $phone; ?>">
                                </div>
                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn bg-gradient-dark">Update Client</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/material-dashboard.min.js?v=3.2.0"></script>
</body>

</html>
