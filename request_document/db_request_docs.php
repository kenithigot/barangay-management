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

        // Prepare the SQL statement
        $stmt = $conn->prepare("INSERT INTO resident_request_docs (documentType, firstName, middleInitial, lastName, age, contactNum, address, emailAddress, purpose, referenceNum, paymentMethod) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssisssssi", $documentType, $firstName, $middleInitial, $lastName, $ageUserRequest, $contactNum, $address, $emailAddress, $purposeText, $referenceNum, $paymentSelection);

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
        $conn->close();
    }
    ?>