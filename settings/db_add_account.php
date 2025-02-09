<?php
include("../src/database.php"); 

//handling form submission 

if (isset($_POST['btn-addAccount'])) {
    $user_type = isset($_POST['userType']) ? $_POST['userType'] : '';
    $firstName = isset($_POST['firstName']) ? $_POST['firstName'] : '';
    $lastName = isset($_POST['lastName']) ? $_POST['lastName'] : '';
    $contactNum = isset($_POST['contactNum']) ? $_POST['contactNum'] : '';
    $userAddress = isset($_POST['userAddress']) ? $_POST['userAddress'] : '';
    $email_address = isset($_POST['email_address']) ? $_POST['email_address'] : '';
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    //Check duplication account
    $check_query = $conn->prepare("SELECT id FROM admin_staff_account WHERE username = ?");
    $check_query->bind_param("s", $username);
    $check_query->execute();
    $check_query->store_result();

    if($check_query->num_rows > 0){
        // Alert for existing username
        echo '<script>
            document.addEventListener("DOMContentLoaded", function() {
                Swal.fire({
                    icon: "warning",
                    title: "Duplicate entry!",
                    text: "The username is already exist. Please choose another one."
                }).then(() => {
                    window.location.href = "add account.php";
                    window.location.reload();
                });
            });
        </script>';
        $check_query->close();
        $conn->close();
        exit();
    };
    $check_query->close();

    //Applying hash password
    $hashedpassword = password_hash($password, PASSWORD_BCRYPT);

    //Prepare statement query insert
    $query = $conn->prepare("INSERT INTO admin_staff_account
            (user_role, firstName, lastName, contactNum, address, email_address, username, password, timestamp)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, NOW())
        ");

    if (!$query) {
        echo ("Error in Prepare Statement" . $conn->error);
    }

    //Binding variable
    $query->bind_param(
        "isssssss",
        $user_type,
        $firstName,
        $lastName,
        $contactNum,
        $userAddress,
        $email_address,
        $username,
        $hashedpassword
    );

    if ($query->execute()) {
        echo '<script>
            document.addEventListener("DOMContentLoaded", function() {
                Swal.fire({
                    icon: "success",
                    title: "Account added!",
                    text: "User account added successfully."
                }).then(() => {
                    window.location.href = "add account.php";
                });
            });
        </script>';
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
};
