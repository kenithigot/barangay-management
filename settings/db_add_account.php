<?php
include("../src/database.php"); 

//handling form submission
if (isset($_POST['btn-addAccount'])) {
    $user_type = $_POST['userType'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $contactNum = $_POST['contactNum'];
    $userAddress = $_POST['userAddress'];
    $username = $_POST['username'];
    $password = $_POST['password'];

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
            (user_role, firstName, lastName, contactNum, address, username, password, timestamp)
            VALUES (?, ?, ?, ?, ?, ?, ?, NOW())
        ");

    if (!$query) {
        echo ("Error in Prepare Statement" . $conn->error);
    }

    //Binding variable
    $query->bind_param(
        "issssss",
        $user_type,
        $firstName,
        $lastName,
        $contactNum,
        $userAddress,
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
