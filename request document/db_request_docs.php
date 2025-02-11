<?php

    if (isset($_POST['btn-addAccount'])) {
        $documentType = isset($_POST['documentType']) ? $_POST['documentType'] : '';
        $firstName = isset($_POST['firstName']) ? $_POST['firstName'] : '';
        $lastName = isset($_POST['lastName']) ? $_POST['lastName'] : '';
        $username = isset($_POST['age']) ? $_POST['age'] : '';
        $contactNum = isset($_POST['contactNum']) ? $_POST['contactNum'] : '';
        $address = isset($_POST['address']) ? $_POST['address'] : '';
        $email_address = isset($_POST['emailAddress']) ? $_POST['emailAddress'] : '';   
        $password = isset($_POST['purpose']) ? $_POST['purpose'] : '';
    }
?>