<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blotter - Barangay Labuay</title>

    <!-- Tailwind CSS -->
    <link href="../../src/output.css" rel="stylesheet">

    <!-- Google Font: Raleway -->
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/9fc27c8cb3.js" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.2.1/js/dataTables.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.2.1/css/dataTables.dataTables.css">

    <script src="../../node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>

    <?php include('db_blotter_record.php') ?>

    <style>
        table.dataTable th.dt-type-numeric,
        table.dataTable th.dt-type-date,
        table.dataTable td.dt-type-numeric,
        table.dataTable td.dt-type-date {
            text-align: start;
        }
    </style>
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
                        Blotter Record
                    </li>
                </ol>
                <!-- End Breadcrumb -->
            </div>
        </div>
        <!-- End Breadcrumb -->
    </div>

    <?php include('modal_blotter.php') ?>
    <!-- Content -->
    <div class="w-full lg:ps-64 min-h-screen">
        <div class="px-8 lg:py-8">
            <div class="hidden lg:block">
                <h1 class="text-2xl font-extrabold text-gray-800 underline">Blotter Record</h1>
            </div>
            <div class="pt-10">
                <button type="submit" id="btn-addBlotter" class="w-auto border inline-flex items-center px-3 py-2 rounded-md text-sm text-white bg-slate-600 hover:bg-slate-500"
                    aria-haspopup="dialog" aria-expanded="false" aria-controls="displayModalBlotter" data-hs-overlay="#displayModalBlotter">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 mr-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                    Add Blotter
                </button>
            </div>
            <div class="border-l-4 border-l-green-600 my-5 py-5 shadow-lg rounded-md overflow-x-auto">
                <div class="px-4">
                    <h1 class="text-gray-800 text-lg font-semibold mb-5">Blotter Record</h1>
                    <!-- DataTable -->
                    <table id="displayBlotter" class="w-full text-gray-800 hover">
                        <thead>
                            <tr>
                                <th>Actions</th>
                                <th>#</th>
                                <th>Complainant Name</th>
                                <th>Incident Type</th>
                                <th>Incident Date</th>
                                <th>Date Filed</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?php require("../../includes/footer.php") ?>
    <script src="script.js"></script>
</body>