<?php
session_start();
session_unset(); 
session_destroy(); 

header("Location: sign-in.php"); 
exit();
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Logout Confirmation</title>
        <!-- Include Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body>
        <div class="container mt-5">
            <!-- Logout Button -->
            <a href="#" class="btn btn-danger" onclick="showLogoutConfirmation()">Logout</a>
        </div>

        <!-- Toast for Logout Confirmation -->
        <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 5">
            <div id="logoutToast" class="toast align-items-center text-bg-warning border-0" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="d-flex">
                    <div class="toast-body">
                        Are you sure you want to log out?
                    </div>
                    <button type="button" class="btn btn-success btn-sm me-2" onclick="logout()">Yes</button>
                    <button type="button" class="btn btn-secondary btn-sm" onclick="hideToast()">No</button>
                </div>
            </div>
        </div>

        <!-- Include Bootstrap JS Bundle (with Popper) -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

        <!-- JavaScript to Handle Toast Display -->
        <script>
            function showLogoutConfirmation() {
                var toast = new bootstrap.Toast(document.getElementById('logoutToast'));
                toast.show();
            }

            function hideToast() {
                var toast = new bootstrap.Toast(document.getElementById('logoutToast'));
                toast.hide();
            }

            function logout() {
                // Redirect to logout.php to destroy the session
                window.location.href = 'logout.php';
            }
        </script>
    </body>

    </html>