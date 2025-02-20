<?php
session_start();

include("../src/database.php");

if (isset($_POST['btn-userLogin'])) {

    // Get the username and password from the form
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $userPassword = isset($_POST['userPassword']) ? $_POST['userPassword'] : '';

    // Check if the username and password are empty
    if (empty($username) || empty($userPassword)) {
        echo '<script>
            document.addEventListener("DOMContentLoaded", function() {
                Swal.fire({
                    icon: "error",
                    title: "Please fill in all fields!",
                    text: "username and password are required."
                }).then(() => {
                    window.location.href = "../account login/";
                });
            });
        </script>';
    } else {

        // Prepare the query to get the user details
        $query = $conn->prepare("SELECT * FROM admin_staff_account WHERE username = ?");
        $query->bind_param("s", $username);
        $query->execute();
        $result = $query->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();

            $id = $row['id'];
            $user_role = $row['user_role'];
            $firstName = $row['firstName'];
            $hashedpassword = $row['password'];

            // Verify the password
            if (password_verify($userPassword, $hashedpassword)) {
                $_SESSION['id'] = $id;
                $_SESSION['user_role'] = $user_role;

                $redirectUrl = ($user_role == 1) ? "../feature/dashboard/" : (($user_role == 2) ? "../staff/dashboard/" : "../other/page/");

                echo '<script>
                    document.addEventListener("DOMContentLoaded", function() {
                        Swal.fire({
                            icon: "success",
                            title: "Login Successful!",
                            html: "Welcome <span class=\"font-semibold uppercase\">' . $firstName . '</span>!<br>You have successfully logged in."
                        }).then(() => {
                            window.location.href = "' . $redirectUrl . '";
                        });
                    });
                </script>';
            } else {
                echo '<script>
                    document.addEventListener("DOMContentLoaded", function() {
                        Swal.fire({
                            icon: "error",
                            title: "Login Failed!",
                            text: "Invalid username or password."
                        }).then(() => {
                            window.location.href = "../account login/";
                        });
                    });
                </script>';
            }
        } else {
            echo '<script>
            document.addEventListener("DOMContentLoaded", function() {
                Swal.fire({
                    icon: "error",
                    title: "Login Failed!",
                    text: "Invalid username or password."
                }).then(() => {
                    window.location.href = "../account login/";
                });
            });
        </script>';
        }
    }
}
?>
