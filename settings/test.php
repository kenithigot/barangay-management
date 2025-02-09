<?php
include("../src/database.php");
$id = 67; // Replace with a valid ID
$query = "SELECT * FROM admin_staff_account WHERE id = ?";
$query_result = $conn->prepare($query);
$query_result->bind_param("i", $id);
$query_result->execute();
$result =  $query_result->get_result();
$row = mysqli_fetch_assoc($result);
print_r($row);
?>