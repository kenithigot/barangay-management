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
            <div>
                <div class="mt-12 grid md:grid-cols-10 lg:grid-cols-10 items-center gap-4 lg:gap-8">
                    <!-- Icon Block -->
                    <form class="col-span-4" action="" method="POST" enctype="multipart/form-data">
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

                    <script>
                        function displayFileName() {
                            const imageQR = document.getElementById('imageQR')
                            const inputImg = document.getElementById('uploadImg');
                            const fileName = document.getElementById('fileName');

                            if (inputImg.files && inputImg.files[0]) {
                                const file = inputImg.files[0];

                                // Check if the file is of type jpeg, jpg, or png
                                const validTypes = ['image/jpeg', 'image/jpg', 'image/png'];

                                if (validTypes.includes(file.type)) {
                                    let reader = new FileReader();

                                    reader.onload = function(e) {
                                        imageQR.src = e.target.result;
                                    };

                                    // Read the file as Data URL
                                    reader.readAsDataURL(file);

                                    // Display the file name
                                    fileName.textContent = file.name;
                                } else {
                                    // If the file type is invalid, show a message or handle the error
                                    Swal.fire({
                                        icon: "error",
                                        title: "Error uploading QR Code!",
                                        text: "Invalid file type. Please upload a JPEG, JPG, or PNG file."
                                    });
                                    inputImg.value = ''; // Clear the file input
                                    fileName.textContent = 'No Chosen File';
                                }
                            };
                        };
                    </script>
                    <!-- End Icon Block -->

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

</html>