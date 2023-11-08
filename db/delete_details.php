<?php
$envFilePath = __DIR__ . '/../.env';

if (file_exists($envFilePath)) {
    // Read the contents of the .env file
    $envContents = file_get_contents($envFilePath);

    // Split the file contents into lines
    $lines = explode("\n", $envContents);

    // Process each line to extract key-value pairs
    foreach ($lines as $line) {
        // Remove leading/trailing spaces and empty lines
        $line = trim($line);
        if (empty($line)) {
            continue;
        }

        // Split the line into key and value
        list($key, $value) = explode('=', $line, 2);

        // Set the environment variable (you may want to validate/sanitize the values)
        putenv("$key=$value");
        $_ENV[$key] = $value;
        $_SERVER[$key] = $value;
    }
} else {
    die('.env file not found. Please create one.');
}

$dbSeverName = $_ENV['DB_SERVER'];
$dbUserName = $_ENV['DB_USERNAME'];
$dbPassword = $_ENV['DB_PASSWORD'];
$dbName = $_ENV['DB_NAME'];
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