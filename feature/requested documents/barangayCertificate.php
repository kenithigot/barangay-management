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


    <div class="py-2 lg:py-3 mx-auto text-gray-800">
        <div class="py-4 flex flex-col bg-gray-200 border shadow-md print:block">
            <div class="flex py-6 px-8 gap-x-10">
                <div class="flex-[0.5]">
                    <div class="pt-10 items-center">
                        <img src="../../src/imgs-vid/logo.png" alt="Labuay Logo">
                        <div class="mx-4 h-[6px] bg-red-500 rounded-md print:block"></div>
                    </div>
                    <div class="text-center pt-10">
                        <h1 class="text-3xl font-semibold">Kenith S. Igot</h1>
                        <h4 class="text-lg font-medium">Barangay Chairman</h4>
                    </div>

                    <div class="text-center pt-8">
                        <h1 class="text-lg font-medium">Council Members</h1>
                        <div class="text-xl space-y-6">
                            <h4 class="font-semibold">Person 1</h4>
                            <h4 class="font-semibold">Person 2</h4>
                            <h4 class="font-semibold">Person 3</h4>
                            <h4 class="font-semibold">Person 4</h4>
                            <h4 class="font-semibold">Person 5</h4>
                            <h4 class="font-semibold">Person 6</h4>
                            <h4 class="font-semibold">Person 7</h4>
                        </div>
                    </div>

                    <div class="text-center pt-12 space-y-6">
                        <div>
                            <h1 class="text-xl font-semibold">Kenith S. Igot</h1>
                            <h4 class="text-lg font-medium">Secretary</h4>
                        </div>
                        <div>
                            <h1 class="text-xl font-semibold">Kenith S. Igot</h1>
                            <h4 class="text-lg font-medium">Treasurer</h4>
                        </div>
                    </div>
                    <div class="text-center pt-12 pb-6">
                        <div class="mx-4 h-[6px] bg-red-500 rounded-md print:block"></div>
                    </div>
                </div>
                <div class="flex-1 text-lg">
                    <div class="flex flex-col justify-center items-center space-y-2">
                        <h3 class="text-3xl font-bold">Barangay Labuay</h3>
                        <h3 class="text-2xl font-semibold">District 4, Labuay</h3>
                        <div class="pt-4 text-center">
                            <h3 class="text-lg text-blue-600"><i>11-0 Maayusin Exten., Bry. San Vicente Diliman, Quezon City, 1101</i></h3>
                        </div>
                        <div class="h-[1px] w-full bg-gray-800 print:block"></div>
                        <div>
                            <h3 class="uppercase text-xl tracking-wider text-center font-semibold">Certification</h3>
                            <h4 class="text-center italic font-medium">(Residency)</h4>
                        </div>
                    </div>
                    <div class="pt-12">
                        <p class="text-left uppercase">To whom it may concern;</p>
                        <div class="pt-8">
                            <p class="indent-12 text-justify">This is to certify that <span class="uppercase"><?php echo $row['firstName'] . " " . $row['middleInitial'] . ". " . $row['lastName']; ?></span> a <span class="uppercase"><?php echo $row['age'] ?></span> years old, has been a resident of/at <span class="uppercase"><?php echo $row['address'] ?></span> this barangay since 20<?php echo $row['residencyYear'] ?> or for about <?php echo $row['residencyYear'] ?> years of Residency.</p>
                        </div>
                    </div>
                    <div class="pt-8">
                        <p class="indent-12 text-justify">This Certification is being issued upon the request of this <?php echo $dateDay ?> day of <?php echo "$dateMonth $dateYear" ?> for the purpose/s of compliance with <?php echo $callSign ?> <span class="uppercase"> <?php echo $row['purpose']  ?></span> Requirements.</p>
                    </div>
                    <div class="flex justify-end items-end">
                        <div class="pt-28 text-end">
                            <h3 class="text-lg font-bold">Kenith S. Igot</h3>
                            <p>Barangay Chairman</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>