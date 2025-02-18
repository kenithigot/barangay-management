<?php
// Start the session
session_start();

// If the form was submitted, store the data in the session
if (isset($_POST['btn-submit'])) {
    $_SESSION['documentType'] = $_POST['documentType'] ?? '';
    $_SESSION['firstName'] = $_POST['firstName'] ?? '';
    $_SESSION['middleInitial'] = $_POST['middleInitial'] ?? '';
    $_SESSION['lastName'] = $_POST['lastName'] ?? '';
    $_SESSION['ageUserRequest'] = $_POST['ageUserRequest'] ?? '';
    $_SESSION['contactNum'] = $_POST['contactNum'] ?? '';
    $_SESSION['address'] = $_POST['address'] ?? '';
    $_SESSION['emailAddress'] = $_POST['emailAddress'] ?? '';
    $_SESSION['purposeText'] = $_POST['purposeText'] ?? '';

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
    $middleInitial = $_SESSION['middleInitial'] ?? '';
    $lastName = $_SESSION['lastName'] ?? '';
    $ageUserRequest = $_SESSION['ageUserRequest'] ?? '';
    $contactNum = $_SESSION['contactNum'] ?? '';
    $address = $_SESSION['address'] ?? '';
    $emailAddress = $_SESSION['emailAddress'] ?? '';
    $purposeText = $_SESSION['purposeText'] ?? '';
    $referenceNum = $_POST['referenceNum'] ?? '';
    $paymentSelection = $_POST['paymentSelectionBlock'] ?? '';
    $documentPrice = $_POST['documentPrice'] ?? '';

    // Handle file upload
    if (isset($_FILES['uploadReceipt']) && $_FILES['uploadReceipt']['error'] == 0) {
        $fileType = strtolower(pathinfo($_FILES['uploadReceipt']['name'], PATHINFO_EXTENSION));
        $validateTypeFile = ['jpg', 'jpeg', 'png'];

        if (in_array($fileType, $validateTypeFile)) {
            $uniqueFileName = "receipt_" . time() . '.' . $fileType;
            $targetDir = "../src/imgs-vid/receipts/";
            $targetFile = $targetDir . $uniqueFileName;

            // Move the uploaded file to the target directory
            if (move_uploaded_file($_FILES['uploadReceipt']['tmp_name'], $targetFile)) {
                // Prepare the SQL statement
                $stmt = $conn->prepare("INSERT INTO resident_request_docs (documentType, firstName, middleInitial, lastName, age, contactNum, address, emailAddress, purpose, referenceNum, paymentMethod, uploadReceipt) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
                $stmt->bind_param("ssssisssssss", $documentType, $firstName, $middleInitial, $lastName, $ageUserRequest, $contactNum, $address, $emailAddress, $purposeText, $referenceNum, $paymentSelection, $uniqueFileName);

                if ($stmt->execute()) {
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
                echo '<script>alert("Sorry, there was an error uploading your file.");</script>';
            }
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
