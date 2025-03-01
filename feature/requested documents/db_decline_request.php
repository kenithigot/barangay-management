<?php
include('../../src/database.php');

if (isset($_POST['btn-declineRequest']) && isset($_POST["id"])) {
    $id = $_POST["id"];

    $queryDelete = "DELETE FROM resident_request_docs WHERE id = ?";
    
    $query_resultDelete = $conn->prepare($queryDelete);
    $query_resultDelete->bind_param("i", $id);
    
    if ($query_resultDelete->execute()){
        echo '<script>
            document.addEventListener("DOMContentLoaded", function() {
                Swal.fire({
                    icon: "success",
                    title: "Request Declined!",
                    text: "Requested document declined successfully."    
                }).then(() => {
                    window.location.href = "../requested documents/";
                });
            });
        </script>';
    } else{
        echo 'Error';
    };
    $query_resultDelete->close();
    $conn->close();
}
?>
