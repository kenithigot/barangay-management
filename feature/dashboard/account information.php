<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add account - Barangay Labuay</title>

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
                        <a href="../dashboard/" class="underline text-blue-600">Dashboard</a>
                        <svg class="shrink-0 mx-3 overflow-visible size-2.5 text-gray-400" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                        </svg>
                    </li>
                    <li class="text-sm font-semibold text-gray-800 truncate" aria-current="page">
                        Account Information
                    </li>
                </ol>
                <!-- End Breadcrumb -->
            </div>
        </div>
        <!-- End Breadcrumb -->
    </div>

    <!-- Content -->
    <div class="w-full lg:ps-64 min-h-screen">
        <div class="py-4 lg:py-8 px-8">
            <div class="hidden lg:flex items-center">
                <a href="../dashboard/">
                    <h1 class="text-xl font-extrabold text-blue-600 underline">Dashboard</h1>
                </a>
                <svg class="shrink-0 mx-2 overflow-visible size-4 text-gray-800" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                </svg>
                <h1 class="text-xl font-extrabold text-gray-800">Account Information</h1>
            </div>
            <div class="md:flex lg:flex gap-x-8 lg:px-5 lg:py-8">
                <div class="flex flex-col items-center py-10">
                    <div class="hs-tooltip inline-block">
                        <div class="hs-tooltip-toggle relative inline-block">
                            <img id="imgDisplay" name="imgDisplay" class="inline-block w-40 h-40 object-cover object-center rounded-full border border-slate-600" src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=300&h=300&q=80" alt="Avatar">
                            <span class="absolute bottom-0 end-0 block size-8 rounded-full ring-2 ring-white bg-green-600"></span>
                            <div class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded-lg shadow-sm dark:bg-neutral-700" role="tooltip">
                                <?php echo $row['firstName']; ?> is currently active
                            </div>
                        </div>
                    </div>
                    <div class="flex text-center flex-col space-y-3 pt-2">
                        <label for="uploadImg" class="cursor-pointer hover:text-blue-600 hover:underline hover:underline-offset-4 text-sm font-medium">Choose a photo</label>
                        <input type="file" id="uploadImg" name="uploadImg" accept="image/*" class="hidden" onchange="displayFileName()">
                        <button class="px-1 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-slate-600 text-white hover:bg-slate-500 focus:outline-none focus:bg-slate-500 disabled:opacity-50 disabled:pointer-events-none">Upload Photo</button>
                    </div>

                    <script>
                        function displayFileName() {
                            const imageDisplay = document.getElementById('imgDisplay');
                            const inputImg = document.getElementById('uploadImg');

                            if (inputImg.files && inputImg.files[0]) {
                                const file = inputImg.files[0];

                                // Check if the file is of type jpeg, jpg, or png
                                const validTypes = ['image/jpeg', 'image/jpg', 'image/png'];

                                if (validTypes.includes(file.type)) {
                                    let reader = new FileReader();

                                    reader.onload = function(e) {
                                        imageDisplay.src = e.target.result;

                                        // Ensure image does not stretch when updated
                                        imageDisplay.classList.remove("w-auto", "h-auto");
                                        imageDisplay.classList.add("w-40", "h-40", "object-cover", "object-center");
                                    };

                                    // Read the file as Data URL
                                    reader.readAsDataURL(file);

                                } else {
                                    // If the file type is invalid, show a message or handle the error
                                    Swal.fire({
                                        icon: "error",
                                        title: "Error uploading QR Code!",
                                        text: "Invalid file type. Please upload a JPEG, JPG, or PNG file."
                                    });
                                }
                            };
                        };
                    </script>
                </div>
                <?php
                include '../../src/database.php';

                $id = $_SESSION['id'];
                $query = "SELECT admin_staff_account.id, 
                    admin_staff_account.user_role, 
                    admin_staff_account.firstName, 
                    admin_staff_account.lastName, 
                    admin_staff_account.contactNum, 
                    admin_staff_account.address, 
                    admin_staff_account.email_address, 
                    admin_staff_role.user_type FROM admin_staff_account 
                    INNER JOIN admin_staff_role ON admin_staff_role.user_role = admin_staff_account.user_role WHERE admin_staff_account.id = $id";
                $result = mysqli_query($conn, $query);
                if ($result) {
                    $row = mysqli_fetch_array($result);
                } else {
                    $row = ['firstName' => 'Unknown User'];
                }
                ?>
                <div class="pt-5">
                    <div class="space-y-3">
                        <div>
                            <h2 class="font-bold text-gray-800 text-xl underline underline-offset-4 mb-6">Personal Information</h2>
                        </div>
                        <div class="flex lg:grid lg:grid-cols-[minmax(90px,200px)_30px_auto] md:grid md:grid-cols-[minmax(90px,200px)_30px_auto] sm:grid sm:grid-cols-[minmax(90px,200px)_30px_auto] gap-x-4 items-center text-gray-800">
                            <h3 class="font-semibold lg:text-lg">Full Name</h3>
                            <span class="font-semibold text-lg text-start text-black">:</span>
                            <span class="font-semibold lg:text-lg uppercase"><?php echo $row['firstName'] . ' ' . $row['lastName']; ?></span>
                        </div>

                        <div class="flex lg:grid lg:grid-cols-[minmax(90px,200px)_30px_auto] md:grid md:grid-cols-[minmax(90px,200px)_30px_auto] sm:grid sm:grid-cols-[minmax(90px,200px)_30px_auto] gap-x-4 items-center text-gray-800">
                            <h3 class="font-semibold lg:text-lg">Contact Number</h3>
                            <span class="font-semibold text-lg text-start text-black">:</span>
                            <span class="font-semibold lg:text-lg"><?php echo $row['contactNum']; ?></span>
                        </div>

                        <div class="flex lg:grid lg:grid-cols-[minmax(90px,200px)_30px_auto] md:grid md:grid-cols-[minmax(90px,200px)_30px_auto] sm:grid sm:grid-cols-[minmax(90px,200px)_30px_auto] gap-x-4 items-center text-gray-800">
                            <h3 class="font-semibold lg:text-lg">Address</h3>
                            <span class="font-semibold text-lg text-start text-black">:</span>
                            <span class="font-semibold lg:text-lg uppercase"><?php echo $row['address']; ?></span></span>
                        </div>

                        <div class="flex lg:grid lg:grid-cols-[minmax(90px,200px)_30px_auto] md:grid md:grid-cols-[minmax(90px,200px)_30px_auto] sm:grid sm:grid-cols-[minmax(90px,200px)_30px_auto] gap-x-4 items-center text-gray-800">
                            <h3 class="font-semibold lg:text-lg">Email Address</h3>
                            <span class="font-semibold text-lg text-start text-black">:</span>
                            <span class="font-semibold lg:text-lg uppercase"><?php echo $row['email_address']; ?></span></span>
                        </div>
                        <div class="flex lg:grid lg:grid-cols-[minmax(90px,200px)_30px_auto] md:grid md:grid-cols-[minmax(90px,200px)_30px_auto] sm:grid sm:grid-cols-[minmax(90px,200px)_30px_auto] gap-x-4 items-center text-gray-800">
                            <h3 class="font-semibold lg:text-lg">User Role</h3>
                            <span class="font-semibold text-lg text-start text-black">:</span>
                            <span class="font-semibold lg:text-lg uppercase"><?php echo $row['user_type']; ?></span>
                        </div>
                    </div>
                </div>


                <!-- <div class="pt-5 w-56">
                    <div class="ms-3 space-y-3">
                        <h2 class="font-bold text-gray-800 text-xl underline underline-offset-4 mb-6">Personal Information</h2>
                        <div class="flex items-center justify-between gap-x-2">
                            <h3 class="font-semibold text-gray-800 text-lg">Full Name</h3>
                            <span class="font-semibold text-lg">:</span>
                            <span class="font-semibold text-lg">Jane Doe</span>
                        </div>
                        <div class="flex items-center justify-between gap-x-2">
                            <h3 class="font-semibold text-gray-800 text-lg">Contact Number</h3>
                            <span class="font-semibold text-lg">:</span>
                            <span class="font-semibold text-lg">098-765-4321</span>
                        </div>
                        <div class="flex items-center justify-between gap-x-2">
                            <h3 class="font-semibold text-gray-800 text-lg">Address</h3>
                            <span class="font-semibold text-lg">:</span>
                            <span class="font-semibold text-lg">456 Elm St</span>
                        </div>
                        <div class="flex items-center justify-between gap-x-2">
                            <h3 class="font-semibold text-gray-800 text-lg">Email Address</h3>
                            <span class="font-semibold text-lg">:</span>
                            <span class="font-semibold text-lg">jane.doe@example.com</span>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="pt-4">
                    <div class="ms-3 space-y-3">
                        
                        <h3 class="font-semibold text-gray-800 text-lg">Full Name</h3>
                        <h3 class="font-semibold text-gray-800 text-lg">Contact Number</h3>
                        <h3 class="font-semibold text-gray-800 text-lg">Address</h3>
                        <h3 class="font-semibold text-gray-800 text-lg">Email Address</h3>
                        <h3 class="font-semibold text-gray-800 text-lg">User Type</h3>
                       
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <script src="script.js"></script>
    <?php require("../../includes/footer.php") ?>
</body>

</html>