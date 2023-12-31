<script>
    $("#uploadBtn").click(function (){
        $("#file-input").click();
    })

    $("#file-input").change(function() {
        var fileInput = this;
        var file = fileInput.files[0];

        // Check if a file is selected
        if (file) {
            // Check the file size (in bytes)
            if (file.size <= 2 * 1024 * 1024) { // 2MB limit
                // alert
                Swal.fire({
                    title: 'File has been uploaded successfully..!',
                    icon: 'success',
                    showCancelButton: false,  // This will hide the "Cancel" button
                    showConfirmButton: false,  // This will hide the "OK" button
                    timer: 1000,
                    iconColor: '#4CAF50',
                    customClass: {
                        title: 'custom-title-color', // Define a custom class for the title
                    }
                });

                var fileName = file.name;
                // alert("Selected file: " + fileName);
                 var tempFIle = fileName;
                localStorage.setItem("image-file", fileName);
                var reader = new FileReader();
                reader.onload = function(e) {
                    var dataURL = e.target.result;

                    // Save the data URL in localStorage
                    localStorage.setItem("recent-image", dataURL);
                    var folder = "../../db/image/" +fileName;

                    // Set the background of the "selected-image" element
                    $("#selected-image").css({
                        'background': 'url('+""+') center/cover no-repeat',
                        'background': 'url('+dataURL+') center/cover no-repeat',
                    });
                };
                reader.readAsDataURL(file);
            } else {
                alert("File size exceeds the 2MB limit. Please select a smaller file.");
                // Optionally clear the file input
                $(this).val(""); // Clear the file input
            }
        }
    });

    $("#slctFontFam").click(function () {
        localStorage.setItem('fontFamily', $("#slctFontFam").val());
        let changeFont=$("#slctFontFam").val();
        $("#name,#title,#companyName,#email,#address,#mobileNo,#officeNo,#webUrl").css({
            'font-family': changeFont
        })

    });


    // Update the displayed value when the range input is changed
    $("#inpFontSize").on('input', function() {
        localStorage.setItem('fontSize', $("#inpFontSize").val());
        let value= $("#inpFontSize").val();
        console.log(value);

        $("#name,#title,#companyName,#email,#address,#mobileNo,#officeNo,#webUrl").css({
            'font-size': value+'px'
        })

    });


    $("#inpTextColorPick").on('input', function(e) {
        localStorage.setItem('textColor', $("#inpTextColorPick").val());
        $("#name,#title,#companyName,#email,#address,#mobileNo,#officeNo,#webUrl").css({
            'color':   $("#inpTextColorPick").val()
        });
        $(".line").css({
            'background-color':   $("#inpTextColorPick").val()
        });

    })


    $("#inpBackColorPick ").on('input', function(e) {
        localStorage.setItem('backColor1',  $("#inpBackColorPick").val());
        $(".backgroundColor").css({
            'background-color':   $("#inpBackColorPick").val()
        })
    })

    $("#inpBackColorPick2 ").on('input', function(e) {
        localStorage.setItem('backColor2',    $("#inpBackColorPick2").val());
        $(".backgroundColor2").css({
            'background-color':   $("#inpBackColorPick2").val()
        })
    })

    $("#inpLinkColorPick").on('input', function(e) {
        localStorage.setItem('linkColor',     $('#inpLinkColorPick').val());
        let color = $('#inpLinkColorPick').val();
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

    $("#removeBtn").click(function (){
        $("#selected-image").css({
            'background': 'white'

        });
        $("#file-input").val('');
        localStorage.setItem('recent-image',  "");
        Swal.fire({
            title: 'File has been removed successfully..!',
            icon: 'success',
            showCancelButton: false,  // This will hide the "Cancel" button
            showConfirmButton: false,  // This will hide the "OK" button
            timer: 1000,
            iconColor: '#4CAF50',
            customClass: {
                title: 'custom-title-color', // Define a custom class for the title
            }
        });
    });

    const range = $("#inpFontSize");
    const rangeValue = $("#rangeValue");

    range.on("input", function() {

        const value = range.val();
        const offset = (value - range.attr("min")) / (range.attr("max") - range.attr("min"));
        const position = offset * (range.width() - 10); // Adjust for padding/margin
        rangeValue.css("left", position + "px");
        rangeValue.text(value);
        rangeValue.show();
    });

    range.on("mouseup", function() {
        rangeValue.hide(); // Hide the span when interaction is complete
    });

    range.on("keydown", function(event) {
        if (event.which === 37 || event.which === 38 || event.which === 39 || event.which === 40) {
            rangeValue.show(); // Show the span when arrow keys are pressed
            setTimeout(function() {
                rangeValue.hide();
            }, 300);
        }
    });

    // color picker
    /////////////////////////////////
    const backColorPicker = $("#inpBackColorPick");
    const backColorValue = $("#inpBackColor");

    backColorPicker.on("input", function() {
        const selectedColor = backColorPicker.val();
        backColorValue.val(selectedColor);
    });

    const backColorPicker2 = $("#inpBackColorPick2");
    const backColorValue2 = $("#inpBackColor2");

    backColorPicker2.on("input", function() {
        const selectedColor = backColorPicker2.val();
        backColorValue2.val(selectedColor);
    });

    const textColorPicker = $("#inpTextColorPick");
    const textColorValue = $("#inpTextColor");

    textColorPicker.on("input", function() {
        const selectedColor = textColorPicker.val();
        textColorValue.val(selectedColor);
    });

    const linkColorPicker = $("#inpLinkColorPick");
    const linkColorValue = $("#inpLinkColor");

    linkColorPicker.on("input", function() {
        const selectedColor = linkColorPicker.val();
        linkColorValue.val(selectedColor);
    });

    $('#inpBackColor').on("keyup",function (){
        $(".backgroundColor").css({
            'background-color': $("#inpBackColor").val()
        })
        backColorPicker.val(backColorValue.val());
    });

    $('#inpBackColor2').on("keyup",function (){
        $(".backgroundColor2").css({
            'background-color': $("#inpBackColor2").val()
        })
        backColorPicker2.val(backColorValue2.val());
    });

    $('#inpTextColor').on("keyup",function (){
        $("#name,#title,#companyName,#email,#address,#mobileNo,#officeNo,#webUrl").css({
            'color':   $("#inpTextColor").val()
        })
        textColorPicker.val(textColorValue.val());
    });

    $('#inpLinkColor').on("keyup",function (){
        let color = $('#inpLinkColor').val();
        let colorWithoutHash = color.substring(1);

        let srcTwitter = "https://img.icons8.com/ios-filled/30/" + colorWithoutHash + "/twitterx--v1.png";
        let srcLinked = "https://img.icons8.com/ios-filled/30/" + colorWithoutHash + "/linkedin.png";
        let srcFBook = "https://img.icons8.com/ios-filled/30/" + colorWithoutHash + "/facebook--v1.png";
        let srcInsta = "https://img.icons8.com/ios-filled/30/" + colorWithoutHash + "/instagram-new--v1.png";

        linkColorPicker.val(linkColorValue.val());
        $("#imgTwitter").attr("src", srcTwitter);
        $("#imgLinkedIn").attr("src", srcLinked);
        $("#imgFBook").attr("src", srcFBook);
        $("#imgInsta").attr("src", srcInsta);
    });
</script>
