<?php
include('../../src/database.php');

if (isset($_POST["id"])) {
    $id = $_POST["id"];

    date_default_timezone_set('Asia/Manila');
    // Set the time when the print is completed
    $donePrintDocs = date('d-F-Y g:i:s A');

    $queryDoneDocs = "UPDATE resident_request_docs SET requestStatus = 'Done', printrequest_docs = ? WHERE id = ?";

    $query_resultDone = $conn->prepare($queryDoneDocs);
    $query_resultDone->bind_param("si", $donePrintDocs, $id,);

    if ($query_resultDone->execute()) {
        echo json_encode(["success" => true]);
    } else {
        echo json_encode(["success" => false, "message" => "Error executing query: " . $query->error]);
    }
    $query_resultDone->close();
    $conn->close();
}
