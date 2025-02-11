<!DOCTYPE html>
<html lang="en">

<head>
    <title>Request Document - Barangay Labuay</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/output.css">
    <!-- Import Google Font: Raleway -->
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700&display=swap" rel="stylesheet">

    <?php
    // Start the session to temporarily store form data
    session_start();

    // If the form was submitted, store the data in the session
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $_SESSION['documentType'] = $_POST['documentType'];
        $_SESSION['firstName'] = $_POST['firstName'];
        $_SESSION['middleInitial'] = $_POST['middleInitial'];
        $_SESSION['lastName'] = $_POST['lastName'];
        $_SESSION['ageUserRequest'] = $_POST['ageUserRequest'];
        $_SESSION['contactNum'] = $_POST['contactNum'];
        $_SESSION['address'] = $_POST['address'];
        $_SESSION['emailAddress'] = $_POST['emailAddress'];
        $_SESSION['purposeText'] = $_POST['purposeText'];
    }
    ?>

</head>

<body class="font-sans">
    <?php require_once '../includes/header.php' ?>
    <div class="bg-slate-600 h-auto">
        <div class="pt-32 md:p-32 lg:p-32 text-gray-800">
            <div class="border-white bg-white sm:rounded-xl md:rounded-xl lg:rounded-xl shadow-lg pt-8">
                <h3 class="text-center text-3xl font-bold underline">Confirm Information</h3>
                <div class="flex justify-center items-start pt-2 px-4 lg:px-12">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-asterisk size-2 mx-1 text-red-600" viewBox="0 0 16 16">
                        <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1" />
                    </svg>
                    <p class="text-blue-600 text-justify"><i><span class="text-red-600 font-semibold w-full">Note:</span> Please review the information below. If everything looks correct, you can proceed to submit. If there are any mistakes, go back and correct them.</i></p>
                </div>
                <div class="p-6 lg:px-16 lg:flex gap-x-8">
                    <div class="flex-[1.5]">
                        <div class="grid grid-cols-12">
                            <div class="col-span-12 pb-2">
                                <div class="inline-flex hover:border-b hover:border-b-blue-800">
                                    <button onclick="history.back()" class="py-0 inline-flex items-center gap-x-2 text-basse font-bold rounded-lg border border-transparent text-blue-800 hover:text-blue-800 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                                        </svg>
                                        Back
                                    </button>
                                </div>
                            </div>
                            <div class="col-span-4 flex items-center">
                                <label for="documentType" class="text-sm lg:text-base font-medium text-gray-800">
                                    Document
                                </label>
                            </div>
                            <div class="col-span-8 flex items-center">
                                <?php
                                // Map numeric values to corresponding document types
                                $documentTypes = [
                                    1 => "Barangay Clearance",
                                    2 => "Certificate of Indigency",
                                    3 => "Barangay Residency"
                                ];

                                // Get the document type value from session and map it
                                $documentType = isset($_SESSION['documentType']) ? $_SESSION['documentType'] : '';
                                $documentLabel = isset($documentTypes[$documentType]) ? $documentTypes[$documentType] : "Unknown Document";
                                ?>

                                <input value="<?php echo htmlspecialchars($documentLabel, ENT_QUOTES, 'UTF-8'); ?>" required id="documentType" name="documentType" type="text" class="font-semibold w-full py-1 text-base sm:text-xl focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none focus:outline-none placeholder-gray-800" readonly>
                            </div>
                            <div class="col-span-4 flex items-center">
                                <label for="firstName" class="text-sm lg:text-base font-medium text-gray-800">
                                    First Name
                                </label>
                            </div>
                            <div class="col-span-8 flex items-center">
                                <input value="<?php echo $_SESSION['firstName']; ?>" required id="firstName" name="firstName" type="text" class="font-semibold w-full py-1 text-base sm:text-xl focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none focus:outline-none placeholder-gray-800" readonly>
                            </div>
                            <div class="col-span-4 flex items-center">
                                <label for="middleInitial" class="text-sm lg:text-base font-medium text-gray-800">
                                    Middle Initial
                                </label>
                            </div>
                            <div class="col-span-8 flex items-center">
                                <input value="<?php echo $_SESSION['middleInitial']; ?>" required id="middleInitial" name="middleInitial" type="text" class="font-semibold w-full py-1 text-base sm:text-xl focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none focus:outline-none placeholder-gray-800" readonly>
                            </div>
                            <div class="col-span-4 flex items-center">
                                <label for="lastName" class="text-sm lg:text-base font-medium text-gray-800">
                                    Last Name
                                </label>
                            </div>
                            <div class="col-span-8 flex items-center">
                                <input value="<?php echo $_SESSION['lastName']; ?>" required id="lastName" name="lastName" type="text" class="font-semibold w-full py-1 text-base sm:text-xl focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none focus:outline-none placeholder-gray-800" readonly>
                            </div>
                            <div class="col-span-4 flex items-center">
                                <label for="ageUserRequest" class="text-sm lg:text-base font-medium text-gray-800">
                                    Age
                                </label>
                            </div>
                            <div class="col-span-8 flex items-center">
                                <input value="<?php echo $_SESSION['ageUserRequest']; ?>" required id="ageUserRequest" name="ageUserRequest" type="text" class="font-semibold w-full py-1 text-base sm:text-xl focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none focus:outline-none placeholder-gray-800" readonly>
                            </div>
                            <div class="col-span-4 flex items-center">
                                <label for="contactNum" class="text-sm lg:text-base font-medium text-gray-800">
                                    Contact Number
                                </label>
                            </div>
                            <div class="col-span-8 flex items-center">
                                <input value="<?php echo $_SESSION['contactNum']; ?>" required id="view_address" name="view_address" type="text" class="font-semibold w-full py-1 text-base sm:text-xl focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none focus:outline-none placeholder-gray-800" readonly>
                            </div>
                            <div class="col-span-4 flex items-center">
                                <label for="address" class="text-sm lg:text-base font-medium text-gray-800">
                                    Address
                                </label>
                            </div>
                            <div class="col-span-8 flex items-center">
                                <input value="<?php echo $_SESSION['address']; ?>" required id="address" name="address" type="text" class="font-semibold w-full py-1 text-base sm:text-xl focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none focus:outline-none placeholder-gray-800" readonly>
                            </div>
                            <div class="col-span-4 flex items-center">
                                <label for="emailAddress" class="text-sm lg:text-base font-medium text-gray-800">
                                    Email Address
                                </label>
                            </div>
                            <div class="col-span-8 flex items-center">
                                <input value="<?php echo $_SESSION['emailAddress']; ?>" required id="emailAddress" name="emailAddress" type="text" class="font-semibold w-full py-1 text-base sm:text-xl focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none focus:outline-none placeholder-gray-800" readonly>
                            </div>
                            <div class="col-span-4 flex items-center">
                                <label for="purposeText" class="text-sm lg:text-base font-medium text-gray-800">
                                    Purpose
                                </label>
                            </div>
                            <div class="col-span-8 flex items-center">
                                <input value="<?php echo $_SESSION['purposeText']; ?>" required id="purposeText" name="purposeText" type="text" class="font-semibold w-full py-1 text-base sm:text-xl focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none focus:outline-none placeholder-gray-800" readonly>
                            </div>
                        </div>
                    </div>

                    <div class="flex-1">
                        <div class="grid grid-col-12 py-3">
                            <div class="flex justify-center sm:justify-start md:justify-start lg:justify-start items-center gap-x-3">
                                <h3 class="text-lg font-bold text-gray-800">Total Payment:</h3>
                                <p class="text-4xl font-bold text-gray-800 underline underline-offset-8">₱<span class="text-5xl">&nbsp200.00</span></p>
                            </div><br>
                            <form action="" class="space-y-4">
                                <div class="space-y-1">
                                    <label for="documentType" class="flex text-sm lg:text-xl font-medium text-gray-800 mt-2.5">
                                        Payment Method <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-asterisk size-2 mx-1 text-red-600" viewBox="0 0 16 16">
                                            <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1" />
                                        </svg>
                                    </label>
                                    <select id="paymentSelectionBlock" name="paymentSelectionBlock" onchange="paymentClicked()" required class="py-2 px-3 block w-full border border-gray-200 rounded-lg text-base focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none focus:outline-none">
                                        <option selected disabled>Select payment method</option>
                                        <option value="1">On-Cash Payment</option>
                                        <option value="2">GCASH Payment</option>
                                    </select>
                                </div>
                                <div class="hidden space-y-1" ID="onhandPaymentNote">
                                    <p class="text-sm text-blue-600 mt-1">
                                        <i>Make sure to upload a <span class="font-semibold">CLEAR and CORRECT receipt</span> in order to process your request.
                                        If the receipt is incorrect, it will be <span class="text-red-600 font-semibold">DISCARDED</span>.</i>
                                    </p>
                                </div>
                                <div class="hidden space-y-1" ID="gcashPaymentNote">
                                    <p class="text-sm text-blue-600 mt-1">
                                        <i>Make sure to upload a <span class="font-semibold">CLEAR and CORRECT receipt and REFERENCE NO.</span> in order to process your request.
                                        If the receipt or reference no. is incorrect, it will be <span class="text-red-600 font-semibold">DISCARDED</span>.</i>
                                    </p>
                                </div>
                                <div id="gcashPaymentBlock" class="hidden px-4 py-4 border rounded-lg">
                                    <h4 for="purposeText" class="text-sm lg:text-base font-bold text-blue-800">
                                        GCASH - QR CODE SCAN
                                    </h4>
                                    <p class="text-sm text-red-600">&nbsp<i>Scan the QR CODE to pay the total payment</i></p>
                                    <div class="flex justify-center items-center">
                                        <img src="../src/imgs-vid/logo.png" alt="QRCODE payment" class="object-auto">
                                    </div>
                                </div>
                                <div id="onHandPaymentBlock" class="hidden space-y-1">
                                    <label for="onHandPaymentBlock" class="flex text-sm lg:text-xl font-medium text-gray-800 mt-2.5">
                                        Upload Receipt <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-asterisk size-2 mx-1 text-red-600" viewBox="0 0 16 16">
                                            <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1" />
                                        </svg>
                                    </label>
                                    <input type="file" name="" id="" class="border rounded-lg w-full py-3 px-5 bg-green-700 text-white">
                                </div>

                                <div id="gcashReferenceNumBlock" class="hidden space-y-1 ">
                                    <!-- Line styling -->
                                    <div class="py-1 flex items-center text-base text-gray-800 uppercase before:flex-1 before:border-t before:border-gray-800 before:me-6 after:flex-1 after:border-t after:border-gray-800 after:ms-6">Or</div>
                                    <label for="ageUserRequest" class="flex text-base font-medium text-gray-800 mt-2.5">
                                        GCASH - Reference No. Receipt
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-asterisk size-2 mx-1 text-red-600" viewBox="0 0 16 16">
                                            <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1" />
                                        </svg>
                                    </label>
                                    <input required id="ageUserRequest" name="ageUserRequest" type="number" class="py-2 px-3 pe-9 block w-full border border-gray-200 rounded-lg text-base focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none focus:outline-none" placeholder="Enter reference number">
                                </div>
                                <div class="pt-8">
                                    <button type="button" class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                                        Confirm Payment
                                    </button>
                                </div>
                            </form>
                            <script>
                                function paymentClicked() {
                                    var paymentSelection = document.getElementById("paymentSelectionBlock").value;
                                    var onHandPayment = document.getElementById("onHandPaymentBlock");
                                    var gcashPayment = document.getElementById("gcashPaymentBlock");
                                    var gcashReferenceNum = document.getElementById("gcashReferenceNumBlock");
                                    var noteMessage = document.getElementById("noteMessageBlock")
                                    
                                    // Note Message
                                    var onhandNote =document.getElementById("onhandPaymentNote");
                                    var gcashNote =document.getElementById("gcashPaymentNote");

                                    if (paymentSelection === "1") {
                                        onHandPayment.style.display = "block";
                                        gcashPayment.style.display = "none";
                                        gcashReferenceNum.style.display = "none";

                                        // Display Note
                                        onhandNote.style.display = "block";
                                        gcashNote.style.display = "none";

                                    } else if (paymentSelection === "2") {
                                        gcashPayment.style.display = "block";
                                        gcashReferenceNum.style.display = "block";
                                        onHandPayment.style.display = "block";

                                        // Display Note
                                        onhandNote.style.display = "none";
                                        gcashNote.style.display = "block";

                                    } else {
                                        onHandPayment.style.display = "none";
                                        gcashPayment.style.display = "none";
                                        gcashReferenceNum.style.display = "none";

                                        // Display Note
                                        onhandNote.style.display = "none";
                                        gcashNote.style.display = "none";
                                    }
                                }
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>

    <script src="<?= BASE_URL ?>/src/script.js"></script>
</body>

</html>