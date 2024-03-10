<?php
// Define the path to the image file
$filePath = 'forms/upload/'.$_GET['image'];

// Check if the file exists
if (file_exists($filePath)) {
    // Set the appropriate headers for an image file
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.$_GET['pImage'].'"');

    // Read the file and output it to the browser
    readfile($filePath);
    exit;
} else {
    // If the file does not exist, display an error message
    echo 'File not found.';
}
?>
