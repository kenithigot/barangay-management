<?php 
    include("../../src/database.php");

    $query = $conn->prepare("SELECT blotter_record.id, 
        blotter_record.blotter_type, 
        incident_types.incident_classification 
        FROM blotter_record 
        INNER JOIN incident_types
        ON blotter_record.blotter_type = incident_types.blotter_type");
    $query->execute();
    $result = $query->get_result();

    $firstCaseType = 0;
    $secondCaseType = 0;
    $thirdCaseType = 0;
    $forthCaseType = 0;
    $fifthCaseType = 0;
    $sixCaseType = 0;

    while ($row = $result->fetch_assoc()) {
        if ($row["incident_classification"] == 'Criminal Incidents') {
            $firstCaseType++;
        } elseif ($row['incident_classification'] == 'Civil Disputes') {
            $secondCaseType++;
        } elseif ($row['incident_classification'] == 'Public Safety and Order') {
            $thirdCaseType++;
        } elseif ($row['incident_classification'] == 'Domestic Issues') {
            $forthCaseType++;
        } elseif ($row['incident_classification'] == ' Community Concerns') {
            $fifthCaseType++;
        } elseif ($row['incident_classification'] == ' Miscellaneous Reports') {
            $sixCaseType++;
        } else {
            echo 'No Incident Classification';
        }

    }

    echo json_encode([
        'firstCaseType' => $firstCaseType,
        'secondCaseType' => $secondCaseType,
        'thirdCaseType' => $thirdCaseType,
        'forthCaseType' => $forthCaseType,
        'fifthCaseType' => $fifthCaseType,
        'sixCaseType' => $sixCaseType
    ]);
    $result->close();
    $conn->close();
?>