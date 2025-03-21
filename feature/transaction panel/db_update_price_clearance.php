<?php 
include("../../src/database.php");

if (isset($_POST['btn-barangayClearance'])) {
    $barangayClearancePrice = $_POST['barangayClearance'] ?? '';

    if (!empty($barangayClearancePrice)) {
        $updateQueryClearance = "UPDATE document_types SET documentPrice = ? WHERE documentType = 3 ";
        $updateStmtClearance = $conn->prepare($updateQueryClearance);
        $updateStmtClearance->bind_param("i", $barangayClearancePrice);

        if ($updateStmtClearance->execute()) {
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
            echo json_encode(["success" => false, "message" => "Error executing query: " . $updateStmtClearance->error]);
        }

        $updateStmtClearance->close();
    } else {
        echo json_encode(["success" => false, "message" => "Price cannot be empty."]);
    }
}

$conn->close();
?>