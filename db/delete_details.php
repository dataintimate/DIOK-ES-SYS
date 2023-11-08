<?php
$dbSeverName = "localhost";
$dbUserName = "root";
$dbPassword = "";
$dbName = "Es_auto";
$conn = mysqli_connect($dbSeverName, $dbUserName, $dbPassword, $dbName);
// Define the image name you want to delete
$imgNameToDelete = $_POST['imgName']; // Replace with the actual image name

// SQL query to delete data based on imgName
$sql = "DELETE FROM form_details WHERE templateImg = '$imgNameToDelete'";

// Prepare and execute the query
$stmt = $conn->prepare($sql);
$stmt->execute();
header("Location: ../index.php?delete=success");
$folder = 'image/';
if ($stmt->execute()) {
    echo "Data deleted successfully.";
    $fileToDelete = $folder . $imgNameToDelete; // Replace 'filename.ext' with the actual file name you want to delete

if (file_exists($fileToDelete)) {
    if (unlink($fileToDelete)) {
        echo "File deleted successfully.";
    } else {
        echo "Failed to delete the file.";
    }
} else {
    echo "File not found.";
}
} else {
    echo "Failed to delete data.";
}
?>