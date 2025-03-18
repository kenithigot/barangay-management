<?php
include('../../src/database.php');

if (isset($_POST['btn-resolved']) && isset($_POST["id"])) {
    $id = $_POST["id"];

    date_default_timezone_set('Asia/Manila');
    // Set date
    $dismissedCase = date('m-d-Y h:i A');

    $queryDelete = "UPDATE blotter_record SET blotter_status = 'Resolved',caseTime = ? WHERE id = ?";

    $query_resultDelete = $conn->prepare($queryDelete);
    $query_resultDelete->bind_param("si", $dismissedCase, $id);

    if ($query_resultDelete->execute()) {
        echo '<script>
            document.addEventListener("DOMContentLoaded", function() {
                Swal.fire({
                    icon: "success",
                    title: "Case Resolved!",
                    text: "Case Resolved successfully."    
                }).then(() => {
                    window.location.href = "../blotter records/";
                });
            });
        </script>';
    } else {
        echo 'alert("Error")';
    }
    $query_resultDelete->close();
    $conn->close();
}
