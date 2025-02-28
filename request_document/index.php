<!DOCTYPE html>
<html lang="en">

<head>
    <title>Request Document - Barangay Labuay</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/output.css">
    <!-- Import Google Font: Raleway -->
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body class="font-sans">
    <?php include '../includes/header.php' ?>
    <div class="bg-slate-600">
        <div class="pt-32 md:p-32 lg:p-40 text-gray-800">
            <div class="border-white bg-white rounded-xl shadow-lg pt-8">
                <h3 class="text-center text-3xl font-bold underline">Request a Document</h3>
                <div class="flex justify-center items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-asterisk size-2 mx-1 text-red-600" viewBox="0 0 16 16">
                        <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1" />
                    </svg>
                    <p class="pt-2 text-blue-600"><i><span class="text-red-600 font-semibold">Note:</span> Fill up the form for request of document.</i></p>
                </div>
                <div class="p-10 lg:px-16">
                    <form action="display_payment.php" method="POST">
                        <div class="space-y-6 mt-4">
                            <div class="lg:flex gap-x-5 space-y-5 lg:space-y-0">
                                <div class="flex-1 space-y-1">
                                    <label for="documentType" class="flex text-base font-medium text-gray-800 mt-2.5">
                                        Request Document <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-asterisk size-2 mx-1 text-red-600" viewBox="0 0 16 16">
                                            <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1" />
                                        </svg>
                                    </label>
                                    <select required id="documentType" name="documentType" class="py-2 px-3 pe-9 block w-full border border-gray-200 rounded-lg text-base focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none focus:outline-none">
                                        <option selected disabled>Select request document</option>
                                        <option value="1">Barangay Certificate</option>
                                        <option value="2">Certificate of Indigency</option>
                                        <option value="3">Business Clearance</option>
                                    </select>
                                </div>
                                <div class="flex-1 space-y-1">
                                    <label for="residencyYear" class="flex text-base font-medium text-gray-800 mt-2.5">
                                        Since Year(s) of Residency
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-asterisk size-2 mx-1 text-red-600" viewBox="0 0 16 16">
                                            <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1" />
                                        </svg>
                                    </label>
                                    <input required id="residencyYear" name="residencyYear" type="number" min="1930" max="2100" value="2000" class="yearpicker py-2 px-3 block w-full border border-gray-200 rounded-lg text-base focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none focus:outline-none">
                                </div>
                            </div>
                            <div class="lg:flex gap-x-5 space-y-5 lg:space-y-0">
                                <div class="flex-1 space-y-1">
                                    <label for="firstName" class="flex text-base font-medium text-gray-800 mt-2.5">
                                        First Name
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-asterisk size-2 mx-1 text-red-600" viewBox="0 0 16 16">
                                            <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1" />
                                        </svg>
                                    </label>
                                    <input required id="firstName" name="firstName" type="text" class="py-2 px-3 pe-9 block w-full border border-gray-200 rounded-lg text-base focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none focus:outline-none" placeholder="Enter first name">
                                </div>
                                <div class="flex-1 space-y-1">
                                    <label for="middleInitial" class="flex text-base font-medium text-gray-800 mt-2.5">
                                        Middle Initial
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-asterisk size-2 mx-1 text-red-600" viewBox="0 0 16 16">
                                            <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1" />
                                        </svg>
                                    </label>
                                    <input required id="middleInitial" name="middleInitial" type="text" class="py-2 px-3 pe-9 block w-full border border-gray-200 rounded-lg text-base focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none focus:outline-none" placeholder="Enter last name">
                                </div>
                                <div class="flex-1 space-y-1">
                                    <label for="lastName" class="flex text-base font-medium text-gray-800 mt-2.5">
                                        Last Name
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-asterisk size-2 mx-1 text-red-600" viewBox="0 0 16 16">
                                            <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1" />
                                        </svg>
                                    </label>
                                    <input required id="lastName" name="lastName" type="text" class="py-2 px-3 pe-9 block w-full border border-gray-200 rounded-lg text-base focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none focus:outline-none" placeholder="Enter last name">
                                </div>
                            </div>
                            <div class="lg:flex gap-x-5 space-y-5 lg:space-y-0">
                                <div class="space-y-1 flex-1">
                                    <label for="userGender" class="flex text-base font-medium text-gray-800 mt-2.5">
                                        Gender
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-asterisk size-2 mx-1 text-red-600" viewBox="0 0 16 16">
                                            <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1" />
                                        </svg>
                                    </label>
                                    <select required id="userGender" name="userGender" class="py-2 px-3 pe-9 block w-full border border-gray-200 rounded-lg text-base focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none focus:outline-none">
                                        <option selected disabled>Select Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                                <div class="flex-1 space-y-1">
                                    <label for="ageUserRequest" class="flex text-base font-medium text-gray-800 mt-2.5">
                                        Age
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-asterisk size-2 mx-1 text-red-600" viewBox="0 0 16 16">
                                            <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1" />
                                        </svg>
                                    </label>
                                    <input required id="ageUserRequest" name="ageUserRequest" type="number" class="py-2 px-3 block w-full border border-gray-200 rounded-lg text-base focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none focus:outline-none" placeholder="Enter age">
                                </div>
                                <div class="flex-1 space-y-1">
                                    <label for="contactNum" class="flex text-base font-medium text-gray-800 mt-2.5">
                                        Contact Number
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-asterisk size-2 mx-1 text-red-600" viewBox="0 0 16 16">
                                            <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1" />
                                        </svg>
                                    </label>
                                    <input required id="contactNum" name="contactNum" type="number" class="py-2 px-3 block w-full border border-gray-200 rounded-lg text-base focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none focus:outline-none" placeholder="Enter contact number">
                                </div>
                            </div>
                            <div class="space-y-1">
                                <label for="address" class="flex text-base font-medium text-gray-800 mt-2.5">
                                    Address
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-asterisk size-2 mx-1 text-red-600" viewBox="0 0 16 16">
                                        <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1" />
                                    </svg>
                                </label>
                                <input required id="address" name="address" type="text" class="py-2 px-3 pe-9 block w-full border border-gray-200 rounded-lg text-base focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none focus:outline-none" placeholder="Enter address">
                            </div>
                            <!-- <div class="space-y-1">
                                <label for="emailAddress" class="flex text-base font-medium text-gray-800 mt-2.5">
                                    Email Address
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-asterisk size-2 mx-1 text-red-600" viewBox="0 0 16 16">
                                        <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1" />
                                    </svg>
                                </label>
                                <input required id="emailAddress" name="emailAddress" type="email" class="py-2 px-3 pe-9 block w-full border border-gray-200 rounded-lg text-base focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none focus:outline-none" placeholder="Enter email address">
                            </div> -->
                            <div class="space-y-1">
                                <label for="purposeText" class="flex text-base font-medium text-gray-800 mt-2.5">
                                    Purpose
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-asterisk size-2 mx-1 text-red-600" viewBox="0 0 16 16">
                                        <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1" />
                                    </svg>
                                </label>
                                <textarea required id="purposeText" name="purposeText" type="email" class="py-2 px-3 pe-9 block w-full border border-gray-200 rounded-lg text-base focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none focus:outline-none" placeholder="Enter purpose of request Ex.: 'Educational Purposes'"></textarea>
                            </div>

                            <div class="py-8 flex justify-center">
                                <button type="submit" name="btn-submit" class="w-80 py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-slate-600 text-slate-200 hover:bg-slate-500 hover:text-slate-300 focus:outline-none focus:bg-slate-500 disabled:opacity-50 disabled:pointer-events-none">
                                    Confirm
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>


    <script src="<?= BASE_URL ?>/src/script.js"></script>
</body>

</html>