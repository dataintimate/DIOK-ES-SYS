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

    // Query the database to fetch details based on $imgName
    $sql = "SELECT * FROM form_details WHERE templateImg = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $imgName);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Create an associative array with the data you want to send to the client
        $details = array(
            'name' => $row['name'],
            'email' => $row['email'],
            'title' =>  $row['title'],
            'image' =>   $row['image'],
            'companyName' => $row['company_name'],
            'mobileNo' => $row['mobile_no'],
            'officeNo' => $row['office_no'],
            'webUrl' => $row['web_url'],
            'address' => $row['address'],
            'linkedIn' => $row['linkedin_link'],
            'facebook' => $row['facebook_link'],
            'twitter' => $row['twitter_link'],
            'instagram' => $row['instra_link'],
            'fontFamily' => $row['font_family'],
            'fontSize' => $row['font_size'],
            'backColor1' => $row['back_color1'],
            'backColor2' => $row['back_color2'],
            'textColor' => $row['text_color'],
            'linkColor' => $row['link_color'],
            // Add more fields as needed
        );

        // Convert the array to a JSON object
        $jsonDetails = json_encode($details);

        // Echo the JSON object as the response
        echo $jsonDetails;
    } else {
        echo 'Details not found';
    }
} else {
    echo 'Image name not provided';
}

// Close the database connection if needed
$conn->close();
?>

