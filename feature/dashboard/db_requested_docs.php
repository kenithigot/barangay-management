<?php
    include "../../src/database.php";

    $query = $conn->prepare("SELECT resident_request_docs.id, 
        resident_request_docs.documentType, 
        resident_request_docs.requestStatus, 
        document_types.documentClassification 
        FROM resident_request_docs 
        INNER JOIN document_types 
        ON resident_request_docs.documentType = document_types.documentType");
    $query->execute();
    $query_result = $query->get_result();

    $approveRequest = 0;
    $pendingRequest = 0;
    $doneRequest = 0;

    while ($row = mysqli_fetch_assoc($query_result)) {
        if ($row['requestStatus'] == 'Approve') {
            $approveRequest++;
        } elseif ($row['requestStatus'] == 'Pending') {
            $pendingRequest++;
        } elseif ($row['requestStatus'] == 'Done') {
            $doneRequest++;
        } else {
            echo 'No request..';
        }
    }
    echo json_encode([
        'approveRequest' => $approveRequest,
        'pendingRequest' => $pendingRequest,
        'doneRequest' => $doneRequest
    ]);
    $query_result->close();
    $conn->close();
?>
