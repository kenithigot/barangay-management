<?php
include "../../src/database.php";

$selectedYear = isset($_GET['year']) ? $_GET['year'] : date("Y");

// Fetch revenue data per month
$queryMonthly = $conn->prepare("
    SELECT DATE_FORMAT(STR_TO_DATE(printrequest_docs, '%d-%M-%Y %h:%i:%s %p'), '%M') AS month,
           SUM(docsPrice) AS revenue
    FROM resident_request_docs
    WHERE requestStatus = 'Approve'
    AND DATE_FORMAT(STR_TO_DATE(printrequest_docs, '%d-%M-%Y %h:%i:%s %p'), '%Y') = ?
    GROUP BY month
    ORDER BY STR_TO_DATE(CONCAT('01-', month, '-2023'), '%d-%M-%Y') ASC
");

// Bind selected year
$queryMonthly->bind_param("s", $selectedYear);
$queryMonthly->execute();
$result = $queryMonthly->get_result();

$months = [];
$revenues = [];

while ($row = $result->fetch_assoc()) {
    $months[] = $row['month'];
    $revenues[] = (int)$row['revenue']; // Ensure it's a number
}

// Send JSON response
echo json_encode([
    'months' => $months,
    'revenues' => $revenues,
]);

$queryMonthly->close();
$conn->close();
?>
