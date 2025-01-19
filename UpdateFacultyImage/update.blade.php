<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if a file was uploaded
    if (isset($_FILES['uploadedFile']) && $_FILES['uploadedFile']['error'] === UPLOAD_ERR_OK) {
        // Get file information
        $fileTmpPath = $_FILES['uploadedFile']['tmp_name'];
        $fileName = $_FILES['uploadedFile']['name'];
        $fileSize = $_FILES['uploadedFile']['size'];
        $fileType = $_FILES['uploadedFile']['type'];
        $uploadFolder = 'uploads/';

        // Ensure upload folder exists
        if (!file_exists($uploadFolder)) {
            mkdir($uploadFolder, 0755, true);
        }

        // Sanitize file name to prevent directory traversal
        $fileNameClean = preg_replace("/[^a-zA-Z0-9\.\-_]/", "_", $fileName);

        // Move file to the upload folder
        $destination = $uploadFolder . $fileNameClean;
        if (move_uploaded_file($fileTmpPath, $destination)) {
            echo "File successfully uploaded to: $destination";
        } else {
            echo "Error moving the file.";
        }
    } else {
        echo "No file uploaded or there was an upload error.";
    }
}
?>

