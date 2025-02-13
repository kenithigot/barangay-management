<?php 

    include_once("../../src/database.php");

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['uploadImg'])){

        // Upload path directory
        $folderDir = "folder/";
        $fileType = strtolower(pathinfo($_FILES['uploadImg']['name'], PATHINFO_EXTENSION));
    
        // Validate file type
        $validateTypeFile = ['jpg', 'jpeg', 'png'];

        if (in_array($fileType, $validateTypeFile)) {
            $fileName = "qrcode"; // Base Name of file
            $fileCount = 1;

            // Check existing Base name of file
            while (file_exists($folderDir . $fileName . $fileCount . '.' . $fileType)){
                $fileCount++; // Generate unique increment name
            }

            $uniqueFileName = $fileName . $fileCount . '.' . $fileType; //Final file name
            $targetFile = $folderDir . $uniqueFileName;

            // Move the file in directory to the database
            if(move_uploaded_file($_FILES['uploadImg']['tmp_name'], $targetFile)){

                $stmt = $conn->prepare("INSERT INTO payment_method (gcashPicCode, fileNames)
                    VALUES (?, ?)
                ");
                $stmt->bind_param('ss', $uniqueFileName, $targetFile);
            
                if ($stmt->execute()) {
                    echo "File has been uploaded and saved to the database successfully.";
                } else {
                    echo "Error: " . $stmt->error;
                }

                // Close the database connection
                $stmt->close();
                $conn->close();
            } else {
                echo "Sorry, there was an error uploading your file.";
            }

        }else {
            echo "Invaasdasdlid file type. Only JPG, JPEG, and PNG files are allowed.";
        }
    }


?>