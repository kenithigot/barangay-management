<?php
    include('../../src/database.php');

    $query = "SELECT resident_request_docs.id,
        resident_request_docs.documentType, 
        document_types.documentClassification,
        resident_request_docs.firstName, 
        resident_request_docs.middleInitial, 
        resident_request_docs.lastName, 
        resident_request_docs.age, 
        resident_request_docs.gender, 
        resident_request_docs.contactNum, 
        resident_request_docs.address, 
        resident_request_docs.purpose,
        resident_request_docs.residencyYear
    FROM resident_request_docs INNER JOIN document_types
    ON document_types.documentType = resident_request_docs.documentType
    WHERE resident_request_docs.requestStatus = 'Pending'";
    
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