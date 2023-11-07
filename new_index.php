
<?php
$dbSeverName = "localhost";
$dbUserName = "root";
$dbPassword = "";
$dbName = "Es_auto";
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
    // small templates------------------------------------------------------------------------------------------------------
    $('#firstTemp').click(
        function () {
            $("#templateSection").load("assets/template/templateOne.php");
            $('#tempId').val('1');
        }
    );
    $('#secondTemp').click(
        function () {
            $("#templateSection").load("assets/template/templateTwo.php");
            $('#tempId').val('2');
        }
    );
    $('#thirdTemp').click(
        function () {
            $("#templateSection").load("assets/template/templateThree.php");
            $('#tempId').val('3');
        }
    );
    $('#fourthTemp').click(
        function () {
            $("#templateSection").load("assets/template/templateFour.php");
            $('#tempId').val('4');
        }
    );
    $('#fifthTemp').click(
        function () {
            $("#templateSection").load("assets/template/templateFive.php");
            $('#tempId').val('5');
        }
    );

    //----------------------------------------------------------------------------------------------------------------------

    // inout fields---------------------------------------------------------------------------------------------------------
    $('#Name').keyup(
        function () {
            $('#name').text($('#Name').val());
            checkAllInputFields();
        }
    );
    $('#Title').keyup(
        function () {
            $('#title').text($('#Title').val());
            checkAllInputFields();
        }
    );
    $('#comName').keyup(
        function () {
            $('#companyName').text($('#comName').val());
            checkAllInputFields();
        }
    );
    $('#OfficeNo').keyup(
        function () {
            $('#officeNo').text($('#OfficeNo').val());

            let value = $('#OfficeNo').val();
            const regex = /^(\+|\d|\()[0-9\s()-]*$/;
            if(value!==""){
                if (regex.test(value)) {
                    $('#OfficeNo').css("color","black");
                    $('#offNoValidLbl').css("display","none");
                    if(value.length<5){
                        $('#offNoLengthLbl').css("display","block");
                    }else{
                        $('#offNoLengthLbl').css("display","none");
                    }
                } else {
                    $('#OfficeNo').css("color","red");
                    $('#offNoValidLbl').css("display","block");
                    if(value.length<5){
                        $('#offNoLengthLbl').css("display","block");
                    }else{
                        $('#offNoLengthLbl').css("display","none");
                    }
                }
            }else{
                $('#OfficeNo').css("color","black");
                $('#offNoValidLbl').css("display","none");
                $('#offNoLengthLbl').css("display","none");
            }

            checkAllInputFields();
        }
    );
    $('#mobileBo').keyup(
        function () {
            $('#mobileNo').text($('#mobileBo').val());

            let value = $('#mobileBo').val();
            const regex = /^(\+|\d|\()[0-9\s()-]*$/;

            if(value!==""){
                if (regex.test(value)) {
                    $('#mobileBo').css("color","black");
                    $('#mobNoValidLbl').css("display","none");
                    if(value.length<5){
                        $('#mobNoLengthLbl').css("display","block");
                    }else{
                        $('#mobNoLengthLbl').css("display","none");
                    }
                } else {
                    $('#mobileBo').css("color","red");
                    $('#mobNoValidLbl').css("display","block");
                    if(value.length<5){
                        $('#mobNoLengthLbl').css("display","block");
                    }else{
                        $('#mobNoLengthLbl').css("display","none");
                    }
                }
            }else{
                $('#mobileBo').css("color","black");
                $('#mobNoValidLbl').css("display","none");
                $('#mobNoLengthLbl').css("display","none");
            }
            checkAllInputFields();
        }
    );
    $('#url').keyup(
        function () {
            $('#webUrl').text($('#url').val());

            let value = $('#url').val();
            const urlRegex = /^(?:(https?|ftp):\/\/)?((?:[A-Za-z0-9-]+\.?)+[A-Za-z]{2,})(?::\d+)?(\/[^\s]*)?$/i;

            if(value!==""){
                if (urlRegex.test(value)) {
                    $('#url').css("color","black");
                    $('#webValidLbl').css("display","none");
                } else {
                    $('#url').css("color","red");
                    $('#webValidLbl').css("display","block");
                }
            }else{
                $('#url').css("color","black");
                $('#webValidLbl').css("display","none");
            }
            checkAllInputFields();
        }
    );
    $('#Email').keyup(
        function () {
            $('#email').text($('#Email').val());

            let value = $('#Email').val();
            const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

            if(value!==""){
                if (emailRegex.test(value)) {
                    $('#Email').css("color","black");
                    $('#emailValidLbl').css("display","none");
                } else {
                    $('#Email').css("color","red");
                    $('#emailValidLbl').css("display","block");
                }
            }else{
                $('#Email').css("color","black");
                $('#emailValidLbl').css("display","none");
            }
            checkAllInputFields();
        }
    );
    $('#Address').keyup(
        function () {
            $('#address').text($('#Address').val());
            checkAllInputFields();
        }
    );

    $('#facebook').keyup(
        function () {
            let value = $('#facebook').val();
            const urlRegex = /^(https?|ftp):\/\/[^\s/$.?#].[^\s]*$/i;

            if(value!==""){
                if (urlRegex.test(value)) {
                    $('#facebook').css("color","black");
                    $('#facebookValidLbl').css("display","none");
                } else {
                    $('#facebook').css("color","red");
                    $('#facebookValidLbl').css("display","block");
                }
            }else{
                $('#facebook').css("color","black");
                $('#facebookValidLbl').css("display","none");
            }
            checkAllInputFields();
        }
    );
    $('#linkedIn').keyup(
        function () {
            let value = $('#linkedIn').val();
            const urlRegex = /^(https?|ftp):\/\/[^\s/$.?#].[^\s]*$/i;

            if(value!==""){
                if (urlRegex.test(value)) {
                    $('#linkedIn').css("color","black");
                    $('#linkedValidLbl').css("display","none");
                } else {
                    $('#linkedIn').css("color","red");
                    $('#linkedValidLbl').css("display","block");
                }
            }else{
                $('#linkedIn').css("color","black");
                $('#linkedValidLbl').css("display","none");
            }
            checkAllInputFields();
        }
    );
    $('#twitter').keyup(
        function () {
            let value = $('#twitter').val();
            const urlRegex = /^(https?|ftp):\/\/[^\s/$.?#].[^\s]*$/i;

            if(value!==""){
                if (urlRegex.test(value)) {
                    $('#twitter').css("color","black");
                    $('#twitterValidLbl').css("display","none");
                } else {
                    $('#twitter').css("color","red");
                    $('#twitterValidLbl').css("display","block");
                }
            }else{
                $('#twitter').css("color","black");
                $('#twitterValidLbl').css("display","none");
            }
            checkAllInputFields();
        }
    );

    $('#instagram').keyup(
        function () {
            let value = $('#instagram').val();
            const urlRegex = /^(https?|ftp):\/\/[^\s/$.?#].[^\s]*$/i;

            if(value!==""){
                if (urlRegex.test(value)) {
                    $('#instagram').css("color","black");
                    $('#instagramValidLbl').css("display","none");
                } else {
                    $('#instagram').css("color","red");
                    $('#instagramValidLbl').css("display","block");
                }
            }else{
                $('#instagram').css("color","black");
                $('#instagramValidLbl').css("display","none");
            }
            checkAllInputFields();
        }
    );

    function checkAllInputFields(){
        $('#name,#title,#companyName,#officeNo,#mobileNo,#webUrl,#email,#address,#fbook,#linked,#twi,#insta').css("display","none");
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
        if(name!==""){
            $('#name').css("display","block");
        }
        if(title!==""){
            $('#title').css("display","block");
        }
        if(comName!==""){
            $('#companyName').css("display","block");
        }
        if(officeNo!==""){
            $('#officeNo').css("display","block");
        }
        if(mobileNo!==""){
            $('#mobileNo').css("display","block");
        }
        if(url!==""){
            $('#webUrl').css("display","block");
        }
        if(email!==""){
            $('#email').css("display","block");
        }
        if(address!==""){
            $('#address').css("display","block");
        }
        if(fb!==""){
            $('#fbook').css("display","block");
        }
        if (li!==""){
            $('#linked').css("display","block");
        }
        if (twi!==""){
            $('#twi').css("display","block");
        }
        if (instagram!==""){
            $('#insta').css("display","block");
        }
        $('#fbook').attr('href', fb);
        $('#linked').attr('href', li);
        $('#twi').attr('href', twi);
        $('#insta').attr('href', instagram);

        if(
            ($("#Name").val()=="") ||
            ($("#OfficeNo").val()!=="" && $("#OfficeNo").val().length<5 || $("#offNoValidLbl").css("display") === "block") ||
            ($("#mobileBo").val()!=="" && $("#mobileBo").val().length<5 || $("#mobNoValidLbl").css("display") === "block") ||
            ($("#url").val()!=="" && $("#webValidLbl").css("display") === "block") ||
            ($("#Email").val()!=="" && $("#Email").css("display") === "block") ||
            ($("#facebook").val()!=="" && $("#facebook").css("display") === "block") ||
            ($("#linkedIn").val()!=="" && $("#linkedValidLbl").css("display") === "block") ||
            ($("#twitter").val()!=="" && $("#twitter").css("display") === "block") ||
            ($("#instagram").val()!=="" && $("#instagram").css("display") === "block")
        ){
            $("#btnCopy").prop('disabled', true);
            $("#btnSave").prop('disabled', true);
            $("#btnUpdate").prop('disabled', true);
        }else{
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
            $('#btnCopy').css("background-color","#5891e8");
            setTimeout(function() {
                $('#btnCopy').text("Copy Signature");
                $('#btnCopy').css("background-color","#1F365C");
            }, 2000);
        }
    );

    function copyDivToClipboard() {
        var range = document.createRange();
        range.selectNode(document.querySelector(".example"));
        window.getSelection().removeAllRanges(); // clear current selection
        window.getSelection().addRange(range); // to select text
        document.execCommand("copy");
        window.getSelection().removeAllRanges();// to deselect
    }

    $('#txtClearAll,#txtClearAllIcn').click(
        function (){
            clearInputValues();
        }
    );

    function clearInputValues(){
        $('#Name,#Title,#comName,#OfficeNo,#mobileBo,#url,#Email,#Address,#linkedIn,#facebook,#twitter,#instagram').val("");
        $('#name,#title,#companyName,#officeNo,#mobileNo,#webUrl,#email,#address,#fbook,#linked,#twi,#insta').css("display","block");
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
    $('#docDiv>.fa-circle-xmark').click(
        function (){
            $('#docDiv').fadeOut(500);
        }
    );

    $('#instructionsDiv').click(
        function (){
            $('#docDiv').fadeIn(500);
        }
    );
    $(window).on('load',function () {
        $("#templateSection").load("assets/template/templateOne.php");
        $('#tempId').val('1');
    });

    $('#txtSavedSignatures').click(function (){
        // $('#h5Temp').css("display","none");
        // $('#h5SavedTemp').css("display","block");

        $('.smTemp').css("display","none");
        $(".example").css("display","none");

        $('#btnSave').css("display","none");
        $('#btnUpdate').css("display","inline-block");

        $('#txtSavedSignatures').css("display","none");
        $('#txtNewSignature').css("display","block");

        $('#txtNewSignature').css("display","block");
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
            }
        });

    });

    $('#txtNewSignature').click(function (){
        // $('#h5Temp').css("display","block");
        // $('#h5SavedTemp').css("display","none");

        $('.smTemp').css("display","block");
        $(".example").css("display","block");

        $('#btnSave').css("display","inline-block");
        $('#btnUpdate').css("display","none");

        $('#txtSavedSignatures').css("display","block");
        $('#txtNewSignature').css("display","none");

        $('.svdTemp').css("display","none");
    });

    $('#userDataForm').submit(function(evt) {
        // Prevent the form from submitting
        evt.preventDefault();

        // Capture the required actions when the form is submitted
        html2canvas(document.querySelector('.example')).then(function(canvas) {
            var imgData = canvas.toDataURL('image/png');

            // Create a temporary link to download the image
            var a = document.createElement('a');
            a.href = imgData;
            a.download = 'email_signature.png';
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
</script>

