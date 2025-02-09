<?php 
include("../src/database.php"); 

if (isset($_POST['id'])) {
    $userId = $_POST['id']; 

    // Prepare statement
    $query = $conn->prepare("DELETE FROM admin_staff_account WHERE id = ?");
    
    if (!$query) {
        echo json_encode(["success" => false, "message" => "Error in Prepare Statement: " . $conn->error]);
        exit();
    }

    $query->bind_param("i", $userId); // Bind the user ID as an integer
    
    if ($query->execute()) {
        echo json_encode(["success" => true]);
    } else {
        echo json_encode(["success" => false, "message" => "Error executing query: " . $query->error]);
    }

    $query->close();
    $conn->close();
} else {
    echo json_encode(["success" => false, "message" => "No ID provided"]);
}
?>
