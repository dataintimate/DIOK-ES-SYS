<script>
    $("#uploadBtn").click(function (){
        $("#file-input").click();
    })

    $("#file-input").change(function() {
        var fileName = $(this).val().split("\\").pop();
        alert("Selected file: " + fileName);

        // Set the selected image to the <img> element
        var fileInput = $(this)[0];
        if (fileInput.files && fileInput.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                // $("#selected-image").attr("src", e.target.result);
                // $("#selected-image").show(); // Show the image element
                // $("#selected-image").css({
                //     'background': 'url(' + e.target.result + ') center/cover no-repeat',
                //
                // });
                console.log(e.target.result);
                $('#image').val(e.target.result);
                localStorage.setItem("recent-image",reader.result);
                const url = localStorage.getItem("recent-image");
                $("#selected-image").css({
                    'background': 'url(' + url + ') center/cover no-repeat',

                });


            };
            reader.readAsDataURL(fileInput.files[0]);
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
        })

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

        let srcTwitter = "https://img.icons8.com/ios-glyphs/30/" + colorWithoutHash + "/twitter.png";
        let srcLinked = "https://img.icons8.com/ios-glyphs/30/" + colorWithoutHash + "/linkedin.png";
        let srcFBook = "https://img.icons8.com/ios-glyphs/30/" + colorWithoutHash + "/facebook-new.png";
        let srcInsta = "https://img.icons8.com/ios-glyphs/30/" + colorWithoutHash + "/instagram-new.png";

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

        let srcTwitter = "https://img.icons8.com/ios-glyphs/30/" + colorWithoutHash + "/twitter.png";
        let srcLinked = "https://img.icons8.com/ios-glyphs/30/" + colorWithoutHash + "/linkedin.png";
        let srcFBook = "https://img.icons8.com/ios-glyphs/30/" + colorWithoutHash + "/facebook-new.png";
        let srcInsta = "https://img.icons8.com/ios-glyphs/30/" + colorWithoutHash + "/instagram-new.png";

        linkColorPicker.val(linkColorValue.val());
        $("#imgTwitter").attr("src", srcTwitter);
        $("#imgLinkedIn").attr("src", srcLinked);
        $("#imgFBook").attr("src", srcFBook);
        $("#imgInsta").attr("src", srcInsta);
    });
</script>