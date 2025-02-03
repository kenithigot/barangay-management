<?php
include("../src/database.php");

if (isset($_POST['btn-delete'])) {
    echo '<script>
        document.addEventListener("DOMContentLoaded", function() {
            Swal.fire({
                icon: "warning",
                title: "Are you sure?",
                text: "This action will delete all accounts except Admin accounts.",
                showCancelButton: true,
                confirmButtonColor: "#d33",
                cancelButtonColor: "#3085d6",
                confirmButtonText: "Yes"
            }).then((result) => {
                if (result.isConfirmed) {
                    fetch("db_delete_accounts.php", {
                        method: "POST",
                        headers: { "Content-Type": "application/x-www-form-urlencoded" },
                        body: "confirm_delete=true"
                    }).then(response => response.text()).then(data => {
                        Swal.fire({
                            icon: "success",
                            title: "Records Deleted",
                            text: "All not admin accounts are deleted."
                        }).then(() => {
                            window.location.href = "add account.php";
                        });
                    }).catch(error => {
                        Swal.fire({
                            icon: "error",
                            title: "Deletion Failed",
                            text: "An error occurred while deleting records."
                        });
                    });
                }
            });
        });
    </script>';
}

if (isset($_POST['confirm_delete'])) {
    $query = $conn->prepare("DELETE FROM admin_staff_account WHERE user_role != 1");

    if (!$query) {
        echo "Error in Prepare Statement" . $conn->error;
        exit();
    }

    if ($query->execute()) {
        echo "success";
    } else {
        echo "error";
    }
}
?>