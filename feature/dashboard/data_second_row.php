<?php

include "../../src/database.php";

$query = $conn->prepare("SELECT resident_request_docs.id, 
        resident_request_docs.documentType, 
        document_types.documentClassification FROM resident_request_docs 
        INNER JOIN document_types ON resident_request_docs.documentType = document_types.documentType");
$query->execute();
$query_result = $query->get_result();

$documentRequested = 0;
$barangayCertificate = 0;
$certificateOfIndigency = 0;
$businessClearance = 0;

while ($row = mysqli_fetch_assoc($query_result)) {

    if ($row['documentClassification'] == 'Barangay Certificate') {
        $barangayCertificate++;
    } elseif ($row['documentClassification'] == 'Certificate of Indigency') {
        $certificateOfIndigency++;
    } elseif ($row['documentClassification'] == 'Business Clearance') {
        $businessClearance++;
    }
    // Increment Docs Requested
    $documentRequested++;
}
$conn->close();
?>

<!-- Card -->
<div class="flex flex-col bg-blue-600 border shadow-md rounded-xl min-w-48">
    <div class="p-4 md:p-5 flex gap-x-4">
        <div class="shrink-0 flex justify-center items-center size-[46px] bg-gray-100 rounded-lg">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0 1 18 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3 1.5 1.5 3-3.75" />
            </svg>
        </div>

        <div class="grow">
            <div class="flex items-center gap-x-2">
                <p class="text-xs uppercase tracking-wide text-slate-200 font-bold">
                    Approved Documents
                </p>
                <div class="hs-tooltip">
                    <div class="hs-tooltip-toggle">
                        <svg class="shrink-0 size-4 text-slate-200" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10" />
                            <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3" />
                            <path d="M12 17h.01" />
                        </svg>
                        <span class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-2 px-2 bg-gray-900 text-xs font-medium text-white rounded shadow-sm" role="tooltip">
                            The total number of requested documents in barangay
                        </span>
                    </div>
                </div>
            </div>
            <div class="mt-1 flex items-center gap-x-2">
                <h3 class="text-xl sm:text-2xl font-medium text-slate-200">
                    <?php echo $documentRequested; ?>
                </h3>
            </div>
        </div>
    </div>
</div>
<!-- End Card -->

<!-- Card -->
<div class="flex flex-col bg-blue-700 border shadow-md rounded-xl min-w-48">
    <div class="p-4 md:p-5 flex gap-x-4">
        <div class="shrink-0 flex justify-center items-center size-[46px] bg-gray-100 rounded-lg">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 0 1 4.5 9.75h15A2.25 2.25 0 0 1 21.75 12v.75m-8.69-6.44-2.12-2.12a1.5 1.5 0 0 0-1.061-.44H4.5A2.25 2.25 0 0 0 2.25 6v12a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9a2.25 2.25 0 0 0-2.25-2.25h-5.379a1.5 1.5 0 0 1-1.06-.44Z" />
            </svg>
        </div>

        <div class="grow">
            <div class="flex items-center gap-x-2">
                <p class="text-xs uppercase tracking-wide text-slate-200 font-bold">
                    Barangay Certificate
                </p>
                <div class="hs-tooltip">
                    <div class="hs-tooltip-toggle">
                        <svg class="shrink-0 size-4 text-slate-200" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10" />
                            <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3" />
                            <path d="M12 17h.01" />
                        </svg>
                        <span class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-2 px-2 bg-gray-900 text-xs font-medium text-white rounded shadow-sm" role="tooltip">
                            The total number of barangay certificate requested in the barangay
                        </span>
                    </div>
                </div>
            </div>
            <div class="mt-1 flex items-center gap-x-2">
                <h3 class="text-xl sm:text-2xl font-medium text-slate-200">
                    <?php echo $barangayCertificate; ?>
                </h3>
            </div>
        </div>
    </div>
</div>
<!-- End Card -->

<!-- Card -->
<div class="flex flex-col bg-blue-700 border shadow-md rounded-xl min-w-48">
    <div class="p-4 md:p-5 flex gap-x-4">
        <div class="shrink-0 flex justify-center items-center size-[46px] bg-gray-100 rounded-lg">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 0 1 4.5 9.75h15A2.25 2.25 0 0 1 21.75 12v.75m-8.69-6.44-2.12-2.12a1.5 1.5 0 0 0-1.061-.44H4.5A2.25 2.25 0 0 0 2.25 6v12a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9a2.25 2.25 0 0 0-2.25-2.25h-5.379a1.5 1.5 0 0 1-1.06-.44Z" />
            </svg>
        </div>

        <div class="grow">
            <div class="flex items-center gap-x-2">
                <p class="text-xs uppercase tracking-wide text-slate-200 font-bold">
                    Certificate of Indigency
                </p>
                <div class="hs-tooltip">
                    <div class="hs-tooltip-toggle">
                        <svg class="shrink-0 size-4 text-slate-200" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10" />
                            <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3" />
                            <path d="M12 17h.01" />
                        </svg>
                        <span class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-2 px-2 bg-gray-900 text-xs font-medium text-white rounded shadow-sm" role="tooltip">
                            The total number of certificate of indigency requested in the barangay
                        </span>
                    </div>
                </div>
            </div>
            <div class="mt-1 flex items-center gap-x-2">
                <h3 class="text-xl sm:text-2xl font-medium text-slate-200">
                    <?php echo $certificateOfIndigency; ?>
                </h3>
            </div>
        </div>
    </div>
</div>
<!-- End Card -->

<!-- Card -->
<div class="flex flex-col bg-blue-700 border shadow-md rounded-xl min-w-48">
    <div class="p-4 md:p-5 flex gap-x-4">
        <div class="shrink-0 flex justify-center items-center size-[46px] bg-gray-100 rounded-lg">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 0 1 4.5 9.75h15A2.25 2.25 0 0 1 21.75 12v.75m-8.69-6.44-2.12-2.12a1.5 1.5 0 0 0-1.061-.44H4.5A2.25 2.25 0 0 0 2.25 6v12a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9a2.25 2.25 0 0 0-2.25-2.25h-5.379a1.5 1.5 0 0 1-1.06-.44Z" />
            </svg>
        </div>

        <div class="grow">
            <div class="flex items-center gap-x-2">
                <p class="text-xs uppercase tracking-wide text-slate-200 font-bold">
                    Business Clearance
                </p>
                <div class="hs-tooltip">
                    <div class="hs-tooltip-toggle">
                        <svg class="shrink-0 size-4 text-slate-200" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10" />
                            <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3" />
                            <path d="M12 17h.01" />
                        </svg>
                        <span class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-2 px-2 bg-gray-900 text-xs font-medium text-white rounded shadow-sm" role="tooltip">
                            The total number of business clearance requested in the barangay
                        </span>
                    </div>
                </div>
            </div>
            <div class="mt-1 flex items-center gap-x-2">
                <h3 class="text-xl sm:text-2xl font-medium text-slate-200">
                    <?php echo $businessClearance; ?>
                </h3>
            </div>
        </div>
    </div>
</div>
<!-- End Card -->