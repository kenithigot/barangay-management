<?php 
include("../../src/database.php");

if (isset($_POST['btn-updateIndigency'])) {
    $certificateIndigencyPrice = $_POST['certificateIndigency'] ?? '';

    if (!empty($certificateIndigencyPrice)) {
        $updateQueryIndigency = "UPDATE document_types SET documentPrice = ? WHERE documentType = 2";
        $updateStmtIndigency = $conn->prepare($updateQueryIndigency);
        $updateStmtIndigency->bind_param("i", $certificateIndigencyPrice);

        if ($updateStmtIndigency->execute()) {
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
            echo json_encode(["success" => false, "message" => "Error executing query: " . $updateStmtIndigency->error]);
        }

        $updateStmtIndigency->close();
    } else {
        echo json_encode(["success" => false, "message" => "Price cannot be empty."]);
    }
}

$conn->close();
?>