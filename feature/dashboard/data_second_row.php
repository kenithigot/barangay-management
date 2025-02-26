<?php
include "../../src/database.php";

$query = $conn->prepare("SELECT resident_request_docs.id, 
        resident_request_docs.documentType, resident_request_docs.requestStatus, 
        document_types.documentClassification FROM resident_request_docs 
        INNER JOIN document_types ON resident_request_docs.documentType = document_types.documentType");
$query->execute();
$query_result = $query->get_result();

$approveRequest = 0;
$pendingRequest = 0;

while ($row = mysqli_fetch_assoc($query_result)) {
    if ($row['requestStatus'] == 'Approve') {
        $approveRequest++;
    } elseif ($row['requestStatus'] == 'Pending'){
        $pendingRequest++;
    }
    
}
$conn->close();
?>

<?php
include "../../src/database.php";

$query = $conn->prepare("SELECT age FROM resident_request_docs");
$query->execute();
$query_result = $query->get_result();

$child = 0;
$teen = 0;
$youngAdult = 0;
$middleAdult = 0;
$senior = 0;
$elderly = 0;

while ($row = mysqli_fetch_assoc($query_result)) {
    if ($row['age'] >= 0 && $row['age'] <= 12 ) {
        $child++;
    } elseif ($row['age'] >= 13 && $row['age'] <= 19 ) {
        $teen++;
    } elseif ($row['age'] >= 20 && $row['age'] <= 35 ) {
        $youngAdult++;
    } elseif ($row['age'] >= 36 && $row['age'] <= 50 ) {
        $middleAdult++;
    } elseif ($row['age'] >= 51 && $row['age'] <= 65 ) {
        $senior++;
    } else {
        $elderly++;
    }
    
}
$conn->close();
?>

<?php
include "../../src/database.php";

$query = $conn->prepare("SELECT resident_request_docs.id, 
        resident_request_docs.documentType, resident_request_docs.requestStatus,
        document_types.documentClassification FROM resident_request_docs 
        INNER JOIN document_types ON resident_request_docs.documentType = document_types.documentType WHERE resident_request_docs.requestStatus = 'Approve'");
$query->execute();
$query_result = $query->get_result();

$barangayCertificate = 0;
$certificateOfIndigency = 0;
$businessClearance = 0;

while ($row = mysqli_fetch_assoc($query_result)) {

    if ($row['documentClassification'] == 'Barangay Certificate') {
        $barangayCertificate++;
    } elseif ($row['documentClassification'] == 'Certificate of Indigency') {
        $certificateOfIndigency++;
    } else {
        $businessClearance++;
    }
}
$conn->close();
?>

<!-- Card -->
<div class="flex flex-col bg-gray-200 border shadow-md rounded-xl min-w-48">
    <div class="p-4 overflow-x-hidden">
        <div calss="text-left">
            <p class="text-left text-lg uppercase tracking-wide font-bold text-gray-800">
                Requested Documents
            </p>
        </div>
        <div class="min-h-[190px] flex items-center justify-center">
            <div id="hs-requestedDocs"></div>
        </div>
    </div>
</div>
<!-- End Card -->

<!-- Card -->
<div class="flex flex-col bg-gray-200 border shadow-md rounded-xl min-w-48">
    <div class="p-4 overflow-x-hidden">
        <div calss="text-left">
            <p class="text-left text-lg uppercase tracking-wide font-bold text-gray-800">
                Approve Documents
            </p>
        </div>
        <div class="min-h-[190px] flex items-center justify-center">
            <div id="hs-residentDocs"></div>
        </div>
    </div>
</div>
<!-- End Card -->

<!-- Card -->
<div class="flex flex-col bg-gray-200 border shadow-md rounded-xl min-w-48">
    <div class="p-4 overflow-x-hidden">
        <div calss="text-left">
            <p class="text-left text-lg uppercase tracking-wide font-bold text-gray-800">
                Resident Age
            </p>
        </div>
        <div class="min-h-[190px] flex items-center justify-center">
            <div id="hs-residentAge"></div>
        </div>
    </div>
</div>
<!-- End Card -->

<script>
    //Request Docs Selection
    var approveRequest = <?php echo $approveRequest ?>;
    var pendingRequest = <?php echo $pendingRequest ?>;

    //Age Selection
    var child = <?php echo $child ?>;
    var teen = <?php echo $teen ?>;
    var youngAdult = <?php echo $youngAdult ?>;
    var middleAdult = <?php echo $middleAdult ?>;
    var senior = <?php echo $senior ?>;
    var elderly = <?php echo $elderly ?>;

    //Approve Documents
    var barangayCertificate = <?php echo $barangayCertificate ?>;
    var certificateOfIndigency = <?php echo $certificateOfIndigency ?>;
    var businessClearance = <?php echo $businessClearance ?>;
</script>
