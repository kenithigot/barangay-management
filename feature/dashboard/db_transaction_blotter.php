<?php
    include('../../src/database.php');

    $query = "SELECT blotter_record.id,
        blotter_record.blotter_caseNumber,
        blotter_record.date_of_incident,
        blotter_record.date_filing,
        blotter_record.caseTime,
        incident_types.incident_classification
    FROM blotter_record INNER JOIN incident_types
    ON blotter_record.blotter_type = incident_types.blotter_type
    ORDER BY blotter_record.id DESC";
    
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