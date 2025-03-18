<?php
include("../../src/database.php");

if (isset($_POST["id"])) {
    $id = $_POST["id"];

    // Prepare the SQL query with a WHERE clause to filter by ID
    $query = "SELECT blotter_record.id,
            blotter_record.blotter_caseNumber, 
            incident_types.incident_classification,
            blotter_record.complainant_name, 
            blotter_record.date_of_incident, 
            blotter_record.respondent_name,
            blotter_record.location_of_incident,
            blotter_record.date_filing, 
             blotter_record.incident_details, 
            blotter_record.blotter_status
    FROM blotter_record 
    INNER JOIN incident_types
    ON incident_types.blotter_type = blotter_record.blotter_type
    WHERE blotter_record.id = ?"; 

    $query_result = $conn->prepare($query);
    if (!$query_result) {
        // Handle prepare statement error
        echo json_encode(['error' => 'Prepare statement failed: ' . $conn->error]);
        exit();
    }

    // Bind the ID parameter
    $query_result->bind_param("i", $id);
    // Execute the query
    if (!$query_result->execute()) {
        echo json_encode(['error' => 'Query execution failed: ' . $query_result->error]);
        exit();
    }

    // Bind the result variables
    $query_result->bind_result(
        $id,
        $blotter_caseNumber,
        $incident_classification,
        $complainant_name,
        $date_of_incident,
        $respondent_name,
        $location_of_incident,
        $date_filing,
        $incident_details,
        $blotter_status
    );

    if ($query_result->fetch()) {
        // Create an associative array with the fetched data
        $row = [
            'id' => $id,
            'blotter_caseNumber' => $blotter_caseNumber,
            'incident_classification' => $incident_classification,
            'complainant_name' => $complainant_name,
            'date_of_incident' => $date_of_incident,
            'respondent_name' => $respondent_name,
            'location_of_incident' => $location_of_incident,
            'date_filing' => $date_filing,
            'incident_details' => $incident_details,
            'blotter_status' => $blotter_status
        ];
        echo json_encode($row);
    } else {
        // No rows found
        echo json_encode(['error' => 'No data found for the given ID']);
    }

    // Close the statement and connection
    $query_result->close();
    $conn->close();
} else {
    // No ID provided
    echo json_encode(['error' => 'No ID provided']);
}