<?php 
include("../../src/database.php");

if (isset($_POST['btn-businessClearance'])) {
    $businessClearancePrice = $_POST['businessClearance'] ?? '';

    if (!empty($businessClearancePrice)) {
        $updateQueryBusiness = "UPDATE document_types SET documentPrice = ? WHERE documentType = 3 ";
        $updateStmtBusiness = $conn->prepare($updateQueryBusiness);
        $updateStmtBusiness->bind_param("i", $businessClearancePrice);

        if ($updateStmtBusiness->execute()) {
            echo '<script>
                document.addEventListener("DOMContentLoaded", function() {
                    Swal.fire({
                        icon: "success",
                        title: "Document Price updated!",
                        text: "Document Price has been updated successfully."    
                    }).then(() => {
                        window.location.href = "../payment/";
                    });
                });
            </script>';
        } else {
            echo json_encode(["success" => false, "message" => "Error executing query: " . $updateStmtBusiness->error]);
        }

        $updateStmtBusiness->close();
    } else {
        echo json_encode(["success" => false, "message" => "Price cannot be empty."]);
    }
}

$conn->close();
?>