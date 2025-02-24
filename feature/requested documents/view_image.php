<?php
    $imageSrc = isset($_GET['src']) ? $_GET['src'] : 'default.jpg';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Image</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: rgba(0, 0, 0, 0.8);
        }
        img {
            max-width: 90%;
            max-height: 90%;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <img src="<?php echo htmlspecialchars($imageSrc); ?>" alt="Full Image">
</body>
</html>
