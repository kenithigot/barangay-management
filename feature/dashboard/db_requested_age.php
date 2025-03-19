<?php
    include "../../src/database.php";

    $query = $conn->prepare("SELECT age FROM resident_request_docs");
    $query->execute();
    $query_result = $query->get_result();

    $child = 0;
    $teen = 0;
    $youngAdult = 0;
    $middleAdult = 0;
    $senior = 0;
    $elderly = 0;

    while ($row = mysqli_fetch_assoc($query_result)) {
        if ($row['age'] >= 0 && $row['age'] <= 12 ) {
            $child++;
        } elseif ($row['age'] >= 13 && $row['age'] <= 19 ) {
            $teen++;
        } elseif ($row['age'] >= 20 && $row['age'] <= 35 ) {
            $youngAdult++;
        } elseif ($row['age'] >= 36 && $row['age'] <= 50 ) {
            $middleAdult++;
        } elseif ($row['age'] >= 51 && $row['age'] <= 65 ) {
            $senior++;
        } elseif ($row['age'] > 65) {
            $elderly++;
        } else {
            echo 'No age..';
        }  
    }
    echo json_encode([
        'child' => $child,
        'teen' => $teen,
        'youngAdult' => $youngAdult,
        'middleAdult' => $middleAdult,
        'senior' => $senior,
        'elderly' => $elderly
    ]);
    $query_result->close();
    $conn->close();
?>