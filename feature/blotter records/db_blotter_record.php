<?php
include("../../src/database.php");


function generateCaseNumber($codeLength = 5)
{
    return strtoupper(substr(str_shuffle("0123456789"), 0, $codeLength));
}

// Set the default timezone to your local timezone
date_default_timezone_set('Asia/Manila');

// Handing form submission
if (isset($_POST['btn-addBlotter'])) {
    $complainantName = isset($_POST['complainantName']) ? $_POST['complainantName'] : '';
    $respondentName = isset($_POST['respondentName']) ? $_POST['respondentName'] : '';
    $dateAndTimeIncident = isset($_POST['dateAndTimeIncident']) ? $_POST['dateAndTimeIncident'] : '';
    $locationOfIncident = isset($_POST['locationOfIncident']) ? $_POST['locationOfIncident'] : '';
    $dateOfFiling = isset($_POST['dateOfFiling']) ? $_POST['dateOfFiling'] : '';
    // $blotterStatus = isset($_POST['blotterStatus']) ? $_POST['blotterStatus'] : '';
    $incidentType = isset($_POST['incidentType']) ? $_POST['incidentType'] : '';
    $incidentDetail = isset($_POST['incidentDetail']) ? $_POST['incidentDetail'] : '';

    // Add status
    $blotterStatus = 'Ongoing';

    // Generate unique blotter case number
    $caseNumber = generateCaseNumber();

    // Convert time date of incident formatting
    $dateTimeIncident = new DateTime($dateAndTimeIncident);
    $dateTimeIncident->setTimezone(new DateTimeZone('Asia/Manila'));
    $formatedDateTimeIncident = $dateTimeIncident->format('m-d-Y h:i A');

    // Convert time date of filing formatting
    $dateFiling = new DateTime($dateOfFiling);
    $dateFiling->setTimezone(new DateTimeZone('Asia/Manila'));
    $formatedDateFiling = $dateFiling->format('m-d-Y h:i A');

    $stmt = $conn->prepare("INSERT INTO blotter_record 
            (blotter_caseNumber, complainant_name, respondent_name, date_of_incident, location_of_incident, date_filing, blotter_status, blotter_type, incident_details)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");

    if (!$stmt) {
        echo ("Error in Prepare Statement" . $conn->error);
    }
    $stmt->bind_param(
        "sssssssss",
        $caseNumber,
        $complainantName,
        $respondentName,
        $formatedDateTimeIncident,
        $locationOfIncident,
        $formatedDateFiling,
        $blotterStatus,
        $incidentType,
        $incidentDetail
    );

    if ($stmt->execute()) {
        echo '<script>
            document.addEventListener("DOMContentLoaded", function() {
                Swal.fire({
                    icon: "success",
                    title: "Saved Successfully!",
                    text: "The blotter record has been saved successfully."
                }).then(() => {
                    window.location.href = "../blotter records/";
                });
            });
        </script>';
        $conn->close();
        $stmt->close();
        exit();
    } else {
        echo '<script>
            document.addEventListener("DOMContentLoaded", function() {
                Swal.fire({
                    icon: "error",
                    title: "Error Entry!",
                    text: "Failed to save blotter record. Please try again."
                }).then(() => {
                    window.location.href = "../blotter records/";
                });
            });
        </script>';
    }
}
