<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings - Barangay Labuay</title>

    <!-- Tailwind CSS -->
    <link href="../src/output.css" rel="stylesheet">

    <!-- Google Font: Raleway -->
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/9fc27c8cb3.js" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.2.1/js/dataTables.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.2.1/css/dataTables.dataTables.css">

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
            <div class="hidden lg:block">
                <h1 class="text-2xl font-extrabold text-gray-800 underline">Settings</h1>
            </div>
            <div>
                <div class="mt-12 grid sm:grid-cols-2 lg:grid-cols-3 items-center gap-4 lg:gap-8">
                    <!-- Icon Block -->
                    <a class="group flex flex-col h-full text-center rounded-lg border hover:bg-slate-200 focus:outline-none focus:bg-gray-100 p-4 sm:p-6" href="#">
                        <svg class="size-9 mx-auto text-gray-800" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0ZM3 19.235v-.11a6.375 6.375 0 0 1 12.75 0v.109A12.318 12.318 0 0 1 9.374 21c-2.331 0-4.512-.645-6.374-1.766Z" />
                        </svg>

                        <div class="mt-5">
                            <h3 class="text-lg font-semibold text-gray-800">Add account</h3>
                            <p class="mt-1 text-gray-500 ">Add account login such as administrator, staff, and other barangay members.</p>
                            <p class="mt-5 inline-flex items-center gap-x-1 font-semibold text-slate-600">
                                Click Here
                                <svg class="shrink-0 size-4 transition ease-in-out group-hover:translate-x-1 group-focus:translate-x-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m9 18 6-6-6-6" />
                                </svg>
                            </p>
                        </div>
                    </a>
                    <!-- End Icon Block -->

                    <!-- Icon Block -->
                    <a class="group flex flex-col h-full text-center rounded-lg border hover:bg-slate-200 focus:outline-none focus:bg-gray-100 p-4 sm:p-6" href="#">
                        <svg class="size-9 text-gray-800 mx-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
                        </svg>

                        <div class="mt-5">
                            <h3 class="text-lg font-semibold text-gray-800">Help and Support</h3>
                            <p class="mt-1 text-gray-500">System Documentation, User guides and manuals. Contact developer support.</p>
                            <p class="mt-5 inline-flex items-center gap-x-1 font-semibold text-slate-600">
                                Click Here
                                <svg class="shrink-0 size-4 transition ease-in-out group-hover:translate-x-1 group-focus:translate-x-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m9 18 6-6-6-6" />
                                </svg>
                            </p>
                        </div>
                    </a>
                    <!-- End Icon Block -->

                    <!-- Icon Block -->
                    <!-- <a class="group flex flex-col h-full text-center rounded-lg border hover:bg-slate-200 focus:outline-none focus:bg-gray-100 p-4 sm:p-6" href="#">
                        <svg class="size-9 text-gray-800 mx-auto" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m7 11 2-2-2-2" />
                            <path d="M11 13h4" />
                            <rect width="18" height="18" x="3" y="3" rx="2" ry="2" />
                        </svg>
                        <div class="mt-5">
                            <h3 class="text-lg font-semibold text-gray-800">Developer APIs</h3>
                            <p class="mt-1 text-gray-500">Check out our development quickstart guide.</p>
                            <p class="mt-5 inline-flex items-center gap-x-1 font-semibold text-slate-600">
                                Click Here
                                <svg class="shrink-0 size-4 transition ease-in-out group-hover:translate-x-1 group-focus:translate-x-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m9 18 6-6-6-6" />
                                </svg>
                            </p>
                        </div>
                    </a> -->
                    <!-- End Icon Block -->
                </div>
            </div>
        </div>
    </div>
    </div>

    <?php require("../includes/footer.php") ?>

</html>