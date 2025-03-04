<?php
include "../src/database.php";

$isValid = false;
$requestStatus = "Transaction Code Not Found";
$firstName = "";
$lastName = "";

if (isset($_POST['btn-submitCode'])) {
    $transactionCode = $_POST['transactionCode'] ?? "";

    // Prepare SQL statement
    $stmt = $conn->prepare("SELECT transactionCode, requestStatus, firstName, lastName FROM resident_request_docs WHERE requestStatus IN ('Approve', 'Pending')");

    if ($stmt === false) {
        die("Error in preparing statement: " . $conn->error);
    }

    $stmt->execute();
    $stmt_result = $stmt->get_result();

    // Loop through records to verify the hashed transaction code
    while ($row = $stmt_result->fetch_assoc()) {
        if (password_verify($transactionCode, $row['transactionCode'])) {
            $isValid = true;
            $requestStatus = $row['requestStatus'];
            $firstName = $row['firstName'];
            $lastName = $row['lastName'];
            break;
        }
    }

    $stmt->close();
}
?>
