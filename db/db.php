


<?php
$dbSeverName = "localhost";
$dbUserName = "root";
$dbPassword = "";
$dbName = "Es_auto";
$conn = mysqli_connect($dbSeverName, $dbUserName, $dbPassword, $dbName);

$name = $_POST['Name'];
$title = $_POST['Title'];
$comName = $_POST['comName'];
$officeNo = $_POST['OfficeNo'];
$mobileNo = $_POST['mobileBo'];
$webUrl = $_POST['url'];
$email = $_POST['Email'];
$address = $_POST['Address'];
$linkedin = $_POST['linkedIn'];
$facebook = $_POST['facebook'];
$twitter = $_POST['twitter'];
$instra = $_POST['instagram'];
$fontFamily = $_POST['fontFamily'];
$fontSize = $_POST['fontSize'];
$backColor1 = $_POST['backColor1'];
$backColor2 = $_POST['backColor2'];
$textColor = $_POST['textColor'];
$linkColor = $_POST['linkColor'];
$filename = $_FILES["choosefile"]["name"];
$tempfile = $_FILES["choosefile"]["tmp_name"];
$folder = "image/" . $filename;

$templateId = $_POST['tempId'];
$templateImg = $_POST['tempImg']; // Assuming the image data is in 'tempImg'

if ($templateImg === null) {
    die("Image data is null.");
}

$folderPath = "image/";

// Remove the data URI scheme part
list($type, $image_base64) = explode(';', $templateImg);
list(, $image_base64) = explode(',', $image_base64);

// Decode the base64 image data
$image_data = base64_decode($image_base64);

if ($image_data === false) {
    die("Failed to decode image data.");
}

// Generate a unique file name
$generateName = uniqid();
$filename1 = $folderPath . "issue_fixed_" . $generateName . '.png';
$tempFileName = "issue_fixed_" . $generateName . '.png';

$sql = "INSERT INTO form_details (name, title, company_name, office_no, mobile_no, web_url, email, address, linkedin_link, facebook_link, twitter_link, instra_link,image,templateId,templateImg,font_family,font_size,back_color1,back_color2,text_color,link_color) VALUES ('$name', '$title', '$comName', '$officeNo', '$mobileNo', '$webUrl', '$email', '$address', '$linkedin', '$facebook', '$twitter', '$instra','$filename','$templateId','$tempFileName','$fontFamily','$fontSize','$backColor1','$backColor2','$textColor','$linkColor');
 ";

$insert = mysqli_query($conn, $sql);
if ($insert) {
    move_uploaded_file($tempfile, $folder);
// Save the image to the file
    if (file_put_contents($filename1, $image_data)) {
        // echo "Image saved as: " . $filename;
        header("Location: ../new_index_oshnda.php?save=success");
    } else {
        die("Failed to save the image: " . error_get_last()['message']);
    }

} else {
    echo "Error: " . mysqli_error($conn);
}


?>


