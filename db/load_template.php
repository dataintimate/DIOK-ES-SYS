<?php
// Assuming you have a database connection established already
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
if (isset($_GET['imgName'])) {
    $imgName = $_GET['imgName'];

    // Create a SQL query with a JOIN clause to fetch the template content
    $sql = "SELECT t.templates 
            FROM form_details AS f
            INNER JOIN template AS t ON f.templateId = t.tempId
            WHERE f.templateImg = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $imgName);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $templateContent = $row['templates'];
        echo $templateContent;
    } else {
        echo 'Template not found';
    }
} else {
    echo 'Image name not provided';
}

// Close the database connection if needed
$conn->close();
?>
