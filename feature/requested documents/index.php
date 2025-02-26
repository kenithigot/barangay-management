<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Barangay Labuay</title>

    <!-- Tailwind CSS -->
    <link href="../../src/output.css" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/9fc27c8cb3.js" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.2.1/js/dataTables.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.2.1/css/dataTables.dataTables.css">

    <script src="../../node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>

    <style>
        table.dataTable th.dt-type-numeric,
        table.dataTable th.dt-type-date,
        table.dataTable td.dt-type-numeric,
        table.dataTable td.dt-type-date {
            text-align: start;
        }
    </style>
</head>

<body class="font-sans ">

    <?php require("../../includes/sidebar.php"); ?>
    <!-- ========== MAIN CONTENT ========== -->
    <div class="-mt-px">
        <!-- Breadcrumb -->
        <div class="sticky top-0 inset-x-0 z-20 bg-white border-y px-4 sm:px-6 lg:px-8 lg:hidden">
            <div class="flex items-center py-2">
                <!-- Navigation Toggle -->
                <button type="button" class="size-8 flex justify-center items-center gap-x-2 border border-gray-200 text-gray-800 hover:text-gray-500 rounded-lg focus:outline-none focus:text-gray-500 disabled:opacity-50 disabled:pointer-events-none" aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-application-sidebar" aria-label="Toggle navigation" data-hs-overlay="#hs-application-sidebar">
                    <span class="sr-only">Toggle Navigation</span>
                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect width="18" height="18" x="3" y="3" rx="2" />
                        <path d="M15 3v18" />
                        <path d="m8 9 3 3-3 3" />
                    </svg>
                </button>
                <!-- End Navigation Toggle -->

                <!-- Breadcrumb -->
                <ol class="ms-3 flex items-center whitespace-nowrap">
                    <li class="flex items-center text-sm text-gray-800">
                        Barangay Labuay
                        <svg class="shrink-0 mx-3 overflow-visible size-2.5 text-gray-400" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                        </svg>
                    </li>
                    <li class="text-sm font-semibold text-gray-800 truncate" aria-current="page">
                        Residents Record
                    </li>
                </ol>
                <!-- End Breadcrumb -->
            </div>
        </div>
        <!-- End Breadcrumb -->
    </div>
    <!-- Content -->
    <div class="w-full lg:ps-64 min-h-screen">
        <div class="p-8">
            <div class="hidden lg:block">
                <h1 class="text-2xl font-extrabold text-gray-800 underline">Requested Documents</h1>
            </div>
            <div class="my-5 py-5 shadow-lg rounded-md bg-sla">
                <div class="px-4">
                    <h1 class="text-gray-800 text-lg font-semibold mb-5">Pending Request Documents</h1>
                    <!-- DataTable -->
                    <table id="displayData" class="w-full text-gray-800">
                        <thead>
                            <tr>
                                <th>Action</th>
                                <th>Name</th>
                                <th>Age</th>
                                <th>Gender</th>
                                <th>Address</th>
                                <th>Document</th>
                                <th>Purpose Request</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>

                    <!-- Display Data Modal -->
                    <div id="displayModal" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none" role="dialog" tabindex="-1" aria-labelledby="displayModal-label">
                        <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all md:max-w-2xl lg:max-w-4xl m-3 md:mx-auto">
                            <div class="flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto ">
                                <div class="flex justify-between items-center py-3 px-4 border-b">
                                    <h3 id="displayModal-label" class="font-bold text-gray-800">
                                        View - Request Documents
                                    </h3>
                                    <button type="button" class="size-8 inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none" aria-label="Close" data-hs-overlay="#displayModal">
                                        <span class="sr-only">Close</span>
                                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M18 6 6 18"></path>
                                            <path d="m6 6 12 12"></path>
                                        </svg>
                                    </button>
                                </div>
                                <div class="p-4 px-6">
                                    <form action="" method="POST" enctype="multipart/form-data" class="py-5 lg:px-10">
                                        <input type="hidden" name="id" class="id" id="id">
                                        <div class="py-2">
                                            <a href="#" id="btn-approveRequest" name="btn-approveRequest" type="submit" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-green-800 text-white hover:bg-green-900 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none mr-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.633 10.25c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 0 1 2.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 0 0 .322-1.672V2.75a.75.75 0 0 1 .75-.75 2.25 2.25 0 0 1 2.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282m0 0h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 0 1-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 0 0-1.423-.23H5.904m10.598-9.75H14.25M5.904 18.5c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 0 1-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 9.953 4.167 9.5 5 9.5h1.053c.472 0 .745.556.5.96a8.958 8.958 0 0 0-1.302 4.665c0 1.194.232 2.333.654 3.375Z" />
                                                </svg>
                                                Approve
                                            </a>
                                            <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-red-700 text-white hover:bg-red-800 focus:outline-none focus:bg-red-900 disabled:opacity-50 disabled:pointer-events-none mr-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M7.498 15.25H4.372c-1.026 0-1.945-.694-2.054-1.715a12.137 12.137 0 0 1-.068-1.285c0-2.848.992-5.464 2.649-7.521C5.287 4.247 5.886 4 6.504 4h4.016a4.5 4.5 0 0 1 1.423.23l3.114 1.04a4.5 4.5 0 0 0 1.423.23h1.294M7.498 15.25c.618 0 .991.724.725 1.282A7.471 7.471 0 0 0 7.5 19.75 2.25 2.25 0 0 0 9.75 22a.75.75 0 0 0 .75-.75v-.633c0-.573.11-1.14.322-1.672.304-.76.93-1.33 1.653-1.715a9.04 9.04 0 0 0 2.86-2.4c.498-.634 1.226-1.08 2.032-1.08h.384m-10.253 1.5H9.7m8.075-9.75c.01.05.027.1.05.148.593 1.2.925 2.55.925 3.977 0 1.487-.36 2.89-.999 4.125m.023-8.25c-.076-.365.183-.75.575-.75h.908c.889 0 1.713.518 1.972 1.368.339 1.11.521 2.287.521 3.507 0 1.553-.295 3.036-.831 4.398-.306.774-1.086 1.227-1.918 1.227h-1.053c-.472 0-.745-.556-.5-.96a8.95 8.95 0 0 0 .303-.54" />
                                                </svg>
                                                Reject
                                            </button>
                                        </div>
                                        <div class="lg:flex gap-x-10">
                                            <div class="flex-1 space-y-4 text-gray-800">
                                                <div>
                                                    <p class="text-blue-600 text-justify text-sm"><i><span class="text-red-600 font-semibold w-full">Note:</span> Click the receipt to enlarge it.</i></p>
                                                    <a id="viewImageLink" href="#" target="_blank">
                                                        <img id="receiptImg" name="receiptImg"
                                                            class="w-auto h-[292px] object-cover object-center rounded-lg border border-slate-600"
                                                            src="../../src/imgs-vid/receipts/sample.jpg" alt="Receipt">
                                                    </a>
                                                </div>
                                                <div id="gcashModeBlock" name="gcashModeBlock">
                                                    <label for="view_referenceNum" class="text-base font-medium">
                                                        Reference No.
                                                    </label>
                                                    <input required id="view_referenceNum" name="view_referenceNum" type="text" class="uppercase pe-9 w-full border-b border-gray-200 sm:text-xl focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none focus:outline-none placeholder-gray-800" readonly>
                                                </div>
                                                <div id="paymentMethodBlock">
                                                    <label for="view_paymentMethod" class="text-base font-medium">
                                                        Payment Method
                                                    </label>
                                                    <input required id="view_paymentMethod" name="view_paymentMethod" type="text" class="uppercase pe-9 w-full border-b border-gray-200  sm:text-xl focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none focus:outline-none placeholder-gray-800" readonly>
                                                </div>
                                            </div>

                                            <div class="flex-1 space-y-4 text-gray-800">
                                                <div>
                                                    <h2 class="font-bold text-xl underline underline-offset-4 pt-12 lg:pt-0 mb-4">Personal Information</h2>
                                                </div>
                                                <div>
                                                    <label for="view_fullName" class="text-base font-medium">
                                                        Full Name
                                                    </label>
                                                    <input required id="view_fullName" name="view_fullName" type="text" class="uppercase pe-9 w-full border-b border-gray-200 sm:text-xl focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none focus:outline-none placeholder-gray-800" readonly>
                                                </div>
                                                <div class="flex ">
                                                    <div class="mr-3 flex-1">
                                                        <label for="view_userAge" class="text-base font-medium">
                                                            Age
                                                        </label>
                                                        <input required id="view_userAge" name="view_userAge" type="text" class=" py-1 uppercase pe-9 w-full border-b border-gray-200 sm:text-xl focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none focus:outline-none placeholder-gray-800" readonly>
                                                    </div>
                                                    <div class="flex-1">
                                                        <label for="view_gender" class="text-base font-medium">
                                                            Gender
                                                        </label>
                                                        <input required id="view_gender" name="view_gender" type="text" class=" py-1 uppercase pe-9 w-full border-b border-gray-200 sm:text-xl focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none focus:outline-none placeholder-gray-800" readonly>
                                                    </div>
                                                </div>
                                                <div>
                                                    <label for="view_contactNum" class="text-base font-medium">
                                                        Contact Number
                                                    </label>
                                                    <input required id="view_contactNum" name="view_contactNum" type="text" class="uppercase pe-9 w-full border-b border-gray-200 sm:text-xl focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none focus:outline-none placeholder-gray-800" readonly>
                                                </div>
                                                <div>
                                                    <label for="view_address" class="text-base font-medium">
                                                        Address
                                                    </label>
                                                    <input required id="view_address" name="view_address" type="text" class="uppercase pe-9 w-full border-b border-gray-200  sm:text-xl focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none focus:outline-none placeholder-gray-800" readonly>
                                                </div>
                                                <div>
                                                    <label for="view_documentType" class="text-base font-medium">
                                                        Document Type
                                                    </label>
                                                    <input required id="view_documentType" name="view_documentType" type="text" class="uppercase pe-9 w-full border-b border-gray-200  sm:text-xl focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none focus:outline-none placeholder-gray-800" readonly>
                                                </div>
                                                <div>
                                                    <label for="view_documentPurpose" class="text-base font-medium">
                                                        Purpose
                                                    </label>
                                                    <input required id="view_documentPurpose" name="view_documentPurpose" type="text" class="uppercase pe-9 w-full border-b border-gray-200  sm:text-xl focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none focus:outline-none placeholder-gray-800" readonly>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t">
                                    <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none" data-hs-overlay="#displayModal">
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="my-5 py-5 shadow-lg rounded-md bg-sla">
                <div class="px-4">
                    <h1 class="text-gray-800 text-lg font-semibold mb-5 underline underline-offset-4">Requested Documents</h1>
                    <!-- DataTable -->
                    <table id="displaysData" class="w-full text-gray-800">
                        <thead>
                            <tr>
                                <th>Action</th>
                                <th>Name</th>
                                <th>Age</th>
                                <th>Gender</th>
                                <th>Address</th>
                                <th>Document</th>
                                <th>Purpose Request</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <?php require("../../includes/footer.php") ?>
    <script src="script.js"></script>
    <script src="../../node_modules/preline/dist/preline.js"></script>
</body>

</html>