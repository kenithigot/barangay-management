<?php

include("../../src/database.php");

if (isset($_GET['id'])) {
    $userId = $_GET['id'];

    // Prepare and execute the query to fetch user data
    $query = "SELECT * FROM admin_staff_account WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $userId); 
    $stmt->execute();

    // Get the result
    $result = $stmt->get_result();
    $accountData = $result->fetch_assoc();

    // Check if data exists
    if ($accountData) {
        // Safely assign values to variables, checking if the keys exist
        $firstName = isset($accountData['firstName']) ? $accountData['firstName'] : '';
        $lastName = isset($accountData['lastName']) ? $accountData['lastName'] : '';
        $address = isset($accountData['address']) ? $accountData['address'] : '';
        $contactNum = isset($accountData['contactNum']) ? $accountData['contactNum'] : '';
        $userType = isset($accountData['user_role']) ? $accountData['user_role'] : '';
        $emailAddress = isset($accountData['email_address']) ? $accountData['email_address'] : '';
    } else {
        echo '<script>
            document.addEventListener("DOMContentLoaded", function() { 
                Swal.fire({
                    icon: "error",
                    title: "Error!",
                    text: "Failed to add user account. Please try again."
                }).then(() => {
                    window.location.href = "add account.php";
                });
            });
        </script>'; 
    }

    if ($_SERVER["REQUEST_METHOD"] === "POST"){
        $edit_firstName = $_POST['edit_firstName'?? ''];
        $edit_lastName = $_POST['edit_lastName'?? ''];
        $edit_address = $_POST['edit_address'?? ''];
        $edit_contactNum = $_POST['edit_contactNum'?? ''];
        $edit_userType = $_POST['edit_userType'?? ''];
        $edit_emailAddress = $_POST['edit_emailAddress'?? ''];

        if (!empty($userId)){
            $updateQuery = "UPDATE admin_staff_account SET
                firstName = ?, lastName = ?, address = ?,
                contactNum = ?, user_role = ?, email_address = ?
                WHERE id = ?
            ";
            $updateStmt = $conn->prepare($updateQuery);
            $updateStmt->bind_param("ssssssi", 
                $edit_firstName, 
                $edit_lastName, 
                $edit_address, 
                $edit_contactNum, 
                $edit_userType, 
                $edit_emailAddress,
                $userId
            );

            if ($updateStmt->execute()){
                echo '<script>
                    document.addEventListener("DOMContentLoaded", function() {
                        Swal.fire({
                            icon: "success",
                            title: "Account updated!",
                            text: "User account updated successfully."    
                        }).then(() => {
                            window.location.href = "add account.php";
                        });
                    });
                </script>';
            }
        }
    }

    $stmt->close();
}

// Close the database connection
$conn->close();
?>