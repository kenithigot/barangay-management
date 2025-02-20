<script src="../node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
<?php
session_start();
session_unset();
session_destroy();
?>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        Swal.fire({
            icon: "success",
            title: "Logout Successful!",
            text: "You have successfully logged out."
        }).then(() => {
            window.location.href = "../";
        });
    });
</script>

