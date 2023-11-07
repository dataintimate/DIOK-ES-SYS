<script>
    let btnTemp = $("#icnTemp");
    let btnInput = $("#icnInput");
    let btnStyle = $("#icnStyle");
    let btnImage = $("#icnImage");

    $("#icnTemp").css({
        "color" :"#668fd4"
    });
    $("#icnInput").css("color","white");
    $("#icnStyle").css("color","white");
    $("#icnImage").css("color","white");

    btnTemp.click(function () {
        hideCardBody();
        $("#cardBodyTemp").css("display", "flex");
        allDefault();
        $("#icnTemp").css({
            "color" :"#668fd4"
        });
    });

    btnInput.click(function () {
        hideCardBody();
        $("#cardBodyInput").css("display", "block");
        allDefault();
        $("#icnInput").css({
            "color" :"#668fd4"
        });
    });

    btnStyle.click(function () {
        hideCardBody();
        $("#cardBodyStyle").css("display", "block");
        allDefault();
        $("#icnStyle").css({
            "color" :"#668fd4"
        });
    });

    btnImage.click(function () {
        hideCardBody();
        $("#cardBodyImage").css("display", "block");
        allDefault();
        $("#icnImage").css({
            "color" :"#668fd4"
        });
    });

    function hideCardBody(){
        $("#cardBodyTemp").css("display", "none");
        $("#cardBodyInput").css("display", "none");
        $("#cardBodyStyle").css("display", "none");
        $("#cardBodyImage").css("display", "none");
    }

    function allDefault(){
        $("#icnTemp").css("color","white");
        $("#icnInput").css("color","white");
        $("#icnStyle").css("color","white");
        $("#icnImage").css("color","white");
    }
</script>