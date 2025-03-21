<?php
// Start the session
session_start();

function generateTransactionCode($codeLength = 10)
{
    return strtoupper(substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"), 0, $codeLength));
}

// If the form was submitted, store the data in the session
if (isset($_POST['btn-submit'])) {
    $_SESSION['documentType'] = $_POST['documentType'] ?? '';
    $_SESSION['residencyYear'] = $_POST['residencyYear'] ?? '';
    $_SESSION['firstName'] = $_POST['firstName'] ?? '';
    $_SESSION['middleInitial'] = $_POST['middleInitial'] ?? '';
    $_SESSION['lastName'] = $_POST['lastName'] ?? '';
    $_SESSION['ageUserRequest'] = $_POST['ageUserRequest'] ?? '';
    $_SESSION['userGender'] = $_POST['userGender'] ?? '';
    $_SESSION['civilStatus'] = $_POST['civilStatus'] ?? '';
    $_SESSION['contactNum'] = $_POST['contactNum'] ?? '';
    $_SESSION['address'] = $_POST['address'] ?? '';
    $_SESSION['purposeText'] = $_POST['purposeText'] ?? '';

    // Year converted to whole years residency
    $currentYear = date('Y');
    $enteredYear = $_SESSION['residencyYear'] ?? 0;
    $residencyYearConverted = ($enteredYear > 0) ? ($currentYear - $enteredYear) : 0;
    $_SESSION['residencyYearConverted'] = $residencyYearConverted;

    //Session of Transaction Code 
    $_SESSION['transactionCode'] = generateTransactionCode();

    // Check and fetch the price for the selected document type
    if (!empty($_SESSION['documentType'])) {
        include "../src/database.php";

        $documentType = $_SESSION['documentType'];

        // Prepare the query to fetch the price
        $check_query = $conn->prepare("SELECT documentPrice FROM document_types WHERE documentType = ?");
        $check_query->bind_param("i", $documentType);
        $check_query->execute();
        $check_query->store_result();
        $check_query->bind_result($fetchedDocumentPrice);
        $check_query->fetch();

        // Store the fetched price in session
        $_SESSION['fetchedDocumentPrice'] = $fetchedDocumentPrice;

        $check_query->close();
        $conn->close();
    }
}

if (isset($_POST['btn-confirmPayment'])) {

    // Database Connection
    include "../src/database.php";

    // Get the session data
    $documentType = $_SESSION['documentType'] ?? '';
    $firstName = $_SESSION['firstName'] ?? '';
    $residencyYear = $_SESSION['residencyYearConverted'] ?? 0;
    $middleInitial = $_SESSION['middleInitial'] ?? '';
    $lastName = $_SESSION['lastName'] ?? '';
    $ageUserRequest = $_SESSION['ageUserRequest'] ?? '';
    $userGender = $_SESSION['userGender'] ?? '';
    $civilStatus = $_SESSION['civilStatus'] ?? '';
    $contactNum = $_SESSION['contactNum'] ?? '';
    $address = $_SESSION['address'] ?? '';
    $purposeText = $_SESSION['purposeText'] ?? '';
    $referenceNum = $_POST['referenceNum'] ?? '';
    $paymentSelection = $_POST['paymentSelectionBlock'] ?? '';
    $documentPrice = $_POST['documentPrice'] ?? '';
    $transactionCode = $_SESSION['transactionCode'];
    $documentPrice = $_SESSION['fetchedDocumentPrice'];
    
    date_default_timezone_set('Asia/Manila');
    //Timestamp for each request
    $currentDate = date('d-F-Y h:i A');
    $docs_timestamp = $currentDate;

    //Hashed transaction Code
    $hashedTransactionCode = password_hash($transactionCode, PASSWORD_BCRYPT);

    $requestStatus = "Pending";

    // Handle file upload
    if (isset($_FILES['uploadReceipt']) && $_FILES['uploadReceipt']['error'] == 0) {
        $fileType = strtolower(pathinfo($_FILES['uploadReceipt']['name'], PATHINFO_EXTENSION));
        $validateTypeFile = ['jpg', 'jpeg', 'png'];

        if (in_array($fileType, $validateTypeFile)) {
            $uniqueFileName = "receipt_" . time() . '.' . $fileType;
            $targetDir = "../src/imgs-vid/receipts/";
            $targetFile = $targetDir . $uniqueFileName;

            // Prepare the SQL statement
            $stmt = $conn->prepare("INSERT INTO resident_request_docs (documentType, docsPrice, firstName, middleInitial, lastName, age, gender, civilStatus, contactNum, address, purpose, referenceNum, paymentMethod, uploadReceipt, requestStatus, residencyYear, transactionCode, docs_timestamp) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("sssssissssssssssss", $documentType, $documentPrice, $firstName, $middleInitial, $lastName, $ageUserRequest, $userGender, $civilStatus, $contactNum, $address, $purposeText, $referenceNum, $paymentSelection, $uniqueFileName, $requestStatus, $residencyYear, $hashedTransactionCode, $docs_timestamp);

            if ($stmt->execute()) {
                // Move the uploaded file to the target directory
                if (move_uploaded_file($_FILES['uploadReceipt']['tmp_name'], $targetFile)) {
                    echo '<script>
                        document.addEventListener("DOMContentLoaded", function() {
                            Swal.fire({
                                icon: "success",
                                title: "Request Submitted!",
                                text: "Your document request has been submitted successfully. Please wait for confirmation."
                            }).then(() => {                                 
                                window.location.href = "../request_document/";    
                            });
                        });
                    </script>';
                } else {
                    echo '<script>alert("Sorry, there was an error uploading your file.");</script>';
                }
            } else {
                echo '<script>
                        document.addEventListener("DOMContentLoaded", function() {
                            Swal.fire({
                                icon: "error",
                                title: "Request Failed!",
                                text: "Your data was not submitted. Please try again."
                            }).then(() => {                                 
                                window.location.href = "../request_document/";    
                            });
                        });
                    </script>';
            }

            // Close the database connection
            $stmt->close();
        } else {
            echo '<script>alert("Sorry, only JPG, JPEG, and PNG files are allowed.");</script>';
        }
    } else {
        echo '<script>
            document.addEventListener("DOMContentLoaded", function() {
                Swal.fire({
                    icon: "error",
                    title: "No file uploaded!",
                    text: "Please upload the receipt."
                });
            });
        </script>';
    }

    $conn->close();
}
