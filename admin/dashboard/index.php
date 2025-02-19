<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Barangay Labuay</title>

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
                        Dashboard
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
                <h1 class="text-2xl font-extrabold text-gray-800 underline">Dashboard</h1>
            </div>
            <div>
                <!-- Card Section -->
                <div class="py-2 lg:py-4 mx-auto">
                    <!-- Grid -->
                    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">
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
                                            72,540
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
                                        <h3 class="text-xl font-medium text-slate-800 ">
                                            29.4%
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
                                        <h3 class="text-xl font-medium text-slate-800 ">
                                            29.4%
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
                                            72,540
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Card -->

                        <!-- Card -->
                        <div class="flex flex-col bg-blue-600 border shadow-md rounded-xl min-w-48">
                            <div class="p-4 md:p-5 flex gap-x-4">
                                <div class="shrink-0 flex justify-center items-center size-[46px] bg-gray-100 rounded-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="shrink-0 size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z" />
                                    </svg>

                                </div>

                                <div class="grow">
                                    <div class="flex items-center gap-x-2">
                                        <p class="text-xs uppercase tracking-wide text-slate-200 font-bold">
                                            Requested Documents
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
                                            72,540
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
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="shrink-0 size-6">
                                        <path d="M19.5 21a3 3 0 0 0 3-3v-4.5a3 3 0 0 0-3-3h-15a3 3 0 0 0-3 3V18a3 3 0 0 0 3 3h15ZM1.5 10.146V6a3 3 0 0 1 3-3h5.379a2.25 2.25 0 0 1 1.59.659l2.122 2.121c.14.141.331.22.53.22H19.5a3 3 0 0 1 3 3v1.146A4.483 4.483 0 0 0 19.5 9h-15a4.483 4.483 0 0 0-3 1.146Z" />
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
                                            72,540
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
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="shrink-0 size-6">
                                        <path d="M19.5 21a3 3 0 0 0 3-3v-4.5a3 3 0 0 0-3-3h-15a3 3 0 0 0-3 3V18a3 3 0 0 0 3 3h15ZM1.5 10.146V6a3 3 0 0 1 3-3h5.379a2.25 2.25 0 0 1 1.59.659l2.122 2.121c.14.141.331.22.53.22H19.5a3 3 0 0 1 3 3v1.146A4.483 4.483 0 0 0 19.5 9h-15a4.483 4.483 0 0 0-3 1.146Z" />
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
                                            72,540
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
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="shrink-0 size-6">
                                        <path d="M19.5 21a3 3 0 0 0 3-3v-4.5a3 3 0 0 0-3-3h-15a3 3 0 0 0-3 3V18a3 3 0 0 0 3 3h15ZM1.5 10.146V6a3 3 0 0 1 3-3h5.379a2.25 2.25 0 0 1 1.59.659l2.122 2.121c.14.141.331.22.53.22H19.5a3 3 0 0 1 3 3v1.146A4.483 4.483 0 0 0 19.5 9h-15a4.483 4.483 0 0 0-3 1.146Z" />
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
                                            72,540
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Card -->

                        <!-- Card -->
                        <div class="flex flex-col bg-red-700 border shadow-md rounded-xl min-w-48">
                            <div class="p-4 md:p-5 flex gap-x-4">
                                <div class="shrink-0 flex justify-center items-center size-[46px] bg-gray-100 rounded-lg">
                                    <svg class="shrink-0 size-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 0 0 .75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 0 0-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0 1 12 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 0 1-.673-.38m0 0A2.18 2.18 0 0 1 3 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 0 1 3.413-.387m7.5 0V5.25A2.25 2.25 0 0 0 13.5 3h-3a2.25 2.25 0 0 0-2.25 2.25v.894m7.5 0a48.667 48.667 0 0 0-7.5 0M12 12.75h.008v.008H12v-.008Z" />
                                    </svg>
                                </div>

                                <div class="grow">
                                    <div class="flex items-center gap-x-2">
                                        <p class="text-xs uppercase tracking-wide text-slate-200 font-bold">
                                            Blotter Records
                                        </p>
                                        <div class="hs-tooltip">
                                            <div class="hs-tooltip-toggle">
                                                <svg class="shrink-0 size-4 text-slate-200" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <circle cx="12" cy="12" r="10" />
                                                    <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3" />
                                                    <path d="M12 17h.01" />
                                                </svg>
                                                <span class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-2 px-2 bg-gray-900 text-xs font-medium text-white rounded shadow-sm" role="tooltip">
                                                    The total number of blotter records in the barangay
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-1 flex items-center gap-x-2">
                                        <h3 class="text-xl sm:text-2xl font-medium text-slate-200">
                                            72,540
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Card -->

                        <!-- Card -->
                        <div class="flex flex-col bg-green-800 border shadow-md rounded-xl min-w-48">
                            <div class="p-4 md:p-5 flex gap-x-4">
                                <div class="shrink-0 flex justify-center items-center size-[46px] bg-gray-100 rounded-lg">
                                    <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard2-check" viewBox="0 0 16 16">
                                        <path d="M9.5 0a.5.5 0 0 1 .5.5.5.5 0 0 0 .5.5.5.5 0 0 1 .5.5V2a.5.5 0 0 1-.5.5h-5A.5.5 0 0 1 5 2v-.5a.5.5 0 0 1 .5-.5.5.5 0 0 0 .5-.5.5.5 0 0 1 .5-.5z" />
                                        <path d="M3 2.5a.5.5 0 0 1 .5-.5H4a.5.5 0 0 0 0-1h-.5A1.5 1.5 0 0 0 2 2.5v12A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-12A1.5 1.5 0 0 0 12.5 1H12a.5.5 0 0 0 0 1h.5a.5.5 0 0 1 .5.5v12a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5z" />
                                        <path d="M10.854 7.854a.5.5 0 0 0-.708-.708L7.5 9.793 6.354 8.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0z" />
                                    </svg>
                                </div>

                                <div class="grow">
                                    <div class="flex items-center gap-x-2">
                                        <p class="text-xs uppercase tracking-wide font-bold text-slate-200">
                                            Blotter Resolved
                                        </p>
                                        <div class="hs-tooltip">
                                            <div class="hs-tooltip-toggle">
                                                <svg class="shrink-0 size-4 text-slate-200" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <circle cx="12" cy="12" r="10" />
                                                    <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3" />
                                                    <path d="M12 17h.01" />
                                                </svg>
                                                <span class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-2 px-2 bg-gray-900 text-xs font-medium text-white rounded shadow-sm" role="tooltip">
                                                    The total number of blotter records resolved in the barangay
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-1 flex items-center gap-x-2">
                                        <h3 class="text-xl sm:text-2xl font-medium text-slate-200">
                                            72,540
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Card -->

                        <!-- Card -->
                        <div class="flex flex-col bg-green-700 border shadow-md rounded-xl min-w-48 overflow-hidden">
                            <div class="p-4 md:p-5 flex gap-x-4">
                                <div class="shrink-0 flex justify-center items-center size-[46px] bg-gray-100 rounded-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="shrink-0 size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0 1 15.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 0 1 3 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 0 0-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 0 1-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 0 0 3 15h-.75M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm3 0h.008v.008H18V10.5Zm-12 0h.008v.008H6V10.5Z" />
                                    </svg>
                                </div>

                                <div class="grow">
                                    <div class="flex items-center gap-x-2">
                                        <p class="text-xs uppercase tracking-wide text-slate-200 font-bold">
                                            Transaction Revenue
                                        </p>
                                        <div class="hs-tooltip">
                                            <div class="hs-tooltip-toggle">
                                                <svg class="shrink-0 size-4 text-slate-200" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <circle cx="12" cy="12" r="10" />
                                                    <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3" />
                                                    <path d="M12 17h.01" />
                                                </svg>
                                                <span class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-2 px-2 bg-gray-900 text-xs font-medium text-white rounded shadow-sm" role="tooltip">
                                                    The total number of transaction revenue in the barangay
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-1 flex items-center gap-x-2">
                                        <h3 class="text-xl sm:text-2xl font-medium text-slate-200">
                                            72,540
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Card  -->

                        <!-- Card -->
                        <div class="flex flex-col bg-green-700 border shadow-md rounded-xl min-w-48 overflow-hidden">
                            <div class="p-4 md:p-5 flex gap-x-4">
                                <div class="shrink-0 flex justify-center items-center size-[46px] bg-gray-100 rounded-lg">
                                    <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bank" viewBox="0 0 16 16">
                                        <path d="m8 0 6.61 3h.89a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v7a.5.5 0 0 1 .485.38l.5 2a.498.498 0 0 1-.485.62H.5a.498.498 0 0 1-.485-.62l.5-2A.5.5 0 0 1 1 13V6H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 3h.89zM3.777 3h8.447L8 1zM2 6v7h1V6zm2 0v7h2.5V6zm3.5 0v7h1V6zm2 0v7H12V6zM13 6v7h1V6zm2-1V4H1v1zm-.39 9H1.39l-.25 1h13.72z" />
                                    </svg>
                                </div>

                                <div class="grow">
                                    <div class="flex items-center gap-x-2">
                                        <p class="text-xs uppercase tracking-wide text-slate-200 font-bold">
                                            Monthly Revenue
                                        </p>
                                        <div class="hs-tooltip">
                                            <div class="hs-tooltip-toggle">
                                                <svg class="shrink-0 size-4 text-slate-200" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <circle cx="12" cy="12" r="10" />
                                                    <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3" />
                                                    <path d="M12 17h.01" />
                                                </svg>
                                                <span class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded shadow-sm" role="tooltip">
                                                    The monthly revenue in the barangay
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-1 flex items-center gap-x-2">
                                        <h3 class="text-xl sm:text-2xl font-medium text-slate-200">
                                            72,540
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Card  -->
                    </div>
                    <!-- End Grid -->
                </div>
                <!-- End Card Section -->
            </div>
            <div class="my-5 py-5 shadow-md rounded-md bg-slate-200">
                <div class="px-4">
                    <h1 class="text-lg font-semibold mb-5 underline">Transaction History</h1>
                    <?php require("transaction-Table.php")?>


                </div>
            </div>
        </div>
    </div>

    <?php require("../../includes/footer.php") ?>

    <script type="text/javascript" src="script.js"></script>

</html>