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

<!-- Card -->
<div class="flex flex-col bg-gray-400 border shadow-md rounded-xl min-w-48">
    <div class="p-4 md:p-5 flex gap-x-4">
        <div class="shrink-0 flex justify-center items-center size-[46px] bg-gray-100 rounded-lg">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
            </svg>
        </div>

        <div class="grow">
            <div class="flex items-center gap-x-2">
                <p class="text-xs uppercase tracking-wide font-bold text-slate-800">
                    residents
                </p>
                <div class="hs-tooltip">
                    <div class="hs-tooltip-toggle">
                        <svg class="shrink-0 size-4 text-slate-800" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10" />
                            <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3" />
                            <path d="M12 17h.01" />
                        </svg>
                        <span class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-2 px-2 bg-gray-900 text-xs font-medium text-white rounded shadow-sm" role="tooltip">
                            The total number of residents in the barangay
                        </span>
                    </div>
                </div>
            </div>
            <div class="mt-1 flex items-center gap-x-2">
                <h3 class="text-xl sm:text-2xl font-medium text-slate-800">
                    <?php echo $residents; ?>
                </h3>
            </div>
        </div>
    </div>
</div>
<!-- End Card -->

<!-- Card -->
<div class="flex flex-col bg-gray-400 border shadow-md rounded-xl min-w-48">
    <div class="p-4 md:p-5 flex gap-x-4">
        <div class="shrink-0 flex justify-center items-center size-[46px] bg-gray-100 rounded-lg">
            <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gender-male" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M9.5 2a.5.5 0 0 1 0-1h5a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-1 0V2.707L9.871 6.836a5 5 0 1 1-.707-.707L13.293 2zM6 6a4 4 0 1 0 0 8 4 4 0 0 0 0-8" />
            </svg>
        </div>

        <div class="grow">
            <div class="flex items-center gap-x-2">
                <p class="text-xs uppercase tracking-wide text-slate-800 font-bold ">
                    Gender (Male)
                </p>
            </div>
            <div class="mt-1 flex items-center gap-x-2">
                <h3 class="text-xl sm:text-2xl font-medium text-slate-800">
                    <?php echo $male; ?>
                </h3>
            </div>
        </div>
    </div>
</div>
<!-- End Card -->

<!-- Card -->
<div class="flex flex-col bg-gray-400 border shadow-md rounded-xl min-w-48">
    <div class="p-4 md:p-5 flex gap-x-4">
        <div class="shrink-0 flex justify-center items-center size-[46px] bg-gray-100 rounded-lg">
            <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gender-female" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8 1a4 4 0 1 0 0 8 4 4 0 0 0 0-8M3 5a5 5 0 1 1 5.5 4.975V12h2a.5.5 0 0 1 0 1h-2v2.5a.5.5 0 0 1-1 0V13h-2a.5.5 0 0 1 0-1h2V9.975A5 5 0 0 1 3 5" />
            </svg>
        </div>

        <div class="grow">
            <div class="flex items-center gap-x-2">
                <p class="text-xs uppercase tracking-wide text-slate-800 font-bold">
                    Gender (Female)
                </p>
            </div>
            <div class="mt-1 flex items-center gap-x-2">
                <h3 class="text-xl sm:text-2xl font-medium text-slate-800">
                    <?php echo $female; ?>
                </h3>
            </div>
        </div>
    </div>
</div>
<!-- End Card -->

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

$staffAndOfficials = 0;

while ($row = mysqli_fetch_assoc($query_result)) {
    if ($row['user_type'] == 'Staff' || $row['user_type'] == 'Barangay Member') {
        $staffAndOfficials++;
    }
}
$conn->close();
?>

<!-- Card -->
<div class="flex flex-col bg-gray-400 border shadow-md rounded-xl min-w-48">
    <div class="p-4 md:p-5 flex gap-x-4">
        <div class="shrink-0 flex justify-center items-center size-[46px] bg-gray-100 rounded-lg">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
            </svg>
        </div>

        <div class="grow">
            <div class="flex items-center gap-x-2">
                <p class="text-xs uppercase tracking-wide font-bold text-slate-800">
                    Officials and Staff
                </p>
                <div class="hs-tooltip">
                    <div class="hs-tooltip-toggle">
                        <svg class="shrink-0 size-4 text-slate-800" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10" />
                            <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3" />
                            <path d="M12 17h.01" />
                        </svg>
                        <span class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-2 px-2 bg-gray-900 text-xs font-medium text-white rounded shadow-sm" role="tooltip">
                            The number of officials and staff in the barangay
                        </span>
                    </div>
                </div>
            </div>
            <div class="mt-1 flex items-center gap-x-2">
                <h3 class="text-xl sm:text-2xl font-medium text-slate-800">
                    <?php echo $staffAndOfficials; ?>
                </h3>
            </div>
        </div>
    </div>
</div>
<!-- End Card -->