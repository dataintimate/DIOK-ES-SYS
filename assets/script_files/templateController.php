<?php
$envFilePath = __DIR__ . '/../../.env';

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

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch all templateImg values
$sql = "SELECT templateImg FROM form_details";
$result = $conn->query($sql);

// Initialize an empty array to store image URLs
$imgArray = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $imgArray[] = $row['templateImg'];
    }
}

// Close the database connection
$conn->close();
?>

<script>
    function setValues() {
        $(document).ready(function () {
            var savedText = localStorage.getItem('inputText');
            var title = localStorage.getItem('title');
            var comName = localStorage.getItem('comName');
            var officeNo = localStorage.getItem('officeNo');
            var mobileNo = localStorage.getItem('mobileNo');
            var url = localStorage.getItem('url');
            var email = localStorage.getItem('email');
            var address = localStorage.getItem('address');
            var facebook = localStorage.getItem('facebook');
            var linkedin = localStorage.getItem('linkedIn');
            var twitter = localStorage.getItem('twitter');
            var instagram = localStorage.getItem('instagram');
            var imgUrl = localStorage.getItem("recent-image");
            var fontFamily = localStorage.getItem('fontFamily');
            var fontSize = localStorage.getItem('fontSize');
            var textColor = localStorage.getItem('textColor');
            var backColor1 = localStorage.getItem('backColor1');
            var backColor2 = localStorage.getItem('backColor2');
            var linkColor = localStorage.getItem('linkColor');
            $('#Name').val(savedText);
            $('#Title').val(title);
            if (savedText !== null) {
                $('#name').text(savedText);
            }else {
                $('#name').css("display", "none");
            }
            if (title !== null) {
                $('#title').text(title);
            }else {
                $('#title').css("display", "none");
            }
            if (comName !== null) {
                $('#companyName').text(comName);
            }else {
                $('#companyName').css("display", "none");
            }
            if (email !== null) {
                $('#email').text(email);
            }else {
                $('#email').css("display", "none");
            }
            if (mobileNo !== null) {
                $('#mobileNo').text(mobileNo);
            }else {
                $('#mobileNo').css("display", "none");
            }
            if (officeNo !== null) {
                $('#officeNo').text(officeNo);
            }else {
                $('#officeNo').css("display", "none");
            }
            if (url !== null) {
                $('#webUrl').text(url);
            }else {
                $('#webUrl').css("display", "none");
            }
            if (address !== null) {
                $('#address').text(address);
            }else {
                $('#address').css("display", "none");
            }

            if (facebook !== null) {
                $('#fbook').attr('href', facebook);
            }else {
                $('#fbook').css("display","none");
            }
            if (linkedin !== null) {
                $('#linked').attr('href', linkedin);
            }else {
                $('#linked').css("display","none");
            }
            if (twitter !== null) {
                $('#twi').attr('href', twitter);
            }else {
                $('#twi').css("display","none");
            }
            if (instagram !== null) {
                $('#insta').attr('href', instagram);
            }else {
                $('#insta').css("display","none");
            }

            if(imgUrl=="" || imgUrl==null){
                $("#selected-image").css({
                    'background': 'white',
                });
            }else{
                $("#selected-image").css({
                    'background': 'url(' + imgUrl + ') center/cover no-repeat',
                });
            }
            $("#name,#title,#companyName,#email,#address,#mobileNo,#officeNo,#webUrl").css({
                'font-family': fontFamily
            })
            $("#name,#title,#companyName,#email,#address,#mobileNo,#officeNo,#webUrl").css({
                'font-size': fontSize + 'px'
            })
            $("#name,#title,#companyName,#email,#address,#mobileNo,#officeNo,#webUrl").css({
                'color': textColor
            })
            $(".backgroundColor").css({
                'background-color': backColor1
            })
            $(".backgroundColor2").css({
                'background-color': backColor2
            })
            let color = linkColor;
            let colorWithoutHash = color.substring(1);

            let srcTwitter = "https://img.icons8.com/ios-filled/30/" + colorWithoutHash + "/twitterx--v1.png";
            let srcLinked = "https://img.icons8.com/ios-filled/30/" + colorWithoutHash + "/linkedin.png";
            let srcFBook = "https://img.icons8.com/ios-filled/30/" + colorWithoutHash + "/facebook--v1.png";
            let srcInsta = "https://img.icons8.com/ios-filled/30/" + colorWithoutHash + "/instagram-new--v1.png";

            $("#imgTwitter").attr("src", srcTwitter);
            $("#imgLinkedIn").attr("src", srcLinked);
            $("#imgFBook").attr("src", srcFBook);
            $("#imgInsta").attr("src", srcInsta);

        });
    }

    // small templates------------------------------------------------------------------------------------------------------
    $('#firstTemp').click(
        function () {
            $('#templateSection').addClass('skeleton-loader');
            $("#templateSection").load("assets/template/templateOne.php", function () {
                $('#templateSection').removeClass('skeleton-loader');

                $('#tempId').val('1');

                if (localStorage.length === 0) {
                    defaultValues();
                }else{
                    setValues();
                }
            });
        }
    );
    $('#secondTemp').click(
        function () {
            $('#templateSection').addClass('skeleton-loader');
            $("#templateSection").load("assets/template/templateTwo.php", function () {
                $('#templateSection').removeClass('skeleton-loader');
                $('#tempId').val('2');

                if (localStorage.length === 0) {
                    defaultValues();
                }else{
                    setValues();
                }
            });
        }
    );
    $('#thirdTemp').click(
        function () {
            $('#templateSection').addClass('skeleton-loader');
            $("#templateSection").load("assets/template/templateThree.php", function () {
                $('#templateSection').removeClass('skeleton-loader');
                $('#tempId').val('3');

                if (localStorage.length === 0) {
                    defaultValues();
                }else{
                    setValues();
                }
            });

        }
    );
    $('#fourthTemp').click(
        function () {
            $('#templateSection').addClass('skeleton-loader');
            $("#templateSection").load("assets/template/templateFour.php", function () {
                $('#templateSection').removeClass('skeleton-loader');
                $('#tempId').val('4');

                if (localStorage.length === 0) {
                    defaultValues();
                }else{
                    setValues();
                }
            });

        }
    );
    $('#fifthTemp').click(
        function () {
            $('#templateSection').addClass('skeleton-loader');
            $("#templateSection").load("assets/template/templateFive.php", function () {
                $('#templateSection').removeClass('skeleton-loader');
                $('#tempId').val('5');

                if (localStorage.length === 0) {
                    defaultValues();
                }else{
                    setValues();
                }
            });

        }
    );

    function defaultValues(){
        $('#name,#title,#companyName,#officeNo,#mobileNo,#webUrl,#email,#address,#fbook,#linked,#twi,#insta').css("display", "block");
        $('#name').text("Mark Mason");
        $('#title').text("Marketing Manager");
        $('#companyName').text("XYZ Corporation");
        $('#email').text("markmsn@gmail.com");
        $('#mobileNo').text("+1 (555) 987-6543");
        $('#officeNo').text("+1 (555) 123-4567");
        $('#webUrl').text("www.xyzcorp.com");
        $('#address').text("123 Main Street, Suite 456, Cityville");
        $("#selected-image").css({'background': 'white'});
    }

    //----------------------------------------------------------------------------------------------------------------------


    // inout fields---------------------------------------------------------------------------------------------------------
    $('#Name').keyup(
        function () {
            var inputText = $('#Name').val();

            // Save the input text in local storage
            localStorage.setItem('inputText', inputText);

            // Update the content of the element with id 'name'
            $('#name').text(inputText);

            // You can also update other parts of your code or call functions here
            checkAllInputFields();
        }
    );
    $('#Title').keyup(
        function () {
            localStorage.setItem('title', $('#Title').val());
            $('#title').text($('#Title').val());
            checkAllInputFields();
        }
    );
    $('#comName').keyup(
        function () {
            localStorage.setItem('comName', $('#comName').val());
            $('#companyName').text($('#comName').val());
            checkAllInputFields();
        }
    );
    $('#OfficeNo').keyup(
        function () {
            localStorage.setItem('officeNo', $('#OfficeNo').val());
            $('#officeNo').text($('#OfficeNo').val());

            let value = $('#OfficeNo').val();
            const regex = /^(\+|\d|\()[0-9\s()-]*$/;
            if (value !== "") {
                if (regex.test(value)) {
                    $('#OfficeNo').css("color", "black");
                    $('#offNoValidLbl').css("display", "none");
                    if (value.length < 5) {
                        $('#offNoLengthLbl').css("display", "block");
                    } else {
                        $('#offNoLengthLbl').css("display", "none");
                    }
                } else {
                    $('#OfficeNo').css("color", "red");
                    $('#offNoValidLbl').css("display", "block");
                    if (value.length < 5) {
                        $('#offNoLengthLbl').css("display", "block");
                    } else {
                        $('#offNoLengthLbl').css("display", "none");
                    }
                }
            } else {
                $('#OfficeNo').css("color", "black");
                $('#offNoValidLbl').css("display", "none");
                $('#offNoLengthLbl').css("display", "none");
            }

            checkAllInputFields();
        }
    );
    $('#mobileBo').keyup(
        function () {
            localStorage.setItem('mobileNo', $('#mobileBo').val());
            $('#mobileNo').text($('#mobileBo').val());

            let value = $('#mobileBo').val();
            const regex = /^(\+|\d|\()[0-9\s()-]*$/;

            if (value !== "") {
                if (regex.test(value)) {
                    $('#mobileBo').css("color", "black");
                    $('#mobNoValidLbl').css("display", "none");
                    if (value.length < 5) {
                        $('#mobNoLengthLbl').css("display", "block");
                    } else {
                        $('#mobNoLengthLbl').css("display", "none");
                    }
                } else {
                    $('#mobileBo').css("color", "red");
                    $('#mobNoValidLbl').css("display", "block");
                    if (value.length < 5) {
                        $('#mobNoLengthLbl').css("display", "block");
                    } else {
                        $('#mobNoLengthLbl').css("display", "none");
                    }
                }
            } else {
                $('#mobileBo').css("color", "black");
                $('#mobNoValidLbl').css("display", "none");
                $('#mobNoLengthLbl').css("display", "none");
            }
            checkAllInputFields();
        }
    );
    $('#url').keyup(
        function () {
            localStorage.setItem('url', $('#url').val());
            $('#webUrl').text($('#url').val());

            let value = $('#url').val();
            const urlRegex = /^(?:(https?|ftp):\/\/)?((?:[A-Za-z0-9-]+\.?)+[A-Za-z]{2,})(?::\d+)?(\/[^\s]*)?$/i;

            if (value !== "") {
                if (urlRegex.test(value)) {
                    $('#url').css("color", "black");
                    $('#webValidLbl').css("display", "none");
                } else {
                    $('#url').css("color", "red");
                    $('#webValidLbl').css("display", "block");
                }
            } else {
                $('#url').css("color", "black");
                $('#webValidLbl').css("display", "none");
            }
            checkAllInputFields();
        }
    );
    $('#Email').keyup(
        function () {
            localStorage.setItem('email', $('#Email').val());
            $('#email').text($('#Email').val());

            let value = $('#Email').val();
            const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

            if (value !== "") {
                if (emailRegex.test(value)) {
                    $('#Email').css("color", "black");
                    $('#emailValidLbl').css("display", "none");
                } else {
                    $('#Email').css("color", "red");
                    $('#emailValidLbl').css("display", "block");
                }
            } else {
                $('#Email').css("color", "black");
                $('#emailValidLbl').css("display", "none");
            }
            checkAllInputFields();
        }
    );
    $('#Address').keyup(
        function () {
            localStorage.setItem('address', $('#Address').val());
            $('#address').text($('#Address').val());
            checkAllInputFields();
        }
    );

    $('#facebook').keyup(
        function () {
            localStorage.setItem('facebook', $('#facebook').val());
            let value = $('#facebook').val();
            const urlRegex = /^(https?|ftp):\/\/[^\s/$.?#].[^\s]*$/i;

            if (value !== "") {
                if (urlRegex.test(value)) {
                    $('#facebook').css("color", "black");
                    $('#facebookValidLbl').css("display", "none");
                } else {
                    $('#facebook').css("color", "red");
                    $('#facebookValidLbl').css("display", "block");
                }
            } else {
                $('#facebook').css("color", "black");
                $('#facebookValidLbl').css("display", "none");
            }
            checkAllInputFields();
        }
    );
    $('#linkedIn').keyup(
        function () {
            localStorage.setItem('linkedIn', $('#linkedIn').val());
            let value = $('#linkedIn').val();
            const urlRegex = /^(https?|ftp):\/\/[^\s/$.?#].[^\s]*$/i;

            if (value !== "") {
                if (urlRegex.test(value)) {
                    $('#linkedIn').css("color", "black");
                    $('#linkedValidLbl').css("display", "none");
                } else {
                    $('#linkedIn').css("color", "red");
                    $('#linkedValidLbl').css("display", "block");
                }
            } else {
                $('#linkedIn').css("color", "black");
                $('#linkedValidLbl').css("display", "none");
            }
            checkAllInputFields();
        }
    );
    $('#twitter').keyup(
        function () {
            localStorage.setItem('twitter', $('#twitter').val());
            let value = $('#twitter').val();
            const urlRegex = /^(https?|ftp):\/\/[^\s/$.?#].[^\s]*$/i;

            if (value !== "") {
                if (urlRegex.test(value)) {
                    $('#twitter').css("color", "black");
                    $('#twitterValidLbl').css("display", "none");
                } else {
                    $('#twitter').css("color", "red");
                    $('#twitterValidLbl').css("display", "block");
                }
            } else {
                $('#twitter').css("color", "black");
                $('#twitterValidLbl').css("display", "none");
            }
            checkAllInputFields();
        }
    );

    $('#instagram').keyup(
        function () {
            localStorage.setItem('instagram', $('#instagram').val());
            let value = $('#instagram').val();
            const urlRegex = /^(https?|ftp):\/\/[^\s/$.?#].[^\s]*$/i;

            if (value !== "") {
                if (urlRegex.test(value)) {
                    $('#instagram').css("color", "black");
                    $('#instagramValidLbl').css("display", "none");
                } else {
                    $('#instagram').css("color", "red");
                    $('#instagramValidLbl').css("display", "block");
                }
            } else {
                $('#instagram').css("color", "black");
                $('#instagramValidLbl').css("display", "none");
            }
            checkAllInputFields();
        }
    );

    function checkAllInputFields() {
        $('#name,#title,#companyName,#officeNo,#mobileNo,#webUrl,#email,#address,#fbook,#linked,#twi,#insta').css("display", "none");
        let name = $('#Name').val();
        let title = $('#Title').val();
        let comName = $('#comName').val();
        let officeNo = $('#OfficeNo').val();
        let mobileNo = $('#mobileBo').val();
        let url = $('#url').val();
        let email = $('#Email').val();
        let address = $('#Address').val();
        let fb = $('#facebook').val();
        let li = $('#linkedIn').val();
        let twi = $('#twitter').val();
        let instagram = $('#instagram').val();
        if (name !== "") {
            $('#name').css("display", "block");
        }
        if (title !== "") {
            $('#title').css("display", "block");
        }
        if (comName !== "") {
            $('#companyName').css("display", "block");
        }
        if (officeNo !== "") {
            $('#officeNo').css("display", "block");
        }
        if (mobileNo !== "") {
            $('#mobileNo').css("display", "block");
        }
        if (url !== "") {
            $('#webUrl').css("display", "block");
        }
        if (email !== "") {
            $('#email').css("display", "block");
        }
        if (address !== "") {
            $('#address').css("display", "block");
        }
        if (fb !== "") {
            $('#fbook').css("display", "block");
        }
        if (li !== "") {
            $('#linked').css("display", "block");
        }
        if (twi !== "") {
            $('#twi').css("display", "block");
        }
        if (instagram !== "") {
            $('#insta').css("display", "block");
        }
        $('#fbook').attr('href', fb);
        $('#linked').attr('href', li);
        $('#twi').attr('href', twi);
        $('#insta').attr('href', instagram);

        if (
            ($("#Name").val() == "") ||
            ($("#OfficeNo").val() !== "" && $("#OfficeNo").val().length < 5 || $("#offNoValidLbl").css("display") === "block") ||
            ($("#mobileBo").val() !== "" && $("#mobileBo").val().length < 5 || $("#mobNoValidLbl").css("display") === "block") ||
            ($("#url").val() !== "" && $("#webValidLbl").css("display") === "block") ||
            ($("#Email").val() !== "" && $("#emailValidLbl").css("display") === "block") ||
            ($("#facebook").val() !== "" && $("#facebookValidLbl").css("display") === "block") ||
            ($("#linkedIn").val() !== "" && $("#linkedValidLbl").css("display") === "block") ||
            ($("#twitter").val() !== "" && $("#twitterValidLbl").css("display") === "block") ||
            ($("#instagram").val() !== "" && $("#instagramValidLbl").css("display") === "block")
        ) {
            $("#btnCopy").prop('disabled', true);
            $("#btnSave").prop('disabled', true);
            $("#btnUpdate").prop('disabled', true);
        } else {
            $("#btnCopy").prop('disabled', false);
            $("#btnSave").prop('disabled', false);
            $("#btnUpdate").prop('disabled', false);
        }
    }

    //----------------------------------------------------------------------------------------------------------------------

    $('#btnCopy').click(
        function () {
            copyDivToClipboard();
            $('#btnCopy').text("Copied");
            $('#btnCopy').css("background-color", "#5891e8");
            setTimeout(function () {
                $('#btnCopy').text("Copy Signature");
                $('#btnCopy').css("background-color", "#1F365C");
            }, 2000);
        }
    );

    function copyDivToClipboard() {
        var imagePaths = localStorage.getItem('image-file');
        $("#selected-image").css({
            'background': 'url(https://email-signature-generator.dataintimate.net/db/image/'+imagePaths+') center/cover no-repeat',
        });

        var range = document.createRange();
        range.selectNode(document.querySelector(".example"));
        window.getSelection().removeAllRanges(); // clear current selection
        window.getSelection().addRange(range); // to select text
        document.execCommand("copy");
        window.getSelection().removeAllRanges();// to deselect
    }

    $('#txtClearAll,#txtClearAllIcn').click(
        function () {
            clearInputValues();
            $("#btnCopy").prop('disabled', true);
        }
    );

    function clearInputValues() {
        $('#Name,#Title,#comName,#OfficeNo,#mobileBo,#url,#Email,#Address,#linkedIn,#facebook,#twitter,#instagram').val("");
        $('#name,#title,#companyName,#officeNo,#mobileNo,#webUrl,#email,#address,#fbook,#linked,#twi,#insta').css("display", "block");
        $('#name').text("Mark Mason");
        $('#title').text("Marketing Manager");
        $('#companyName').text("XYZ Corporation");
        $('#email').text("markmsn@gmail.com");
        $('#mobileNo').text("+1 (555) 987-6543");
        $('#officeNo').text("+1 (555) 123-4567");
        $('#webUrl').text("www.xyzcorp.com");
        $('#address').text("123 Main Street, Suite 456, Cityville");
        $("#selected-image").css({'background': 'white'});
        localStorage.clear();
    }

    $('#docDiv>.fa-circle-xmark').click(
        function () {
            $('#docDiv').fadeOut(500);
            $("#templateSection").css("display", "flex");
            $("#btnCopy").css("display", "inline-block");
            $("#txtClearAllIcn, #txtClearAll").css("display", "inline-block");
            if($(".smTemp").css("display")=="none"){
                $("#txtNewSignature").css("display", "block");
                $("#btnUpdate").css("display", "inline-block");
                $("#btnDelete").css("display", "inline-block");
            }else{
                $("#txtSavedSignatures").css("display", "block");
            }
        }
    );

    $('#instructionsDiv').click(
        function () {
            if($('#docDiv').css("display")=="none"){
                $('#docDiv').fadeIn(500);
                $("#templateSection").css("display", "none");
                $("#btnCopy").css("display", "none");
                $("#txtClearAllIcn, #txtClearAll").css("display", "none");
                $("#txtSavedSignatures").css("display", "none");
                $("#btnUpdate").css("display", "none");
                $("#btnDelete").css("display", "none");
                $("#txtNewSignature").css("display", "none");
            }else{
                $('#docDiv').fadeOut(500);
                $("#templateSection").css("display", "flex");
                $("#btnCopy").css("display", "inline-block");
                $("#txtClearAllIcn, #txtClearAll").css("display", "inline-block");
                if($(".smTemp").css("display")=="none"){
                    $("#txtNewSignature").css("display", "block");
                    $("#btnUpdate").css("display", "inline-block");
                    $("#btnDelete").css("display", "inline-block");
                }else{
                    $("#txtSavedSignatures").css("display", "block");
                }
            }
        }
    );

    $(window).on('load', function () {
        $("#templateSection").load("assets/template/templateOne.php");
        $('#tempId').val('1');
    });


    $('#txtSavedSignatures').click(function () {

        $('.smTemp').css("display", "none");
        $(".example").css("display", "none");
        $('#btnSave').css("display", "none");
        $('#btnUpdate').css("display", "inline-block");
        $('#btnDelete').css("display", "inline-block");
        $('#txtSavedSignatures').css("display", "none");
        $('#txtNewSignature').css("display", "block");
        $('#txtNewSignature').css("display", "block");
        const url = localStorage.getItem("email_signature_image");
        $(document).ready(function () {
            var imgArray = <?php echo json_encode($imgArray); ?>; // Convert the PHP array to a JavaScript array

            for (let index = 0; index < imgArray.length; index++) {
                var imgData = imgArray[index]; // Get the image URL from the array

                var newTempDiv = $('<div id="newTemp' + index + '" class="svdTemp border rounded-3 mt-4"></div>');

                newTempDiv.css({
                    'background': 'url(db/image/' + imgData + ') center/cover no-repeat'
                });

                $('#cardBodyTemp').append(newTempDiv);
                newTempDiv.click(function () {
                    // Get the image name from the background URL
                    var imgName = imgArray[index]; // Assuming imgArray is defined in your code
                    // Load the template based on the image name
                    loadTemplate(imgName);

                });
            }
        });

    });

    $('#txtNewSignature').click(function () {

        $('.smTemp').css("display", "block");
        $(".example").css("display", "block");
        $('#btnSave').css("display", "inline-block");
        $('#btnUpdate').css("display", "none");
        $('#btnDelete').css("display", "none");
        $('#txtSavedSignatures').css("display", "block");
        $('#txtNewSignature').css("display", "none");
        $('.svdTemp').css("display", "none");
        clearInputValues();
    });

    $('#userDataForm').submit(function (evt) {
        // Prevent the form from submitting
        evt.preventDefault();
        // Capture the required actions when the form is submitted
        html2canvas(document.querySelector('.example')).then(function (canvas) {
            var imgData = canvas.toDataURL('image/png');
            // Create a temporary link to download the image
            var a = document.createElement('a');
            a.href = imgData;
            // a.download = 'email_signature.png';
            a.style.display = 'none';
            document.body.appendChild(a);
            a.click();
            document.body.removeChild(a);
            // Set the saved image as the background of the #firstTemp element
            localStorage.setItem('email_signature_image', imgData);
            $('#tempImg').val(imgData);
            // Finally, submit the form after the image capture is done
            $('#userDataForm').off('submit').submit();
        });
    });

    function loadTemplate(imgName) {
        $.ajax({
            type: "GET",
            url: "db/load_template.php", // Replace with the actual URL to your template loading script
            data: {imgName: imgName},
            success: function (template) {
                // Display the loaded template in a modal or a specific container
                // For example, you can use a Bootstrap modal to display the template content
                var xhr = new XMLHttpRequest();
                xhr.open("GET", "assets/template/" + template, true);
                if (template == 'templateOne.php') {
                    $('#tempId').val('1');
                }
                if (template == 'templateTwo.php') {
                    $('#tempId').val('2');
                }
                if (template == 'templateThree.php') {
                    $('#tempId').val('3');
                }
                if (template == 'templateFour.php') {
                    $('#tempId').val('4');
                }
                if (template == 'templateFive.php') {
                    $('#tempId').val('5');
                }

                xhr.onreadystatechange = function () {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        // Set the fetched content into the div

                        document.getElementById("templateSection").innerHTML = xhr.responseText;

                        loadDetails(imgName);

                    }
                };
                xhr.send();

            },
            error: function () {
                // Handle errors if template loading fails
                alert('Failed to load the template.' + imgName);
            }
        });
    }

    function setDetails(details) {
        const detailsData = JSON.parse(details);

        var linekdIn = detailsData.linkedIn;
        var facebook = detailsData.facebook;
        var twitter = detailsData.twitter;
        var instagram = detailsData.instagram;
        if (facebook == "") {
            $('#fbook').css("display", "none");
        }
        if (linekdIn == "") {
            $('#linked').css("display", "none");
        }
        if (twitter == "") {
            $('#twi').css("display", "none");
        }
        if (instagram == "") {
            $('#insta').css("display", "none");
        }
        var name = detailsData.name;
        var title = detailsData.title;
        var images = detailsData.image;
        var comName = detailsData.companyName;
        var address = detailsData.address;
        var email = detailsData.email;
        var officeNo = detailsData.officeNo;
        var mobileNo = detailsData.mobileNo;
        var web = detailsData.webUrl;
        var backColor1 = detailsData.backColor1;
        var backColor2 = detailsData.backColor2;
        var linkColor = detailsData.linkColor;
        var textColor = detailsData.textColor;
        var fontFamily = detailsData.fontFamily;
        var fontSize = detailsData.fontSize;
        console.log(images);

        $('#Name').val(name)
        $('#Title').val(title)
        $('#comName').val(comName)
        $('#OfficeNo').val(officeNo)
        $('#mobileBo').val(mobileNo)
        $('#url').val(web)
        $('#Email').val(email)
        $('#Address').val(address)
        $('#linkedIn').val(linekdIn)
        $('#facebook').val(facebook)
        $('#twitter').val(twitter)
        $('#instagram').val(instagram)
        $('#inpFontSize').val(fontSize)
        $('#slctFontFam').val(fontFamily)
        $('#inpTextColor').val(textColor)
        $('#inpLinkColor').val(linkColor)
        $('#inpBackColor2').val(backColor2)
        $('#inpBackColor').val(backColor1)

        $("#selected-image").css({
            'background': 'url(db/image/' + images + ') center/cover no-repeat'
        });
        $('#name').html(name)
        $('#title').html(title);
        $('#address').html(address);
        $('#companyName').html(comName);
        $('#email').html(email);
        $('#officeNo').html(officeNo);
        $('#mobileNo').html(mobileNo);
        $('#webUrl').html(web);
        $('#linked').attr('href', linekdIn);
        $('#fbook').attr('href', facebook);
        $('#twi').attr('href', twitter);
        $('#insta').attr('href', instagram);
        if (backColor1 != "") {
            $(".backgroundColor").css({
                'background-color': backColor1
            });
        }
        if (backColor2 != "") {
            $(".backgroundColor2").css({
                'background-color': backColor2
            })
        }
        $("#name,#title,#companyName,#email,#address,#mobileNo,#officeNo,#webUrl").css({
            'color': textColor
        })
        let color = linkColor;
        let colorWithoutHash = color.substring(1);

        let srcTwitter = "https://img.icons8.com/ios-filled/30/" + colorWithoutHash + "/twitterx--v1.png";
        let srcLinked = "https://img.icons8.com/ios-filled/30/" + colorWithoutHash + "/linkedin.png";
        let srcFBook = "https://img.icons8.com/ios-filled/30/" + colorWithoutHash + "/facebook--v1.png";
        let srcInsta = "https://img.icons8.com/ios-filled/30/" + colorWithoutHash + "/instagram-new--v1.png";

        if (color != "") {
            $("#imgTwitter").attr("src", srcTwitter);
            $("#imgLinkedIn").attr("src", srcLinked);
            $("#imgFBook").attr("src", srcFBook);
            $("#imgInsta").attr("src", srcInsta);
        }

        $("#name,#title,#companyName,#email,#address,#mobileNo,#officeNo,#webUrl").css({
            'font-size': fontSize + 'px'
        });

        $("#name,#title,#companyName,#email,#address,#mobileNo,#officeNo,#webUrl").css({
            'font-family': fontFamily
        })
    }

    function loadDetails(imgName) {
        $.ajax({
            type: "GET",
            url: "db/detail_template.php",
            data: {imgName: imgName},
            success: function (details) {

                setDetails(details);
                updateDeyail(imgName)
                deleteDeyail(imgName)
            },
            error: function () {
                alert('Failed to load details: ' + imgName);
            }
        });
    }

    function takePicture() {
        html2canvas(document.querySelector('.example')).then(function (canvas) {
            var imgData = canvas.toDataURL('image/png');
            var a = document.createElement('a');
            a.href = imgData;
            a.download = 'email_signature.png';
            a.style.display = 'none';
            document.body.appendChild(a);
            a.click();
            document.body.removeChild(a);
            localStorage.setItem('email_signature_image', imgData);
            $('#tempImg').val("");
            $('#tempImg').val(imgData);
        });
    }

    function updateDeyail(imgName) {
        console.log(imgName);
        $(document).ready(function () {
            $("#btnUpdate").click(function () {
                takePicture();
                setTimeout(function () {
                    // Serialize the form data
                    var formData = $("#userDataForm").serialize();
                    formData += '&imgName=' + imgName;
                    // Make an AJAX request to send the form data
                    $.ajax({
                        type: "POST",
                        url: "db/update_details.php", // Replace with the URL of your PHP script
                        data: formData,
                        success: function (response) {
                            // Handle the server response here
                            alert("Data Update successfully!");
                            location.reload();
                        },
                        error: function () {
                            // Handle errors here
                            alert("Failed to update data.");
                        }
                    });
                }, 5000);
            });
        });
    }

    function deleteDeyail(imgName) {

        $(document).ready(function () {
            $("#btnDelete").click(function () {
                $.ajax({
                    type: "POST",
                    url: "db/delete_details.php", // Replace with the URL of your PHP script
                    data: {imgName: imgName},
                    success: function (response) {
                        alert("Data Delete successfully!");
                        location.reload();
                    },
                    error: function () {
                        alert("Failed to update data.");
                    }
                });
            });
        });
    }

    //skeleton loader
    const allSkeleton = document.querySelectorAll('.skelton')
    const nodeListOf = document.querySelectorAll('label');
    window.addEventListener('load', function() {
        $('#templateSection').removeClass('skeleton-loader');



        allSkeleton.forEach(item=> {
            item.classList.remove('skelton')


        })
        nodeListOf.forEach(item1=>{
            item1.classList.remove('skeleton-paragraph')
        })
    })


</script>
