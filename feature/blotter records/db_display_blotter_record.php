<?php
include("../../src/database.php");

$query = "SELECT blotter_record.id,
        blotter_record.blotter_caseNumber, 
        incident_types.incident_classification,
        blotter_record.complainant_name, 
        blotter_record.date_of_incident, 
        blotter_record.date_filing, 
        blotter_record.blotter_status
    FROM blotter_record 
    INNER JOIN incident_types
    ON incident_types.blotter_type = blotter_record.blotter_type
    WHERE blotter_status = 'Ongoing'";

$query_result = $conn->query($query);

$display_data = array();

if ($query_result->num_rows > 0) {
    while ($row = $query_result->fetch_assoc()) {
        $display_data[] = $row;
    }
}

$conn->close();

echo json_encode(array("data" => $display_data));
?>