<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add account - Barangay Labuay</title>

    <!-- Tailwind CSS -->
    <link href="../src/output.css" rel="stylesheet">
    <link rel="stylesheet" href="../src/style.css">

    <!-- Google Font: Raleway -->
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/9fc27c8cb3.js" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.2.1/js/dataTables.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.2.1/css/dataTables.dataTables.css">

    <script src="../node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>

    <style>
        table.dataTable th.dt-type-numeric,
        table.dataTable th.dt-type-date,
        table.dataTable td.dt-type-numeric,
        table.dataTable td.dt-type-date {
            text-align: start;
        }
    </style>

    <?php include("routes.php"); ?>

</head>

<body class="font-sans">

    <?php require("../includes/sidebar.php"); ?>
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
                        Settings
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
            <div class="hidden lg:flex items-center">
                <a href="../settings">
                    <h1 class="text-xl font-extrabold text-blue-600 underline">Settings</h1>
                </a>
                <svg class="shrink-0 mx-2 overflow-visible size-4 text-gray-800" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                </svg>
                <h1 class="text-xl font-extrabold text-gray-800">Add account</h1>
            </div>
            <div class="pt-5">
                <div class="flex gap-5">
                    <div class="py-2 px-5 border-white rounded-xl shadow-lg basis-1/3 shrink overflow-y-auto h-screen">
                        <h3 class="text-lg font-bold">Add User Account</h3>
                        <form action="" method="POST">
                            <div class="space-y-6 mt-4">
                                <div class="space-y-1">
                                    <label for="select-user-type" class="flex text-base font-medium text-gray-800 mt-2.5">
                                        User Type<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-asterisk size-2 mx-1 text-red-600" viewBox="0 0 16 16">
                                            <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1" />
                                        </svg>
                                    </label>
                                    <select required id="select-user-type" name="userType" class="py-2 px-3 pe-9 block w-full border border-gray-200 rounded-lg text-base focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none focus:outline-none">
                                        <option selected disabled>Select user type</option>
                                        <option value="1">Admin</option>
                                        <option value="2">Stafff</option>
                                        <option value="3">Barangay Member</option>
                                        <option value="4">Others</option>
                                    </select>
                                </div>
                                <div class="space-y-1">
                                    <label for="firstName-input" class="flex text-base font-medium text-gray-800 mt-2.5">
                                        First Name
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-asterisk size-2 mx-1 text-red-600" viewBox="0 0 16 16">
                                            <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1" />
                                        </svg>
                                    </label>
                                    <input required id="firstName-input" name="firstName" type="text" class="py-2 px-3 pe-9 block w-full border border-gray-200 rounded-lg text-base focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none focus:outline-none" placeholder="Enter first name">
                                </div>
                                <div class="space-y-1">
                                    <label for="lastName-input" class="flex text-base font-medium text-gray-800 mt-2.5">
                                        Last Name
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-asterisk size-2 mx-1 text-red-600" viewBox="0 0 16 16">
                                            <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1" />
                                        </svg>
                                    </label>
                                    <input required id="lastName-input" name="lastName" type="text" class="py-2 px-3 pe-9 block w-full border border-gray-200 rounded-lg text-base focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none focus:outline-none" placeholder="Enter last name">
                                </div>
                                <div class="space-y-1">
                                    <label for="contactNumber-input" class="flex text-base font-medium text-gray-800 mt-2.5">
                                        Contact Number
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-asterisk size-2 mx-1 text-red-600" viewBox="0 0 16 16">
                                            <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1" />
                                        </svg>
                                    </label>
                                    <input required id="contactNumber-input" name="contactNum" type="number" class="py-2 px-3 pe-9 block w-full border border-gray-200 rounded-lg text-base focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none focus:outline-none" placeholder="Enter contact number">
                                </div>
                                <div class="space-y-1">
                                    <label for="address-input" class="flex text-base font-medium text-gray-800 mt-2.5">
                                        Address
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-asterisk size-2 mx-1 text-red-600" viewBox="0 0 16 16">
                                            <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1" />
                                        </svg>
                                    </label>
                                    <input required id="address-input" name="userAddress" type="text" class="py-2 px-3 pe-9 block w-full border border-gray-200 rounded-lg text-base focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none focus:outline-none" placeholder="Enter address">
                                </div>
                                <div class="space-y-1">
                                    <label for="username-input" class="flex text-base font-medium text-gray-800 mt-2.5">
                                        Username
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-asterisk size-2 mx-1 text-red-600" viewBox="0 0 16 16">
                                            <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1" />
                                        </svg>
                                    </label>
                                    <input required id="username-input" name="username" type="text" class="py-2 px-3 pe-9 block w-full border border-gray-200 rounded-lg text-base focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none focus:outline-none" placeholder="Enter username">
                                </div>
                                <div class="space-y-1">
                                    <label for="password-input" class="flex text-base font-medium text-gray-800 mt-2.5">
                                        Password
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-asterisk size-2 mx-1 text-red-600" viewBox="0 0 16 16">
                                            <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1" />
                                        </svg>
                                    </label>
                                    <input required id="password-input" name="password" type="text" class="py-2 px-3 pe-9 block w-full border border-gray-200 rounded-lg text-base focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none focus:outline-none" placeholder="Enter password">
                                </div>
                                <div class="pb-8">
                                    <button type="submit" name="btn-addAccount" class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-slate-600 text-slate-200 hover:bg-slate-500 hover:text-slate-300 focus:outline-none focus:bg-slate-500 disabled:opacity-50 disabled:pointer-events-none">
                                        Submit application
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="p-4 border-white rounded-xl shadow-lg basis-2/3 h-screen overflow-y-auto">
                        <form action="" method="POST">
                            <div class="flex mb-4 space-x-2">
                                <button type="submit" class="py-2 px-3 inline-flex items-center gap-x-2 text-base font-medium rounded-lg border border-transparent bg-green-800 text-white hover:bg-green-900 focus:outline-none focus:bg-green-900 disabled:opacity-50 disabled:pointer-events-none">
                                    Print
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16">
                                        <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1" />
                                        <path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1" />
                                    </svg>
                                </button>
                                <button type="submit" name="btn-delete" class="py-2 px-3 inline-flex items-center gap-x-2 text-base font-medium rounded-lg border border-transparent bg-red-700 text-white hover:bg-red-800 focus:outline-none focus:bg-red-900 disabled:opacity-50 disabled:pointer-events-none">
                                    Delete
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                        <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5" />
                                    </svg>
                                </button>
                            </div>
                        </form>

                        <table id="addAccount-table" class="w-full table hover stripe">
                            <thead>
                                <tr>
                                    <th>Action</th>
                                    <th>No.</th>
                                    <th>Name</th>
                                    <th>Contact Number</th>
                                    <th>Date Created</th>
                                </tr>
                            </thead>
                        </table>
                        <?php require("modal_account.php") ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
    <?php require("../includes/footer.php") ?>
</body>

</html>