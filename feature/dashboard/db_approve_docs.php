<?php
    include "../../src/database.php";

    $query = $conn->prepare("SELECT resident_request_docs.id, 
        resident_request_docs.documentType, 
        resident_request_docs.requestStatus,
        document_types.documentClassification 
        FROM resident_request_docs 
        INNER JOIN document_types 
        ON resident_request_docs.documentType = document_types.documentType 
        WHERE resident_request_docs.requestStatus = 'Approve'");
    $query->execute();
    $query_result = $query->get_result();

    $barangayCertificate = 0;
    $certificateOfIndigency = 0;
    $barangayClearance = 0;

    while ($row = mysqli_fetch_assoc($query_result)) {

        if ($row['documentClassification'] == 'Barangay Certificate') {
            $barangayCertificate++;
        } elseif ($row['documentClassification'] == 'Certificate of Indigency') {
            $certificateOfIndigency++;
        } elseif ($row['documentClassification'] == 'Barangay Clearance') {
            $barangayClearance++;
        } else {
            echo 'No Document..';
        }
    }
    echo json_encode([
        'barangayCertificate' => $barangayCertificate,
        'certificateOfIndigency' => $certificateOfIndigency,
        'barangayClearance' => $barangayClearance     
    ]);
    $query_result->close();
    $conn->close();
?>
