<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Barangay Labuay</title>

    <!-- Tailwind CSS -->
    <link href="../../src/output.css" rel="stylesheet">

    <!-- Google Font: Raleway -->
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/9fc27c8cb3.js" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.2.1/js/dataTables.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.2.1/css/dataTables.dataTables.css">
    <link rel="stylesheet" href="../../node_modules/apexcharts/dist/apexcharts.css">

    <script src="../../node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <style>
        table.dataTable th.dt-type-numeric,
        table.dataTable th.dt-type-date,
        table.dataTable td.dt-type-numeric,
        table.dataTable td.dt-type-date {
            text-align: start;
        }
    </style>

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.2.2/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.2.2/js/dataTables.buttons.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.2.2/js/buttons.dataTables.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.2.2/js/buttons.print.min.js"></script>
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
        <div class="px-8 lg:py-8">
            <div class="hidden lg:block">
                <h1 class="text-2xl font-extrabold text-gray-800 underline">Dashboard</h1>
            </div>
            <div>
                <div class="py-2 lg:py-3 mx-auto">
                    <!-- Grid -->
                    <div class="grid sm:grid-cols-2 lg:grid-cols-12 gap-4 sm:gap-6">
                        <div class="lg:col-span-4 h-full flex flex-col justify-between gap-y-6">
                            <!-- Card -->
                            <div class="border-l-4 border-l-green-600 flex flex-col bg-gray-200 border shadow-md rounded-xl h-full">
                                <div class="p-4">
                                    <div class="inline-flex gap-x-3 items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-9">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0 1 15.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 0 1 3 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 0 0-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 0 1-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 0 0 3 15h-.75M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm3 0h.008v.008H18V10.5Zm-12 0h.008v.008H6V10.5Z" />
                                        </svg>
                                        <p class="text-left text-lg uppercase tracking-wide font-bold text-gray-800">
                                            Total Revenue
                                        </p>
                                    </div>
                                </div>
                                <div class="mx-auto pb-7">
                                    <p id="revenueTotal" class="text-5xl uppercase tracking-wide font-semibold text-gray-800"></p>
                                </div>
                                <span class="px-4 text-end text-lg uppercase tracking-wide font-semibold text-gray-800">Php</span>
                            </div>
                            <!-- End Card -->

                            <!-- Card -->
                            <div class="border-l-4 border-l-green-600 flex flex-col bg-gray-200 border shadow-md rounded-xl h-full">
                                <div class="p-4">
                                    <div class="inline-flex gap-x-3 items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-9">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0 1 15.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 0 1 3 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 0 0-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 0 1-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 0 0 3 15h-.75M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm3 0h.008v.008H18V10.5Zm-12 0h.008v.008H6V10.5Z" />
                                        </svg>
                                        <p class="text-left text-lg uppercase tracking-wide font-bold text-gray-800">
                                            Monthly Revenue
                                        </p>
                                    </div>
                                </div>
                                <div class="mx-auto pb-7">
                                    <p id="revenueMonthly" class="text-5xl uppercase tracking-wide font-semibold text-gray-800"></p>
                                </div>
                                <span class="px-4 text-end text-lg uppercase tracking-wide font-semibold text-gray-800">Php</span>
                            </div>
                            <!-- End Card -->
                        </div>

                        <div class="lg:col-span-8">
                            <!-- Card -->
                            <div class="border-l-4 border-l-green-600 flex flex-col bg-gray-200 border shadow-md rounded-xl">
                                <div class="p-4">
                                    <div class="flex justify-between pb-4">
                                        <div class="flex items-center gap-x-2">
                                            <p class="text-left text-lg uppercase tracking-wide font-bold text-gray-800">
                                                Revenue Over Time
                                            </p>
                                        </div>
                                        <div>
                                            <select id="yearRevenue" name="yearRevenue" class="py-1 px-2 block w-32 border border-gray-200 rounded-md text-base focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none focus:outline-none">
                                                <?php
                                                include("../../src/database.php");

                                                $query = $conn->prepare("SELECT DISTINCT DATE_FORMAT(STR_TO_DATE(printrequest_docs,'%d-%M-%Y %h:%i:%s %p'), '%Y') AS year FROM resident_request_docs");
                                                $query->execute();
                                                $result = $query->get_result();

                                                while ($row = $result->fetch_assoc()) {
                                                    echo '<option value="' . $row['year'] . '">' . "Year-" . $row['year'] . '</option>';
                                                }

                                                echo json_encode([
                                                    'year' => 'year'
                                                ]);
                                                $result->close();
                                                $conn->close();
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="flex items-center px-4 gap-x-4 justify-center lg:justify-start">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-9">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0 1 15.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 0 1 3 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 0 0-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 0 1-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 0 0 3 15h-.75M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm3 0h.008v.008H18V10.5Zm-12 0h.008v.008H6V10.5Z" />
                                        </svg>
                                        <p id="yearlyRevenue" class="text-3xl tracking-wide font-semibold text-gray-800"></p>
                                    </div>
                                    <div class="">
                                        <div id="hs-revenueOverTime"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Card -->
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <!-- Card Section -->
                <div class="py-2 lg:py-4 mx-auto">
                    <!-- Grid -->
                    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6">
                        <!-- Residents, Officials and Staff and Gender Data -->
                        <?php include('data_first_row.php') ?>
                        <!-- End of Residents, Officials and Staff and Gender Data -->

                        <!-- Certificates, Clearances and Age Data -->
                        <?php include('data_second_row.php') ?>
                        <!-- End of Certificates, Clearances and Age Data -->

                        <!-- Blotter Record Data -->
                        <?php include('data_third_row.php') ?>
                        <!-- End of Blotter Record Data -->
                    </div>
                    <!-- End Grid -->
                </div>
                <!-- End Card Section -->
            </div>

            <div class="my-5 py-5 shadow-md rounded-md bg-slate-200 overflow-x-auto">
                <div class="px-4">
                    <div class="lg:flex justify-center lg:justify-between items-center">
                        <h1 class="text-lg font-semibold underline">Transaction History - Requested Documents</h1>
                        <div class="flex justify-center mt-3 lg:mt-0">
                            <button type="submit" id="btn-requestCopy" name="btn-excelDownload" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-green-800 text-white hover:bg-green-900 focus:outline-none focus:bg-green-800 disabled:opacity-50 disabled:pointer-events-none mr-1">
                                Copy
                            </button>
                            <button type="submit" id="btn-requestExcel" name="btn-pdfDownload" class="py-2 px-2 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-green-800 text-white hover:bg-green-900 focus:outline-none focus:bg-green-800 disabled:opacity-50 disabled:pointer-events-none mr-1">
                                Excel
                            </button>
                            <button type="submit" id="btn-requestPdf" name="btn-excelDownload" class="py-2 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-green-800 text-white hover:bg-green-900 focus:outline-none focus:bg-green-800 disabled:opacity-50 disabled:pointer-events-none mr-1">
                                Pdf
                            </button>
                            <button type="submit" id="btn-requestPrint" name="btn-pdfDownload" class="py-2 px-3 gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-green-800 text-white hover:bg-green-900 focus:outline-none focus:bg-green-800 disabled:opacity-50 disabled:pointer-events-none mr-1">
                                Print
                            </button>
                        </div>
                    </div>
                    <?php include("transaction_requestedDocs.php") ?>
                </div>
            </div>

            <div class="my-5 py-5 shadow-md rounded-md bg-slate-200 overflow-x-auto">
                <div class="px-4">
                    <div class="lg:flex justify-center lg:justify-between items-center">
                        <h1 class="text-lg font-semibold underline">Transaction History - Blotter Records</h1>
                        <div class="flex justify-center mt-3 lg:mt-0">
                            <button type="submit" id="btn-blotterCopy" name="btn-excelDownload" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-green-800 text-white hover:bg-green-900 focus:outline-none focus:bg-green-800 disabled:opacity-50 disabled:pointer-events-none mr-1">
                                Copy
                            </button>
                            <button type="submit" id="btn-blotterExcel" name="btn-pdfDownload" class="py-2 px-2 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-green-800 text-white hover:bg-green-900 focus:outline-none focus:bg-green-800 disabled:opacity-50 disabled:pointer-events-none mr-1">
                                Excel
                            </button>
                            <button type="submit" id="btn-blotterPdf" name="btn-excelDownload" class="py-2 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-green-800 text-white hover:bg-green-900 focus:outline-none focus:bg-green-800 disabled:opacity-50 disabled:pointer-events-none mr-1">
                                Pdf
                            </button>
                            <button type="submit" id="btn-blotterPrint" name="btn-pdfDownload" class="py-2 px-3 gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-green-800 text-white hover:bg-green-900 focus:outline-none focus:bg-green-800 disabled:opacity-50 disabled:pointer-events-none mr-1">
                                Print
                            </button>
                        </div>
                    </div>
                    <?php include("transaction_blotterRecord.php") ?>
                </div>
            </div>
        </div>
    </div>

    <?php require("../../includes/footer.php") ?>
    <script src="../../node_modules/lodash/lodash.min.js"></script>
    <script src="../../node_modules/apexcharts/dist/apexcharts.min.js"></script>
    <script src="../../node_modules/preline/dist/helper-apexcharts.js"></script>
    <script type="text/javascript" src="script.js"></script>



</html>