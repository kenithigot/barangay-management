<?php 
include_once("../../src/database.php");

if (isset($_POST['btn-uploadCode']) && isset($_FILES['uploadImg'])) {
    $fileType = strtolower(pathinfo($_FILES['uploadImg']['name'], PATHINFO_EXTENSION));
    
    // Validate file type
    $validateTypeFile = ['jpg', 'jpeg', 'png'];

    if (in_array($fileType, $validateTypeFile)) {
        $uniqueFileName = "qrcode" . time() . '.' . $fileType; // Generate a unique file name
        $targetDir = "../../src/imgs-vid/"; // Directory where the file will be saved
        $targetFile = $targetDir . $uniqueFileName;

        // Fetch the current file name from the database
        $stmt = $conn->prepare("SELECT gcashPicCode FROM payment_method WHERE id = ?");
        $id = 6;
        $stmt->bind_param('i', $id);
        $stmt->execute();
        $stmt->bind_result($currentFileName);
        $stmt->fetch();
        $stmt->close();

        // Delete the existing file if it exists
        if ($currentFileName && file_exists($targetDir . $currentFileName)) {
            unlink($targetDir . $currentFileName);
        }

        // Move the uploaded file to the target directory
        if (move_uploaded_file($_FILES['uploadImg']['tmp_name'], $targetFile)) {
            // Update the database with the new file name
            $stmt = $conn->prepare("UPDATE payment_method SET gcashPicCode = ? WHERE id = ?");
            $stmt->bind_param('si', $uniqueFileName, $id);

            if ($stmt->execute()) {
                echo '<script>
                    document.addEventListener("DOMContentLoaded", function() {
                        Swal.fire({
                            icon: "success",
                            title: "QR CODE updated!",
                            text: "QR CODE has been updated successfully."
                        }).then(() => {
                            window.location.href = "../transaction panel/";
                        });
                    });
                </script>';
            } else {
                echo "<script>alert('Database Error: " . $stmt->error . "');</script>";
            }

            // Close the database connection
            $stmt->close();
            $conn->close();
        } else {
            echo "<script>alert('Error uploading file.');</script>";
        }
    } else {
        echo "<script>alert('Invalid file type. Only JPG, JPEG, and PNG files are allowed.');</script>";
    }
}
?>
