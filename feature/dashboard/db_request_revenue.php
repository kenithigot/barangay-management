<?php
    include "../../src/database.php";

    $currentMonth = date("Y-m");

    // Query for monthly Revenue
    $queryMonthy = $conn->prepare("SELECT SUM(docsPrice) AS monthlyRevenue
        FROM resident_request_docs 
        WHERE resident_request_docs.requestStatus = 'Approve'
        AND DATE_FORMAT(STR_TO_DATE(printrequest_docs, '%d-%M-%Y %h:%i:%s %p'), '%Y-%m') = ? ");
    
    // Bind current Date
    $queryMonthy->bind_param("s", $currentMonth);
    $queryMonthy->execute();
    $query_resultMonthly = $queryMonthy->get_result();
    $rowMonthly = $query_resultMonthly->fetch_assoc();
    $monthlyRevenueRequest = $rowMonthly['monthlyRevenue'] ?? 0; 

    // Query for total revenue
    $queryTotal = $conn->prepare("SELECT SUM(docsPrice) AS totalRevenue
        FROM resident_request_docs
        WHERE requestStatus = 'Approve'");
    
    // Bind current Date
    $queryTotal->execute();
    $query_resultTotal = $queryTotal->get_result();
    $rowTotal = $query_resultTotal->fetch_assoc();
    $totalRevenueRequest = $rowTotal['totalRevenue'] ?? 0; 

    // Format comma separator
    $formatMonthlyRevenue = number_format($monthlyRevenueRequest,2,'.',',');
    $formatTotalRevenue = number_format($totalRevenueRequest,2,'.',',');

    echo json_encode([
        'formatMonthlyRevenue' => $formatMonthlyRevenue,
        'formatTotalRevenue' => $formatTotalRevenue    
    ]);
    $query_resultMonthly->close();
    $query_resultTotal->close();
    $conn->close();
?>
