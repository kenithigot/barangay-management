<?php
include('../../src/database.php');

if (isset($_POST['btn-approveRequest']) && isset($_POST["id"])) {
    $id = $_POST["id"];

    $query = "UPDATE resident_request_docs SET requestStatus = 'Approve' WHERE id = ?";
    
    $query_result = $conn->prepare($query);
    $query_result->bind_param("i", $id);
    
    if ($query_result->execute()){
        echo '<script>
            document.addEventListener("DOMContentLoaded", function() {
                Swal.fire({
                    icon: "success",
                    title: "Request Approved!",
                    text: "Requested document aprroved successfully."    
                }).then(() => {
                    window.location.href = "../requested documents/";
                });
            });
        </script>';
    } else{
        echo 'Error';
    };
    $query_result->close();
    $conn->close();
}
?>
