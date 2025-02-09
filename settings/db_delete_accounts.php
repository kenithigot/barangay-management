<?php
include("../src/database.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Check if the request comes from the AJAX call
    if (isset($_POST['btn-delete'])) {
        // Prepare and execute the delete query
        $query = $conn->prepare("DELETE FROM admin_staff_account WHERE user_role != 1");

        if (!$query) {
            echo json_encode(array("success" => false, "message" => "Error in Prepare Statement: " . $conn->error));
            exit();
        }

        if ($query->execute()) {
            echo json_encode(["success" => true]);
            exit();
        } else {
            echo json_encode(["sucess" => false]);
        }
    }
}
?>
