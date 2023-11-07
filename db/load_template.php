<?php
// Assuming you have a database connection established already
$dbSeverName = "localhost";
$dbUserName = "root";
$dbPassword = "";
$dbName = "Es_auto";
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
