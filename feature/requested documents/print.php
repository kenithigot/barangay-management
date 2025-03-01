<?php
header('Content-Type: application/json');
include('../../src/database.php');

if (isset($_POST["id"])) {
    $id = $_POST["id"];

    $queryPrint = "SELECT resident_request_docs.id, 
        resident_request_docs.documentType, 
        document_types.documentClassification
    FROM resident_request_docs 
    INNER JOIN document_types
    ON document_types.documentType = resident_request_docs.documentType
    WHERE resident_request_docs.id = ?";
    
    $query_resultPrint = $conn->prepare($queryPrint);
    $query_resultPrint->bind_param("i", $id);
    $query_resultPrint->execute();
    $resultPrint =  $query_resultPrint->get_result();

    if ($resultPrint->num_rows > 0) {
        $row = $resultPrint->fetch_assoc();

        echo json_encode($row);
    } else {
        echo json_encode(['error' => 'Query Failed']);
    }

    $query_resultPrint->close();
    $conn->close();
}
?>
