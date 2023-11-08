<?php
$dbServerName = "localhost";
$dbUserName = "root";
$dbPassword = "";
$dbName = "Es_auto";

// Create a database connection
$connect = mysqli_connect($dbServerName, $dbUserName, $dbPassword, $dbName);

// Check if the connection was successful
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
$filename = $_FILES["choosefile1"]["name"];
// Define the SQL query for inserting data into the 'template' table
$sql = "INSERT INTO template (templates, tempId) VALUES ('$filename', NULL)";

// Execute the SQL query
if (mysqli_query($connect, $sql)) {
    // If the query was successful, redirect to another page
    header("Location: ../index.php?save=success");
} else {
    // If the query failed, display an error message
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
}

// Close the database connection
mysqli_close($connect);
?>

