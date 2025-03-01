<?php
include('../../src/database.php');

if (isset($_POST['btn-approveRequest']) && isset($_POST["id"])) {
    $id = $_POST["id"];

    // Set the time when the print is approve
    date_default_timezone_set('Asia/Manila'); 
    $approvePrintDocs = date('d-F-Y g:i:s A');

    $query = "UPDATE resident_request_docs SET requestStatus = 'Approve', printrequest_docs = ? WHERE id = ?";
    
    $query_result = $conn->prepare($query);
    $query_result->bind_param("si",$approvePrintDocs,$id);
    
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
