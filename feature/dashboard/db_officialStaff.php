<?php
    include('../../src/database.php');

    $query = "SELECT admin_staff_account.id, 
        admin_staff_account.user_role, 
        admin_staff_account.firstName, 
        admin_staff_account.lastName, 
        admin_staff_account.contactNum, 
        admin_staff_account.address, 
        admin_staff_account.email_address, 
        admin_staff_role.user_type 
        FROM admin_staff_account 
        INNER JOIN admin_staff_role 
        ON admin_staff_role.user_role = admin_staff_account.user_role";
    $query_result = mysqli_query($conn, $query);

    $barangayOfficial = 0;
    $staff = 0;

    while ($row = mysqli_fetch_assoc($query_result)) {
        if ($row['user_type'] == 'Barangay Official') {
            $barangayOfficial++;
        } elseif ($row['user_type'] == 'Staff' || $row['user_type'] == 'Treasurer' || $row['user_type'] == 'Secretary') {
            $staff++;
        } 
    }
    echo json_encode([
        'barangayOfficial' => $barangayOfficial,
        'staff' => $staff  
    ]);
    
    $query_result->close();
    $conn->close();
    
?>