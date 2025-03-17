<?php
include("../../src/database.php");

// Query to fetch data
$query = "SELECT blotter_record.id,
        blotter_record.blotter_caseNumber, 
        incident_types.incident_classification,
        blotter_record.complainant_name, 
        blotter_record.date_of_incident, 
        blotter_record.date_filing, 
        blotter_record.blotter_status
    FROM blotter_record 
    INNER JOIN incident_types
    ON incident_types.blotter_type = blotter_record.blotter_type";

$query_result = $conn->query($query);

$display_data = array();

if ($query_result->num_rows > 0) {
    while ($row = $query_result->fetch_assoc()) {
        // Format date_of_incident
        $date_of_incident = new DateTime($row['date_of_incident']);
        $row['date_of_incident'] = $date_of_incident->format('d-m-Y H:i:s');

        // Format date_filing
        $date_filing = new DateTime($row['date_filing']);
        $row['date_filing'] = $date_filing->format('d-m-Y H:i:s');

        // Add the formatted row to the display data array
        $display_data[] = $row;
    }
}

$conn->close();

// Return the data as JSON
echo json_encode(array("data" => $display_data));
?>