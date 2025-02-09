<?php
    include("../src/database.php");

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
    WHERE admin_staff_account.user_role != 1";

    $query_result = $conn->query($query);

    $display_data = array();

    if($query_result->num_rows > 0){
        while($row = $query_result->fetch_assoc()){
            $display_data[] = $row;
        };
    };
    $conn->close();

    echo json_encode(array("data" => $display_data));
?>
