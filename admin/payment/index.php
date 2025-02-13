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
                    <div class="col-span-4">
                        <div class="flex flex-col text-center rounded-lg border focus:outline-none p-4 sm:p-6">
                            <label for="uploadImg" class="group cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-9 mx-auto">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 10.5v6m3-3H9m4.06-7.19-2.12-2.12a1.5 1.5 0 0 0-1.061-.44H4.5A2.25 2.25 0 0 0 2.25 6v12a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9a2.25 2.25 0 0 0-2.25-2.25h-5.379a1.5 1.5 0 0 1-1.06-.44Z" />
                                </svg>

                                <!-- Hidden file input -->
                                <input class="hidden" type="file" id="uploadImg" onchange="displayFileName()">

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
                                <button type="submit" class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-slate-600 text-white hover:bg-slate-500 focus:outline-none focus:bg-slate-500 disabled:opacity-50 disabled:pointer-events-none">
                                    Confirm Payment
                                </button>
                            </div>
                        </div>

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

                    </div>
                    <!-- End Icon Block -->
                    <!-- Icon Block -->
                    <div class="col-span-4">
                        <div class="flex flex-col justify-center items-center rounded-lg border hover:bg-slate-200 focus:outline-none focus:bg-gray-100 p-4 sm:p-6">
                            <h5 class="text-center text-blue-600 font-semibold">GCASH QR-Code Payment</h5>
                            <img src="../../src/imgs-vid/qrcode.jpg" alt="Default QR Code" class="w-56" id="imageQR">
                            <p id="fileName" class="inline-flex items-center gap-x-1 font-semibold text-slate-600">
                                No Chosen File
                            </p>
                        </div>
                    </div>
                    <!-- End Icon Block -->

                    <div id="hs-large-modal" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none" role="dialog" tabindex="-1" aria-labelledby="hs-large-modal-label">
                        <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all lg:max-w-xl lg:w-full m-3 lg:mx-auto">
                            <div class="flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
                                <div class="flex justify-between items-center py-3 px-4 border-b">
                                    <h3 id="hs-large-modal-label" class="font-bold text-gray-800 ">
                                        View - Edit/Delete User
                                    </h3>
                                    <button type="button" class="size-8 inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none" aria-label="Close" data-hs-overlay="#hs-large-modal">
                                        <span class="sr-only">Close</span>
                                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M18 6 6 18"></path>
                                            <path d="m6 6 12 12"></path>
                                        </svg>
                                    </button>
                                </div>

                                <div class="p-4 overflow-y-auto">
                                    <form action="" method="POST">
                                        <input type="hidden" name="id" class="id" id="id">
                                        <div class="space-y-5">
                                            <div class="flex justify-center sm:justify-start">
                                                <a href="#" id="edit-button" type="submit" class="py-1 px-3 inline-flex items-center gap-x-2 text-xs font-medium rounded-lg border border-gray-200 bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none mr-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                                    </svg>
                                                    Edit
                                                </a>
                                                <button type="button" name="btn-viewDataDelete" id="btn-viewDataDelete" data-id="<?= $userId ?>" class="py-1 px-3 inline-flex items-center gap-x-2 text-xs font-medium rounded-lg border border-transparent bg-red-700 text-white hover:bg-red-800 focus:outline-none focus:bg-red-900 disabled:opacity-50 disabled:pointer-events-none mr-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="size-4" viewBox="0 0 16 16">
                                                        <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5" />
                                                    </svg>
                                                    Delete
                                                </button>
                                            </div>

                                            <div class="">
                                                <label for="view_fullName" class="text-base font-medium text-gray-800">
                                                    Full Name
                                                </label>
                                                <input required id="view_fullName" name="view_fullName" type="text" class=" py-1 pe-9 w-full border-b border-gray-200 text-lg sm:text-xl focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none focus:outline-none placeholder-gray-800" readonly>
                                            </div>

                                            <div class="">
                                                <label for="view_address" class="text-base font-medium text-gray-800">
                                                    Address
                                                </label>
                                                <input required id="view_address" name="view_address" type="text" class=" py-1 pe-9 w-full border-b border-gray-200 text-lg sm:text-xl focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none focus:outline-none placeholder-gray-800" readonly>
                                            </div>
                                            <div class="flex">
                                                <div class="mr-3 flex-1">
                                                    <label for="view_contactNum" class="text-base font-medium text-gray-800">
                                                        Contact Number
                                                    </label>
                                                    <input required id="view_contactNum" name="view_contactNum" type="text" class=" py-1 pe-9 w-full border-b border-gray-200 text-lg sm:text-xl focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none focus:outline-none placeholder-gray-800" readonly>
                                                </div>
                                                <div class="flex-1">
                                                    <label for="view_userRole" class="text-base font-medium text-gray-800">
                                                        User Role
                                                    </label>
                                                    <input required id="view_userRole" name="view_userRole" type="text" class=" py-1 pe-9 w-full border-b border-gray-200 text-lg sm:text-xl focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none focus:outline-none placeholder-gray-800" readonly>
                                                </div>
                                            </div>
                                            <div class="">
                                                <label for="view_emailAddress" class="text-base font-medium text-gray-800">
                                                    Email Address
                                                </label>
                                                <input required id="view_emailAddress" name="view_emailAddress" type="text" class=" py-1 pe-9 w-full border-b border-gray-200 text-lg sm:text-xl focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none focus:outline-none placeholder-gray-800" readonly>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t">
                                    <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none" data-hs-overlay="#hs-large-modal">
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>

    <?php require("../../includes/footer.php") ?>
    <script src="script.js"></script>
</html>