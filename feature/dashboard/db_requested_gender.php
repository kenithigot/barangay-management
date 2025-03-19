<?php
    include('../../src/database.php');
    $sql = "SELECT * FROM resident_request_docs";
    $sql_result = mysqli_query($conn, $sql);
    $male = 0;
    $female = 0;
    $residentRequested = 0;

    while ($row = mysqli_fetch_assoc($sql_result)) {
        if ($row['gender'] == 'Male') {
            $male++;
        } elseif ($row['gender'] == 'Female') {
            $female++;
        }
        // Increment the total number of residents
        $residentRequested++;
    }
    echo json_encode([
        'male' => $male,
        'female' => $female,
        'residentRequested' => $residentRequested
    ]);
    $conn->close();
?>