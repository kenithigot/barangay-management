<?php
include('../../src/database.php');

if (isset($_POST["id"])) {
    $id = $_POST["id"];

    date_default_timezone_set('Asia/Manila');
    // Set date
    $dismissedCase = date('m-d-Y h:i A');

    $queryDelete = "UPDATE blotter_record SET blotter_status = 'Dismissed',caseTime = ? WHERE id = ?";
    
    $query_resultDelete = $conn->prepare($queryDelete);
    $query_resultDelete->bind_param("si", $dismissedCase, $id);
    
    if ($query_resultDelete->execute()){
        echo json_encode(["success" => true]);
    }else {
        echo json_encode(["success" => false, "message" => "Error executing query: " . $query->error]);
    }
    $query_resultDelete->close();
    $conn->close
}
?>
