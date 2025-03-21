<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document Request Status - Barangay Labuay</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/output.css">
    <!-- Import Google Font: Raleway -->
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700&display=swap" rel="stylesheet">
    <?php include('db_displayCode.php'); ?>
</head>

<body class="font-sans">
    <?php
        include __DIR__ . '/../includes/config.php';
        include '../includes/header.php';
    ?>
    <div class="bg-slate-600 ">
        <div class="pt-32 md:p-32 lg:p-40 text-gray-800 lg:flex justify-center items-center h-screen">
            <div class="border-white bg-white md:rounded-xl lg:rounded-xl shadow-lg pt-8">
                <h3 class="text-center text-3xl font-bold underline">Document Request Status</h3>
                <div class="flex justify-center items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-asterisk size-2 mx-1 text-red-600" viewBox="0 0 16 16">
                        <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1" />
                    </svg>
                    <p class="pt-2 text-blue-600"><i><span class="text-red-600 font-semibold">Note:</span> Enter transaction code to check the status</i></p>
                </div>
                <div class="p-10 lg:px-16">
                    <form method="POST">
                        <div class="space-y-6 mt-4">
                            <div class="lg:flex gap-x-2 justify-center items-center ">
                                <span for="documentType" class="lg:inline-flex items-center min-w-fit text-xl font-medium text-gray-800">
                                    Transaction Code
                                </span>
                                <input required id="transactionCode" name="transactionCode" type="text" class="py-2 px-3 pe-9 block w-full border border-gray-200 rounded-lg text-2xl focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none focus:outline-none" placeholder="Enter transaction code">
                            </div>
                        </div>
                        <div class="mt-8">
                            <button type="submit" id="btn-submitCode" name="btn-submitCode" class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-slate-600 text-slate-200 hover:bg-slate-500 hover:text-slate-300 focus:outline-none focus:bg-slate-500 disabled:opacity-50 disabled:pointer-events-none">
                                Confirm
                            </button>
                        </div>
                    </form>
                    <?php if (isset($_POST['btn-submitCode'])): ?>
                        <div class="mt-3">
                            <p class="text-center text-3xl font-semibold text-gray-800">
                                <?= htmlspecialchars($requestStatus) ?? "" ?>
                            </p>
                            <?php if ($isValid): ?>
                                <p class="text-center text-lg text-gray-800">
                                    Name: <?= htmlspecialchars($firstName) ?> <?= htmlspecialchars($lastName) ?>
                                </p>
                            <?php endif; ?>
                            <?php if ($requestStatus == "Approve"): ?>
                                <p class=" text-center text-blue-600"><i>"Please come to the office to claim your document."</i></p>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>