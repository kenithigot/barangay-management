<?php

    include("../../src/database.php");

    if(isset($_POST["id"])){
        $id = $_POST["id"];

        $query = "SELECT admin_staff_role.user_type, 
        admin_staff_account.id, 
        admin_staff_account.user_role, 
        admin_staff_account.firstName, 
        admin_staff_account.lastName, 
        admin_staff_account.contactNum, 
        admin_staff_account.address,
        admin_staff_account.email_address,
        admin_staff_account.timestamp  
        FROM admin_staff_account INNER JOIN admin_staff_role 
        ON admin_staff_role.user_role = admin_staff_account.user_role
        WHERE admin_staff_account.id = ?";

        $query_result = $conn->prepare($query);
        $query_result->bind_param("i", $id);
        $query_result->execute();
        $result =  $query_result->get_result();

        if ($result->num_rows > 0){
            $row = $result->fetch_assoc();
            echo json_encode($row);
        } else{
            echo json_encode(['error' => 'Query Failed']);

        }
        $query_result->close();

        $conn->close();
    }
   
?>