<?php
$dbSeverName = "localhost";
$dbUserName = "root";
$dbPassword = "";
$dbName = "Es_auto";
$conn = mysqli_connect($dbSeverName, $dbUserName, $dbPassword, $dbName);

// Retrieve the form data and the imgName from the request
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
$filename =$_POST['img'];;
//$tempfile = $_POST['img'];;

$folder = 'image/'.$filename;


$imgName = $_POST['imgName'];

$templateId = $_POST['tempId'];
$templateImg = $_POST['tempImg'];

if ($templateImg === null) {
    die("Image data is null.");
}

$folderPath = "image/";

// Remove the data URI scheme part
list($type1, $image_base641) = explode(';', $filename);
list(, $image_base641) = explode(',', $image_base641);
list($type, $image_base64) = explode(';', $templateImg);
list(, $image_base64) = explode(',', $image_base64);

// Decode the base64 image data
$image_data = base64_decode($image_base64);
$image_data1 = base64_decode($image_base641);
if ($image_data === false) {
    die("Failed to decode image data.");
}
$generateName = uniqid();
$filename2 = $folderPath . "picture" . $generateName . '.png';
$filename1 = $folderPath . "template" . $generateName . '.png';
$tempFileName = "template" . $generateName . '.png';
$tempFileName1 = "picture" . $generateName . '.png';
// Add more fields as needed

// Example SQL query (make sure to use prepared statements for security):
$sql = "UPDATE form_details SET name='$name',title='$title',company_name='$comName ',office_no='$officeNo',mobile_no='$mobileNo',web_url='$webUrl',email='$email',address='$address ',linkedin_link='$linkedin ',facebook_link='$facebook',twitter_link='$twitter',instra_link='$instra',image='$tempFileName1',templateId='$templateId',templateImg='$tempFileName',font_family='$fontFamily',font_size='$fontSize',back_color1='$backColor1',back_color2='$backColor2',text_color='$textColor',link_color='$linkColor'  WHERE templateImg='$imgName'";

// Example using MySQLitures
$stmt = $conn->prepare($sql);
$stmt->execute();
//move_uploaded_file($filename, $folder);
file_put_contents($filename2, $image_data1);
$folder1 = 'image/';
// Save the image to the file
if (file_put_contents($filename1, $image_data)) {
    // echo "Image saved as: " . $filename;
    $fileToDelete = $folder1 . $imgName; // Replace 'filename.ext' with the actual file name you want to delete

    if (file_exists($fileToDelete)) {
        if (unlink($fileToDelete)) {
            echo $filename;
            header("Location: ../new_index_oshnda.php?save=success");
        } else {
            echo "Failed to delete the file.";
        }

    }
} else {
    die("Failed to save the image: " . error_get_last()['message']);
}


// Handle the query execution result here


?>
