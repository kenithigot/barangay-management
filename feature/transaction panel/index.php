<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment - Barangay Labuay</title>

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

    <?php include("db_save_qrcode.php") ?>
    <?php include("routes.php") ?>

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
                        Payment
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
                <h1 class="text-2xl font-extrabold text-gray-800 underline">Payment</h1>
            </div>
            <div class="grid md:grid-cols-12 lg:grid-cols-12 gap-4 mt-8">
                <div class="lg:col-span-12">
                    <h3 class="text-lg font-semibold text-gray-800">Barangay Documents Prices</h3>
                    <div class="flex text-sm">
                        <span class="text-blue-800 lg:indent-2">Note:</span>
                        <span class=" text-red-600 lg:indent-1"><i>Click the edit icon on each document to edit it's price.</i></span>

                    </div>
                </div>
                <?php

                include("../../src/database.php");

                function fetchDocumentPrice($conn, $documentClassification)
                {
                    $sql = "SELECT documentPrice FROM document_types WHERE documentClassification = ?";
                    $stmt = $conn->prepare($sql);
                    $stmt->bind_param("s", $documentClassification);
                    $stmt->execute();
                    $result = $stmt->get_result();

                    if ($result && $result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        return $row['documentPrice'];
                    } else {
                        return "N/A";
                    }
                }

                $barangayCertPrice = fetchDocumentPrice($conn, 'Barangay Certificate');
                $certificateIndigencyPrice = fetchDocumentPrice($conn, 'Certificate of Indigency');
                $businessClearancePrice = fetchDocumentPrice($conn, 'Business Clearance');

                include("modal.php")
                ?>
                <div class="lg:col-span-4">
                    <!-- Card -->
                    <div class="flex flex-col bg-green-700 border shadow-md rounded-xl overflow-hidden">
                        <div class="p-4 md:p-5 flex gap-x-4">
                            <div class="shrink-0 flex justify-center items-center size-[46px] bg-gray-100 rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-gray-800">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 9.776c.112-.017.227-.026.344-.026h15.812c.117 0 .232.009.344.026m-16.5 0a2.25 2.25 0 0 0-1.883 2.542l.857 6a2.25 2.25 0 0 0 2.227 1.932H19.05a2.25 2.25 0 0 0 2.227-1.932l.857-6a2.25 2.25 0 0 0-1.883-2.542m-16.5 0V6A2.25 2.25 0 0 1 6 3.75h3.879a1.5 1.5 0 0 1 1.06.44l2.122 2.12a1.5 1.5 0 0 0 1.06.44H18A2.25 2.25 0 0 1 20.25 9v.776" />
                                </svg>

                            </div>

                            <div class="grow">
                                <div class="flex items-center gap-x-2">
                                    <p class="text-xs uppercase tracking-wide text-slate-200 font-bold">
                                        Barangay Certificate
                                    </p>
                                </div>
                                <div class="mt-1 flex items-center gap-x-2">
                                    <h3 class="text-base lg:text-2xl font-semibold text-slate-200">
                                        Php <?php echo number_format((float)$barangayCertPrice, 2); ?>
                                    </h3>
                                </div>
                            </div>
                            <div>
                                <button class="text-gray-100" aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-scale-animation-modal" data-hs-overlay="#hs-barangayCertificate-modal">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-10">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- End Card  -->
                </div>
                <div class="lg:col-span-4">
                    <!-- Card -->
                    <div class="flex flex-col bg-green-700 border shadow-md rounded-xl overflow-hidden">
                        <div class="p-4 md:p-5 flex gap-x-4">
                            <div class="shrink-0 flex justify-center items-center size-[46px] bg-gray-100 rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-gray-800">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 9.776c.112-.017.227-.026.344-.026h15.812c.117 0 .232.009.344.026m-16.5 0a2.25 2.25 0 0 0-1.883 2.542l.857 6a2.25 2.25 0 0 0 2.227 1.932H19.05a2.25 2.25 0 0 0 2.227-1.932l.857-6a2.25 2.25 0 0 0-1.883-2.542m-16.5 0V6A2.25 2.25 0 0 1 6 3.75h3.879a1.5 1.5 0 0 1 1.06.44l2.122 2.12a1.5 1.5 0 0 0 1.06.44H18A2.25 2.25 0 0 1 20.25 9v.776" />
                                </svg>

                            </div>

                            <div class="grow">
                                <div class="flex items-center gap-x-2">
                                    <p class="text-xs uppercase tracking-wide text-slate-200 font-bold">
                                        Certificate of Indigency
                                    </p>
                                </div>
                                <div class="mt-1 flex items-center gap-x-2">
                                    <h3 class="text-base lg:text-2xl font-semibold text-slate-200">
                                        Php <?php echo number_format((float)$certificateIndigencyPrice, 2); ?>
                                    </h3>
                                </div>
                            </div>
                            <div>
                                <button class="text-gray-100" aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-scale-animation-modal" data-hs-overlay="#hs-certificateIndigency-modal">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-10">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- End Card  -->
                </div>
                <div class="lg:col-span-4">
                    <!-- Card -->
                    <div class="flex flex-col bg-green-700 border shadow-md rounded-xl overflow-hidden">
                        <div class="p-4 md:p-5 flex gap-x-4">
                            <div class="shrink-0 flex justify-center items-center size-[46px] bg-gray-100 rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-gray-800">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 9.776c.112-.017.227-.026.344-.026h15.812c.117 0 .232.009.344.026m-16.5 0a2.25 2.25 0 0 0-1.883 2.542l.857 6a2.25 2.25 0 0 0 2.227 1.932H19.05a2.25 2.25 0 0 0 2.227-1.932l.857-6a2.25 2.25 0 0 0-1.883-2.542m-16.5 0V6A2.25 2.25 0 0 1 6 3.75h3.879a1.5 1.5 0 0 1 1.06.44l2.122 2.12a1.5 1.5 0 0 0 1.06.44H18A2.25 2.25 0 0 1 20.25 9v.776" />
                                </svg>

                            </div>

                            <div class="grow">
                                <div class="flex items-center gap-x-2">
                                    <p class="text-xs uppercase tracking-wide text-slate-200 font-bold">
                                        Business Clearance
                                    </p>
                                </div>
                                <div class="mt-1 flex items-center gap-x-2">
                                    <h3 class="text-base lg:text-2xl font-semibold text-slate-200">
                                        Php <?php echo number_format((float)$businessClearancePrice, 2); ?>
                                    </h3>
                                </div>
                            </div>
                            <div>
                                <button class="text-gray-100" aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-scale-animation-modal" data-hs-overlay="#hs-businessClearance-modal">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-10">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- End Card  -->
                </div>
            </div>
            <div>
                <div class="mt-12 grid md:grid-cols-12 lg:grid-cols-12 items-center gap-4">
                    <div class="col-span-12">
                        <h3 class="text-lg font-semibold text-gray-800">GCASH Payment Method QR-Code</h3>
                    </div>
                    <!-- Icon Block -->
                    <form class="lg:col-span-4" action="" method="POST" enctype="multipart/form-data">
                        <div class="flex flex-col text-center rounded-lg border focus:outline-none p-4 sm:p-6">
                            <label for="uploadImg" class="group cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-9 mx-auto">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 10.5v6m3-3H9m4.06-7.19-2.12-2.12a1.5 1.5 0 0 0-1.061-.44H4.5A2.25 2.25 0 0 0 2.25 6v12a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9a2.25 2.25 0 0 0-2.25-2.25h-5.379a1.5 1.5 0 0 1-1.06-.44Z" />
                                </svg>

                                <!-- Hidden file input -->
                                <input class="hidden" type="file" id="uploadImg" name="uploadImg" onchange="displayFileName()" required>

                                <div class="mt-5">
                                    <h3 class="text-lg font-semibold text-gray-800">Upload GCASH QR Code</h3>
                                    <p class="mt-1 text-gray-500">Upload QR-Code for GCASH, payment method QR code.</p>
                                    <div class="flex flex-col items-center">
                                        <p class="mt-5 inline-flex items-center gap-x-1 font-semibold text-slate-600 hover:text-blue-600">
                                            Upload Here
                                            <svg class="shrink-0 size-4 transition ease-in-out group-hover:translate-x-1 group-focus:translate-x-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="m9 18 6-6-6-6" />
                                            </svg>
                                        </p>
                                    </div>
                                </div>
                            </label>
                            <div class="mt-10">
                                <button type="submit" name="btn-uploadCode" class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-slate-600 text-white hover:bg-slate-500 focus:outline-none focus:bg-slate-500 disabled:opacity-50 disabled:pointer-events-none">
                                    Upload
                                </button>
                            </div>
                        </div>
                    </form>

                    <?php

                    include("../../src/database.php");

                    $stmt = "SELECT gcashPicCode FROM payment_method WHERE id = 6";
                    $stmt_run = mysqli_query($conn, $stmt);

                    if ($stmt_run && mysqli_num_rows($stmt_run) > 0) {
                        $row = mysqli_fetch_array($stmt_run);
                        $gcashPicCode = $row['gcashPicCode'];
                    } else {
                        $gcashPicCode = '../../src/imgs-vid/default_qrCode.jpg'; // Display default image if no record is found
                    }
                    ?>
                    <!-- Icon Block -->
                    <div class="col-span-4">
                        <div class="flex flex-col justify-center items-center rounded-lg border hover:bg-slate-200 focus:outline-none focus:bg-gray-100 p-4 sm:p-6">
                            <h5 class="text-center text-blue-600 font-semibold pb-4">GCASH QR-Code Payment</h5>
                            <img src="../../src/imgs-vid/<?php echo $gcashPicCode; ?>" alt="GCASH QR Code" class="w-56" id="imageQR">
                            <p id="fileName" class="inline-flex items-center gap-x-1 pt-2 font-semibold text-slate-600">
                                <?php echo !empty($gcashPicCode) ? "" : "No Chosen file"  ?>
                            </p>
                        </div>
                    </div>
                    <!-- End Icon Block -->

                </div>
            </div>
        </div>
    </div>
    </div>

    <?php require("../../includes/footer.php") ?>
    <script src="script.js"></script>
</body>

</html>