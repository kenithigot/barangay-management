<?php
include('../../src/database.php');
$sql = "SELECT * FROM resident_request_docs";
$sql_result = mysqli_query($conn, $sql);
$male = 0;
$female = 0;
$residents = 0;

while ($row = mysqli_fetch_assoc($sql_result)) {
    if ($row['gender'] == 'Male') {
        $male++;
    } elseif ($row['gender'] == 'Female') {
        $female++;
    }
    // Increment the total number of residents
    $residents++;
}
$conn->close();
?>

<?php
include('../../src/database.php');

$query = "SELECT admin_staff_account.id, 
    admin_staff_account.user_role, 
    admin_staff_account.firstName, 
    admin_staff_account.lastName, 
    admin_staff_account.contactNum, 
    admin_staff_account.address, 
    admin_staff_account.email_address, 
    admin_staff_role.user_type FROM admin_staff_account 
    INNER JOIN admin_staff_role ON admin_staff_role.user_role = admin_staff_account.user_role";
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
$conn->close();
$query_result->close();
?>

<!-- Card -->
<div class="border-l-4 border-l-green-600 flex flex-col bg-gray-200 border shadow-md rounded-xl min-w-48">
    <div class="p-4">
        <div calss="text-left">
            <p class="text-left text-lg uppercase tracking-wide font-bold text-gray-800">
                Residents Requested
            </p>
        </div>
        <div class="min-h-[170px] flex items-center justify-center">
            <p class="text-6xl uppercase tracking-wide font-semibold text-gray-800">
                <?php echo $residents; ?>
            </p>
        </div>
    </div>
</div>
<!-- End Card -->

<!-- Card -->
<div class="border-l-4 border-l-green-600 flex flex-col bg-gray-200 border shadow-md rounded-xl min-w-48">
    <div class="p-4 overflow-x-hidden">
        <div calss="text-left">
            <p class="text-left text-lg uppercase tracking-wide font-bold text-gray-800">
                Officials and Staff
            </p>
        </div>
        <div class="min-h-[190px] flex items-center justify-center">
            <div id="hs-officialsAndStaff"></div>
        </div>
    </div>
</div>
<!-- End Card -->

<!-- Card -->
<div class="border-l-4 border-l-green-600 flex flex-col bg-gray-200 border shadow-md rounded-xl min-w-48">
    <div class="p-4">
        <div calss="text-left">
            <p class="text-left text-lg uppercase tracking-wide font-bold text-gray-800">
                Resident Gender
            </p>
        </div>
        <div class="min-h-[190px] flex items-center justify-center">
            <div id="hs-gender"></div>
        </div>
    </div>
</div>
<!-- End Card -->

<script>
    //Gender Selection
    var femaleGender = <?php echo $female ?>;
    var maleGender = <?php echo $male ?>;

    //Barangay Officials and Staff Selection
    var barangayOfficial = <?php echo $barangayOfficial ?>;
    var staff = <?php echo $staff ?>;

</script>