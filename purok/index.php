<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../src/output.css" rel="stylesheet">
    </head>
    <body>
    <div>
        <?php require('../includes/header.php');?>
    </div>
    <?php
    // Check if 'prk' is in the query string
    if (isset($_GET['prk'])) {
        $prk = $_GET['prk']; // Sanitize the input
        echo "<h1>Details for Purok: $prk</h1>";
    } else {
        echo "<h1>No Purok Selected</h1>";
    }
    ?>
</body>
<script src="src/script.js"></script>
</html>