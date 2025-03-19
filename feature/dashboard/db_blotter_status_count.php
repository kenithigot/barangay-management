<?php 
    include("../../src/database.php");

    $query = $conn->prepare("SELECT blotter_status FROM blotter_record");
    $query->execute();
    $result = $query->get_result();

    $ongoingStatus = 0;
    $dismissedStatus = 0;
    $resolvedStatus = 0;
    $casesRecord = 0;

    while ($row = $result->fetch_assoc()) {
        if ($row["blotter_status"] == 'Ongoing') {
            $ongoingStatus++;
        } elseif ($row['blotter_status'] == 'Dismissed') {
            $dismissedStatus++;
        } else {
            $resolvedStatus++;
        }
        $casesRecord++;
    }

    echo json_encode([
        'ongoingStatus' => $ongoingStatus,
        'dismissedStatus' => $dismissedStatus,
        'resolvedStatus' => $resolvedStatus,
        'casesRecord' => $casesRecord
    ]);
    $result->close();
    $conn->close();
?>