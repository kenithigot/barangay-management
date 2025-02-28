<?php
include('../../src/database.php');

if (isset($_POST["id"])) {
    $id = $_POST["id"];

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
        resident_request_docs.paymentMethod, 
        resident_request_docs.referenceNum,
        resident_request_docs.uploadReceipt,
        resident_request_docs.residencyYear  
    FROM resident_request_docs 
    INNER JOIN document_types
    ON document_types.documentType = resident_request_docs.documentType
    WHERE resident_request_docs.id = ?";
    
    $query_result = $conn->prepare($query);
    $query_result->bind_param("i", $id);
    $query_result->execute();
    $result =  $query_result->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // FIX: Ensure the image path is correctly formatted
        if (!empty($row['uploadReceipt'])) {
            // If it's not a full URL, prepend the base path
            if (!filter_var($row['uploadReceipt'], FILTER_VALIDATE_URL)) {
                $row['uploadReceipt'] = "../../src/imgs-vid/receipts/" . $row['uploadReceipt']; // Adjust based on actual storage
            }
        } else {
            $row['uploadReceipt'] = ""; // Empty if no image exists
        }

        echo json_encode($row);
    } else {
        echo json_encode(['error' => 'Query Failed']);
    }

    $query_result->close();
    $conn->close();
}
?>
