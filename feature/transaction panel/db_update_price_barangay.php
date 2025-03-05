<?php 
include("../../src/database.php");

if (isset($_POST['btn-updateBarCert'])) {
    $barangayCertPrice = $_POST['barangayCertPrice'] ?? '';

    if (!empty($barangayCertPrice)) {
        $updateQueryBarangay = "UPDATE document_types SET documentPrice = ? WHERE documentType = 1";
        $updateStmtBarangay = $conn->prepare($updateQueryBarangay);
        $updateStmtBarangay->bind_param("i", $barangayCertPrice);

        if ($updateStmtBarangay->execute()) {
            echo '<script>
                document.addEventListener("DOMContentLoaded", function() {
                    Swal.fire({
                        icon: "success",
                        title: "Document Price updated!",
                        text: "Document Price has been updated successfully."    
                    }).then(() => {
                        window.location.href = "../transaction panel/";
                    });
                });
            </script>';
        } else {
            echo json_encode(["success" => false, "message" => "Error executing query: " . $updateStmtBarangay->error]);
        }

        $updateStmtBarangay->close();
    } else {
        echo json_encode(["success" => false, "message" => "Price cannot be empty."]);
    }
}

$conn->close();
?>