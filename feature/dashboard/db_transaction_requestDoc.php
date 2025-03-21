<?php
    include('../../src/database.php');

    $query = "SELECT resident_request_docs.id,
        document_types.documentClassification,
        document_types.documentPrice,
        resident_request_docs.docs_timestamp,
        resident_request_docs.requestStatus, 
        resident_request_docs.printrequest_docs
    FROM resident_request_docs INNER JOIN document_types
    ON document_types.documentType = resident_request_docs.documentType
    ORDER BY resident_request_docs.id DESC";
    
    $query_result = mysqli_query($conn, $query);
    $display_data = array();

    if($query_result->num_rows > 0){
        while($row = $query_result->fetch_assoc()){
            $display_data[] = $row;
        };
    };
    $conn->close();

    echo json_encode(array("data" => $display_data));
?>