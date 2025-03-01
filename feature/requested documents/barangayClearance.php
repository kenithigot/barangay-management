<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Tailwind CSS -->
    <link href="../../src/output.css" rel="stylesheet">

    <style>
        @media print {
            * {
                -webkit-print-color-adjust: exact;
                print-color-adjust: exact;
            }
        }
    </style>
</head>

<body class="font-sans" onload="printAndClose()">

    <script>
        function printAndClose() {
            window.print();
            setTimeout(() => {
                window.close();
            }, 500);
        }
    </script>

    <?php

    include("../../src/database.php");

    $id = isset($_GET['id']) ? $_GET['id'] : null;

    if ($id) {
        $query = "SELECT resident_request_docs.id,
        resident_request_docs.documentType, 
        document_types.documentClassification,
        resident_request_docs.firstName, 
        resident_request_docs.middleInitial, 
        resident_request_docs.lastName, 
        resident_request_docs.age, 
        resident_request_docs.gender, 
        resident_request_docs.civilStatus,
        resident_request_docs.contactNum, 
        resident_request_docs.address, 
        resident_request_docs.purpose,
        resident_request_docs.printrequest_docs,
        resident_request_docs.residencyYear
    FROM resident_request_docs 
    INNER JOIN document_types
    ON document_types.documentType = resident_request_docs.documentType
    WHERE resident_request_docs.id = ?";

        $query_result = $conn->prepare($query);
        $query_result->bind_param("i", $id);
        $query_result->execute();
        $result = $query_result->get_result();

        // Initialize variable
        $callSign = '';
        $dateDay = '';
        $dateMonth = '';
        $dateYear = '';

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();

            $callSign = ($row['gender'] == 'Male') ? 'his' : 'her';
            $fullName = $row['firstName'] . ' ' . $row['middleInitial'] . ' ' . $row['lastName'];

            // Function to add ordinal suffix
            function addSuffix($day)
            {
                if (!in_array(($day % 100), [11, 12, 13])) {
                    switch ($day % 10) {
                        case 1:
                            return $day . '<sup>st</sup>';
                        case 2:
                            return $day . '<sup>nd</sup>';
                        case 3:
                            return $day . '<sup>rd</sup>';
                    }
                }
                return $day . '<sup>th</sup>';
            }

            // Get date issued
            $dateIssued = $row['printrequest_docs'];

            if ($dateIssued) {
                $timestamp = strtotime($dateIssued); // Convert to timestamp
                $dateDay = addSuffix(date('j', $timestamp)); // Day with suffix
                $dateMonth = date('F', $timestamp); // Full month name
                $dateYear = date('Y', $timestamp); // Full year
            }
        } else {
            $row = [];
        }
        $query_result->close();
        $conn->close();
    }

    ?>


    <div class="py-2 lg:py-3 px-8 text-gray-800">
        <div class="flex flex-row justify-center items-center py-5 gap-x-2">
            <img src="../../src/imgs-vid/logo.png" alt="Barangay Logo" class="object-cover w-auto max-w-52">
            <div class="flex flex-col items-center justify-center text-gray-800 text-center">
                <span class="tracking-wider font-medium">Republic of the Philippines</span>
                <p class="tracking-wider font-medium">Province of Lanao del Norte</p>
                <p class="tracking-wider font-medium">Municipality of Maigo</p>
                <h1 class="uppercase tracking-wider font-semibold">Barangay Labuay</h1>
            </div>
            <img src="../../src/imgs-vid/logo.png" alt="Barangay Logo" class="object-cover w-auto max-w-52">
        </div>
        <div class="h-1 w-full bg-red-500 rounded-sm print"></div>
        <div class="py-16">
            <h1 class="text-3xl text-center uppercase tracking-wider font-bold"><i>Barangay Clearance</i></h1>
        </div>
        <div class="px-6 py-4">
            <h1 class="uppercase tracking-wider font-medium pb-3"><i>To whom it may concern:</i></h1>
            <p class="text-justify py-3 indent-12">This is to certify that <span class="uppercase"><?php echo ($fullName ?? "") . ', ' . ($row['age'] ?? "")?></span> of legal age, <span class="lowercase"><?php echo ($row['gender'] ?? " ") . ', ' . ($row['civilStatus'] ?? " ") ?></span> with residence and postal address at <?php echo ($row['address'] ?? " ") ?> has no derogatory record filed in our Barangay Office.</p>
            <p class="text-justify py-3 indent-12">The above-named individual who is a bonafide resident of this barangay is a person of good moral character, peace-loving and civic minded citizen.</p>
            <p class="text-justify py-3 indent-12">This certification/clearance is hereby issued in connection with the subject's application for <span class="uppercase"><?php echo $row['purpose'] ?? " " ?></span> and for whatever legal purpose it may serve <?php echo $callSign ?? " " ?> best, and is valid for six (6) months from the date issued.</p>
            <p class="text-justify py-3 indent-12">Given this <?php echo ($dateDay ?? " ") . ', ' . ($dateMonth ?? " ") . ' ' . ($dateYear ?? " ") ?></p>
        </div>
       <div class="px-6 py-6">
         <div class="flex items-end justify-end py-5">
             <div class="flex flex-col justify-center items-center space-y-1">
                 <h1 class="border-b border-b-black px-2 font-semibold text-lg uppercase">Kenith S. Igasdasdot</h1>
                 <h1 class="text-center">Punong Barangay</h1>
             </div>
         </div>
       </div>

       <div class="px-6 py-6">
         <div class="flex items-start justify-start py-5">
             <div class="flex flex-col justify-center items-center space-y-1">
                <h1 class="min-w-60 border-b border-b-black px-2 font-semibold text-lg uppercase text-center"><?php echo $fullName ?? " " ?></h1>
                <h1 class="text-center">Specimen Signature of Applicant</h1>
             </div>
         </div>
       </div>
    </div>
</body>

</html>