
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email Signature Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
          rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="assets/fontawesome/css/all.css">
    <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>

    <style>
        * {
            font-family: 'Montserrat', sans-serif;
            font-family: 'Poppins', sans-serif;
        }

        input[type="text"]:focus, input[type="tel"]:focus, input[type="email"]:focus, input[type="url"]:focus, select:focus {
            box-shadow: none;
            border: 1px solid #15489e !important;
        }

        button:hover {
            background-color: #15489e !important;
            color: white !important;
        }

        ::-webkit-scrollbar {
            background: rgba(21, 72, 158, 0.14);
        }

        ::-webkit-scrollbar-thumb {
            background: rgba(31, 54, 92, 1);
        }

        #mainSection {
            width: 100%;
        }

        .form-control {
            height: 34px;
        }

        .form-label {
            font-size: 13px;
        }

        .card {
            background: #ffffff;
        }

        .card-header {
            position: sticky;
            top: 0;
            padding-right: 0;
            padding-left: 0;
            padding-bottom: 18px;
            padding-top: 18px;
        }

        #templateSection {
            height: 400px;
            width: 800px;
            /*box-shadow: 0 -1px 8px 2px rgba(0, 0, 0, 0.14);*/
            margin-top: 50px;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #btnCopy {
            margin-top: 30px;
            border: 2px solid #1F365C;
            font-size: 12px;
            color: white;
            background-color: #1F365C;
            padding-right: 30px;
            padding-left: 30px;
            padding-top: 10px;
            padding-bottom: 10px;
        }

        #btnSave {
            margin-top: 15px;
            border: 2px solid #1F365C;
            font-size: 12px;
            color: white;
            background-color: #1F365C;
            padding-right: 30px;
            padding-left: 30px;
            padding-top: 10px;
            padding-bottom: 10px;
            width: 156.09px;
        }

        #btnUpdate {
            margin-top: 15px;
            border: 2px solid #1F365C;
            font-size: 12px;
            color: white;
            background-color: #1F365C;
            padding-right: 30px;
            padding-left: 30px;
            padding-top: 10px;
            padding-bottom: 10px;
            width: 156.09px;
            display: none;
        }

        #btnDelete{
            margin-top: 15px;
            border: 2px solid #1F365C;
            font-size: 12px;
            color: white;
            background-color: #1F365C;
            padding-right: 30px;
            padding-left: 30px;
            padding-top: 10px;
            padding-bottom: 10px;
            width: 156.09px;
            display: none;
        }

        a {
            text-decoration: none;
            color: #686868;
            font-size: 12px;
        }

        #firstCol {
            height: 100vh;
            overflow-y: scroll;
        }

        #firstCol::-webkit-scrollbar {
            width: 8px;
        }

        #secondCol {
            height: 100vh;
            overflow-y: auto;
            position: relative;
        }

        #secondCol::-webkit-scrollbar {
            width: 8px;
        }

        .header-icon {
            font-size: 22px;
            margin-right: 20px;
            margin-left: 20px;
        }

        #txtClearAll {
            display: inline-block;
            padding-right: 4px;
            margin-bottom: 10px;
            color: red;
        }

        #txtClearAllIcn {
            color: red;
        }

        #txtNewSignature {
            display: none;
            color: green;
        }

        #txtNewSignature:hover {
            font-weight: bold;
        }

        #txtSavedSignatures {
            display: inline-block;
            color: #4a7ecb;
            margin-bottom: 30px;
        }

        #cardBodyInput {
            display: none;
        }

        #cardBodyStyle {
            display: none;
        }

        #cardBodyImage {
            display: none;
        }

        #cardBodyTemp {
            display: flex;
            flex-direction: column;
            width: max-content;
            padding: 0;
            margin: auto;
        }

        .svdTemp {
            width: 270px;
            height: 135px;
            box-shadow: 0 -1px 8px 2px rgba(0, 0, 0, 0.14);
            margin-bottom: 45px;
        }

        .svdTemp:first-of-type {
            margin-top: 35px !important;
        }

        .svdTemp:last-of-type {
            margin-bottom: 60px;
        }

        .smTemp {
            width: 270px;
            height: 135px;
            /*box-shadow: 0 -1px 8px 2px rgba(0, 0, 0, 0.14);*/
            margin-bottom: 45px;
        }

        .smTemp:first-of-type {
            margin-top: 35px;
        }

        .smTemp:last-of-type {
            margin-bottom: 60px;
        }

        #inpBackColorPick, #inpTextColorPick, #inpLinkColorPick, #inpBackColorPick2 {
            padding: 0px;
            width: 100px;
            height: 100px;
            margin-left: -20px;
            margin-top: -20px;
        }

        .btnUploadImg, .btnRemoveImg {
            border: 2px solid #1F365C;
            font-size: 12px;
            color: white;
            background-color: #1F365C;
            width: 100%;
            padding-top: 10px;
            padding-bottom: 10px;
            text-align: center;
        }

        #cardBodyImageDiv {
            width: 60%;
        }

        #cardHead {
            z-index: 10;
        }

        #cardHead > i {
            cursor: pointer;
        }

        #instructionsDiv {
            position: fixed;
            top: 0;
            right: 0;
            background-color: #15489e;
            color: white;
            padding: 8px 12px;
            border-radius: 0 0 0 10px;
            cursor: pointer;
        }

        #instructionsDiv:hover {
            background-color: #1F365C
        }

        #instructionsDiv > p {
            margin: 0;
            font-size: 14px;
        }

        #docDiv {
            top: 0;
            bottom: 0;
            right: 0;
            left: 0;
            margin: auto;
            position: absolute;
            background: linear-gradient(90deg, rgba(15, 30, 53, 1) 0%, rgba(11, 32, 67, 1) 50%, rgba(13, 30, 59, 1) 100%);
            width: fit-content;
            height: fit-content;
            max-width: 70%;
            max-height: 90%;
            padding: 50px;
            overflow-y: auto;
            color: white;
            line-height: 30px;
            display: none;
        }

        #docDiv::-webkit-scrollbar {
            /*border-radius: 10px;*/
            width: 8px;
        }

        #docDiv::-webkit-scrollbar-thumb {
           color: red;
        }

        #docDiv > .fa-circle-xmark {
            position: absolute;
            right: 50px;
            top: 50px;
            font-size: 1.5em;
            cursor: pointer;
        }

        #docDiv > p:first-of-type {
            margin-top: 30px;
        }

        #docDiv > p {
            font-size: 13px;
            font-weight: lighter;
        }

        #docDiv .fa-circle-xmark:hover {
            color: #4a7ecb !important;
        }

        #firstTemp {
            background: url("assets/templateImages/temp1.jpg");
            background-position: center;
            background-size: contain;
            background-repeat: no-repeat;
        }

        #secondTemp {
            background: url("assets/templateImages/temp2.jpg");
            background-position: center;
            background-size: contain;
            background-repeat: no-repeat;
        }

        #thirdTemp {
            background: url("assets/templateImages/temp3.jpg");
            background-position: center;
            background-size: contain;
            background-repeat: no-repeat;
        }

        #fourthTemp {
            background: url("assets/templateImages/temp4.jpg");
            background-position: center;
            background-size: contain;
            background-repeat: no-repeat;
        }

        #fifthTemp {
            background: url("assets/templateImages/temp5.jpg");
            background-position: center;
            background-size: contain;
            background-repeat: no-repeat;
        }

        .clear:hover {
            font-weight: bold;
        }

        #txtSavedSignatures:hover {
            font-weight: bold;
        }

        #sideCard label, .card-title {
            color: #15489e;
        }

        #sideCard input, #sideCard select {
            border-color: rgba(21, 72, 158, 0.2);
            font-size: 12px;
        }

        #offNoValidLbl, #mobNoValidLbl, #mobNoLengthLbl, #offNoLengthLbl, #webValidLbl, #linkedValidLbl, #facebookValidLbl, #twitterValidLbl, #instagramValidLbl, #emailValidLbl {
            display: none;
        }

        @media all and (max-width: 1200px) {
            #templateSection {
                width: 700px;
                height: 350px;
            }

            .svdTemp {
                width: 220px;
                height: 110px;
            }

            .smTemp {
                width: 220px;
                height: 110px;
            }

            .header-icon {
                margin-right: 12px;
                margin-left: 12px;
            }

            .card-header {
                padding-right: 0;
                padding-left: 0;
                padding-bottom: 18px;
                padding-top: 18px;
            }

            #firstCol::-webkit-scrollbar {
                width: 5px;
            }

            #secondCol::-webkit-scrollbar {
                width: 5px;
            }
        }

        @media all and (max-width: 992px) and (min-width: 768px) {

            #firstRow {
                justify-content: center;
                flex-direction: column;
            }

            #firstCol {
                position: relative;
                top: 0;
                width: 90%;
                height: 60vh;
                margin: auto;
                border: 1px solid #1F365C;
                border-radius: 10px;
            }

            #cardBodyTemp > h5, #cardBodyInput > h5, #cardBodyStyle > h5, #cardBodyImage > h5 {
                display: none;
            }

            #cardBodyTemp {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                grid-template-rows: repeat(3, 1fr);
                column-gap: 20px;
                /*align-items: center;*/
                padding-bottom: 50px;
            }

            .svdTemp:first-of-type {
                margin-top: 30px;
                margin-bottom: 0;
            }

            .svdTemp:last-of-type {
                margin-bottom: 0px;
            }

            .smTemp:first-of-type {
                margin-top: 30px;
                margin-bottom: 0;
            }

            .smTemp:last-of-type {
                margin-bottom: 0px;
            }

            .svdTemp {
                width: 280px;
                height: 140px;
                margin-top: 30px;
                margin-bottom: 0;
            }

            .smTemp {
                width: 280px;
                height: 140px;
                margin-top: 30px;
                margin-bottom: 0;
            }

            .header-icon {
                margin-right: 60px;
                margin-left: 60px;
            }

            .card-header {
                padding-right: 0;
                padding-left: 0;
                padding-bottom: 18px;
                padding-top: 18px;
            }

            #instructionsDiv {
                position: relative;
                width: 100%;
                background-color: #15489e;
                color: white;
                padding: 8px 12px;
                cursor: pointer;
            }

            #firstCol::-webkit-scrollbar {
                width: 0px;
            }

            #secondCol::-webkit-scrollbar {
                width: 0px;
            }

            ::-webkit-scrollbar {
                width: 0px;
            }

            #docDiv {
                top: 0;
                bottom: 0;
                right: 0;
                left: 0;
                margin: auto;
                position: fixed;
                max-width: 100%;
                max-height: 100%;
                line-height: 30px;
                z-index: 100;
            }
        }

        @media all and (max-width: 768px) and (min-width: 577px) {

            #docDiv {
                top: 0;
                bottom: 0;
                right: 0;
                left: 0;
                margin: auto;
                position: fixed;
                max-width: 100%;
                max-height: 100%;
                line-height: 30px;
                z-index: 100;
            }

            #firstRow {
                */ justify-content: center;
                flex-direction: column;
            }

            #firstCol {
                position: relative;
                top: 0;
                width: 90%;
                height: 60vh;
                margin: auto;
                border: 2px solid #c9c9c9;
                border-radius: 10px;
            }

            #templateSection {
                width: 500px;
                height: max-content !important;
            }

            #cardBodyTemp > h5, #cardBodyInput > h5, #cardBodyStyle > h5, #cardBodyImage > h5 {
                display: none;
            }

            #cardBodyTemp {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                grid-template-rows: repeat(3, 1fr);
                column-gap: 20px;
                padding-bottom: 50px;
            }

            .svdTemp:first-of-type {
                margin-top: 30px;
                margin-bottom: 0;
            }

            .svdTemp:last-of-type {
                margin-bottom: 0px;
            }

            .svdTemp {
                width: 220px;
                height: 110px;
                margin-top: 30px;
                margin-bottom: 0;
            }

            .smTemp:first-of-type {
                margin-top: 30px;
                margin-bottom: 0;
            }

            .smTemp:last-of-type {
                margin-bottom: 0px;
            }

            .smTemp {
                width: 220px;
                height: 110px;
                margin-top: 30px;
                margin-bottom: 0;
            }

            .header-icon {
                margin-right: 40px;
                margin-left: 40px;
            }

            .card-header {
                padding-right: 0;
                padding-left: 0;
                padding-bottom: 18px;
                padding-top: 18px;
            }

            #instructionsDiv {
                position: relative;
                width: 100%;
                background-color: #15489e;
                color: white;
                padding: 8px 12px;
                cursor: pointer;
            }

            #firstCol::-webkit-scrollbar {
                width: 0px;
            }

            #secondCol::-webkit-scrollbar {
                width: 0px;
            }

            ::-webkit-scrollbar {
                width: 0px;
            }
        }

        @media all and (max-width: 576px) {
            #docDiv {
                top: 0;
                bottom: 0;
                right: 0;
                left: 0;
                margin: auto;
                position: fixed;
                max-width: 100%;
                max-height: 100%;
                line-height: 30px;
                z-index: 100;
            }

            #firstCol::-webkit-scrollbar {
                width: 0px;
            }

            #secondCol::-webkit-scrollbar {
                width: 0px;
            }

            ::-webkit-scrollbar {
                width: 0px;
            }

            #firstRow {
                */ justify-content: center;
                flex-direction: column;
            }

            #firstCol {
                position: relative;
                top: 0;
                width: 90%;
                height: 60vh;
                margin: auto;
                border: 2px solid #c9c9c9;
                border-radius: 10px;
            }

            #templateSection {
                width: 400px;
                height: max-content !important;
            }

            #cardBodyTemp > h5, #cardBodyInput > h5, #cardBodyStyle > h5, #cardBodyImage > h5 {
                display: none;
            }

            .svdTemp {
                width: 300px;
                height: 150px;
                margin-top: 30px;
                margin-bottom: 0;
            }

            .smTemp {
                width: 300px;
                height: 150px;
                margin-top: 30px;
                margin-bottom: 0;
            }

            .header-icon {
                margin-right: 30px;
                margin-left: 30px;
            }

            .card-header {
                padding-right: 0;
                padding-left: 0;
                padding-bottom: 18px;
                padding-top: 18px;
            }

            #instructionsDiv {
                position: relative;
                width: 100%;
                background-color: #15489e;
                color: white;
                padding: 8px 12px;
                cursor: pointer;
            }
        }

        @media all and (max-width: 450px) {
            #docDiv {
                top: 0;
                bottom: 0;
                right: 0;
                left: 0;
                margin: auto;
                position: fixed;
                max-width: 100%;
                max-height: 100%;
                line-height: 30px;
                z-index: 100;
            }

            #firstCol::-webkit-scrollbar {
                width: 0px;
            }

            #secondCol::-webkit-scrollbar {
                width: 0px;
            }

            ::-webkit-scrollbar {
                width: 0px;
            }

            #templateSection {
                width: 300px;
            }

            .svdTemp {
                width: 250px;
                height: 125px;
                margin-top: 30px;
                margin-bottom: 0;
            }

            .smTemp {
                width: 250px;
                height: 125px;
                margin-top: 30px;
                margin-bottom: 0;
            }

            .header-icon {
                margin-right: 20px;
                margin-left: 20px;
            }

            .card-header {
                padding-right: 0;
                padding-left: 0;
                padding-bottom: 18px;
                padding-top: 18px;
            }

            #instructionsDiv {
                position: relative;
                width: 100%;
                background-color: #15489e;
                color: white;
                padding: 8px 12px;
                cursor: pointer;
            }
        }

        @media all and (max-width: 350px) {
            #docDiv {
                top: 0;
                bottom: 0;
                right: 0;
                left: 0;
                margin: auto;
                position: fixed;
                max-width: 100%;
                max-height: 100%;
                line-height: 30px;
                z-index: 100;
                padding: 30px;
            }

            #docDiv > p {
                font-size: 10px !important;
            }

            #docDiv > h5 {
                font-size: 14px;
            }

            #docDiv > .fa-circle-xmark {
                right: 30px;
                top: 30px;
            }

            #firstCol::-webkit-scrollbar {
                width: 0px;
            }

            #secondCol::-webkit-scrollbar {
                width: 0px;
            }

            ::-webkit-scrollbar {
                width: 0px;
            }

            #templateSection {
                width: 250px;
            }

            .svdTemp {
                width: 200px;
                height: 100px;
                margin-top: 30px;
                margin-bottom: 0;
            }

            .smTemp {
                width: 200px;
                height: 100px;
                margin-top: 30px;
                margin-bottom: 0;
            }

            .header-icon {
                margin-right: 12px;
                margin-left: 12px;
            }

            .card-header {
                padding-bottom: 15px;
                padding-top: 15px;
            }

            #instructionsDiv {
                position: relative;
                width: 100%;
                background-color: #15489e;
                color: white;
                padding: 8px 12px;
                cursor: pointer;
            }
        }
    </style>
</head>
<body>

<section id="mainSection" class="container-fluid ">
    <div id="firstRow" class="row ">
        <div class="col-3 px-0" id="firstCol">
            <form id="userDataForm" method="post" action="db/db.php" enctype="multipart/form-data">
                <div id="sideCard" class="card rounded-0 border border-0 ">
                    <div id="cardHead" class="card-header text-center rounded-0"
                         style="background: rgba(31, 54, 92, 1)">
                        <i class="fa-solid fa-address-card  header-icon" id="icnTemp"></i>
                        <i class="fa-solid fa-align-center header-icon" id="icnInput"></i>
                        <i class="fa-solid fa-sliders header-icon" id="icnStyle"></i>
                        <i class="fa-solid fa-image header-icon" id="icnImage"></i>
                    </div>
                    <div id="cardBodyTemp" class="card-body">
                        <!--                        <h5 id="h5Temp" class="card-title mt-5">Templates</h5>-->
                        <!--                        <h5 id="h5SavedTemp" class="card-title mt-5">Saved Templates</h5>-->
                        <div id="firstTemp" class="smTemp"></div>
                        <div id="secondTemp" class="smTemp "></div>
                        <div id="thirdTemp" class="smTemp "></div>
                        <div id="fourthTemp" class="smTemp"></div>
                        <div id="fifthTemp" class="smTemp"></div>
                    </div>
                    <div id="cardBodyInput" class="card-body px-5">
                        <div class="row">
                            <div class="col-md-6 col-lg-12 mb-3 mt-2 mt-xl-4">
                                <label for="Name" class="form-label">Name</label>
                                <input type="text" name="Name" class="form-control" id="Name">
                            </div>
                            <div class="col-md-6 col-lg-12 mb-3 mt-2">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" name="Title" class="form-control" id="Title">
                            </div>
                            <div class="col-md-6 col-lg-12 mb-3 mt-2">
                                <label for="comName" class="form-label">Company Name</label>
                                <input type="text" name="comName" class="form-control" id="comName">
                            </div>
                            <div class="col-md-6 col-lg-12 mb-3 mt-2">
                                <label for="officeNo" class="form-label">Office Contact Number</label>
                                <input type="tel" name="OfficeNo" class="form-control" id="OfficeNo">
                                <p id="offNoValidLbl" style="color: red; font-size: 12px; margin: 0; margin-top: 5px ">
                                    invalid contact number format</p>
                                <p id="offNoLengthLbl" style="color: red; font-size: 12px; margin: 0; margin-top: 5px ">
                                    minimum character length - 5</p>
                            </div>
                            <div class="col-md-6 col-lg-12 mb-3 mt-2">
                                <label for="mobileBo" class="form-label">Mobile Contact Number</label>
                                <input type="tel" name="mobileBo" class="form-control" id="mobileBo">
                                <p id="mobNoValidLbl" style="color: red; font-size: 12px; margin: 0; margin-top: 5px ">
                                    invalid contact number format.</p>
                                <p id="mobNoLengthLbl" style="color: red; font-size: 12px; margin: 0; margin-top: 5px ">
                                    minimum character length - 5</p>
                            </div>
                            <div class="col-md-6 col-lg-12 mb-3 mt-2">
                                <label for="url" class="form-label">Website URL</label>
                                <input type="text" name="url" class="form-control" id="url">
                                <p id="webValidLbl" style="color: red; font-size: 12px; margin: 0; margin-top: 5px ">
                                    invalid website URL format</p>
                            </div>
                            <div class="col-md-6 col-lg-12 mb-3 mt-2">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" name="Email" class="form-control" id="Email">
                                <p id="emailValidLbl" style="color: red; font-size: 12px; margin: 0; margin-top: 5px ">
                                    invalid email format</p>
                            </div>
                            <div class="col-md-6 col-lg-12 mb-3 mt-2">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" name="Address" class="form-control" id="Address">
                            </div>
                            <h5 class="card-title colored-card-title mt-4 ">Links To Your Social Accounts</h5>
                            <div class="col-md-6 col-lg-12 mb-3 mt-2">
                                <label for="linkedIn" class="form-label">LinkedIn</label>
                                <input type="url" name="linkedIn" class="form-control" id="linkedIn">
                                <p id="linkedValidLbl" style="color: red; font-size: 12px; margin: 0; margin-top: 5px ">
                                    invalid URL format</p>
                            </div>
                            <div class="col-md-6 col-lg-12 mb-3 mt-2">
                                <label for="facebook" class="form-label">Facebook</label>
                                <input type="url" name="facebook" class="form-control" id="facebook">
                                <p id="facebookValidLbl"
                                   style="color: red; font-size: 12px; margin: 0; margin-top: 5px ">invalid URL
                                    format</p>
                            </div>
                            <div class="col-md-6 col-lg-12 mb-3 mt-2">
                                <label for="twitter" class="form-label">Twitter</label>
                                <input type="text" name="twitter" class="form-control" id="twitter">
                                <p id="twitterValidLbl"
                                   style="color: red; font-size: 12px; margin: 0; margin-top: 5px ">invalid URL
                                    format</p>
                            </div>
                            <div class="col-md-6  col-lg-12 mb-5 mt-2">
                                <label for="instagram" class="form-label">Instagram</label>
                                <input type="url" name="instagram" class="form-control" id="instagram">
                                <p id="instagramValidLbl"
                                   style="color: red; font-size: 12px; margin: 0; margin-top: 5px ">invalid URL
                                    format</p>
                            </div>
                        </div>
                    </div>
                    <div id="cardBodyStyle" class="card-body px-5">
                        <h5 class="card-title colored-card-title mt-4">Stylish Your Signature</h5>

                            <div class="row">
                                <div class="col-md-6 col-lg-12 mb-3 mt-2 mt-xl-4">
                                    <label for="slctFontFam" class="form-label">Font-Family</label>
                                    <select name="fontFamily" id="slctFontFam" class="form-select"
                                            aria-label="Default select example">
                                        <option selected>Poppins</option>
                                    </select>
                                </div>
                                <div class="col-md-6 col-lg-12 mb-3 mt-2" style="position:relative">
                                    <label for="Name" class="form-label">Font-Size</label>
                                    <input name="fontSize" type="range" class="form-range" min="5" max="20" step="1"
                                           value="14"
                                           id="inpFontSize">
                                    <span id="rangeValue"
                                          style="font-size: 13px; font-weight: bold; position: absolute; white-space: nowrap; display: none; top: 0; background-color: #0D6EFD; padding: 5px 10px; border-radius: 5px; color: white">14</span>
                                </div>
                                <div class="col-md-6 col-lg-12 mb-3 mt-2 ">
                                    <label for="inpBackColor" class="form-label">Background-Color 1</label>
                                    <div class="d-flex">
                                        <input name="backColor1" type="text" class="form-control w-50"
                                               id="inpBackColor">
                                        <div class="ms-2"
                                             style="height: 34px; width: 34px; border-radius: 100%; overflow: hidden; border: 1px solid rgba(21,72,158,0.41)">
                                            <input type="color" class="form-control form-control-color"
                                                   id="inpBackColorPick" value="#c1c1c1" title="Choose your color">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-12 mb-3 mt-2 ">
                                    <label for="inpBackColor2" class="form-label">Background-Color 2</label>
                                    <div class="d-flex">
                                        <input name="backColor2" type="text" class="form-control w-50"
                                               id="inpBackColor2">
                                        <div class="ms-2"
                                             style="height: 34px; width: 34px; border-radius: 100%; overflow: hidden; border: 1px solid rgba(21,72,158,0.41)">
                                            <input type="color" class="form-control form-control-color"
                                                   id="inpBackColorPick2" value="#000000" title="Choose your color">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-12 mb-3 mt-2 ">
                                    <label for="inpTextColor" class="form-label">Text-Color</label>
                                    <div class="d-flex">
                                        <input name="textColor" type="text" class="form-control w-50" id="inpTextColor">
                                        <div class="ms-2"
                                             style="height: 34px; width: 34px; border-radius: 100%; overflow: hidden; border: 1px solid rgba(21,72,158,0.41)">
                                            <input type="color" class="form-control form-control-color"
                                                   id="inpTextColorPick" value="#000000" title="Choose your color">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-12 mb-3 mt-2 ">
                                    <label for="inpLinkColor" class="form-label">Link-Color</label>
                                    <div class="d-flex">
                                        <input name="linkColor" type="text" class="form-control w-50" id="inpLinkColor">
                                        <div class="ms-2"
                                             style="height: 34px; width: 34px; border-radius: 100%; overflow: hidden; border: 1px solid rgba(21,72,158,0.41)">
                                            <input type="color" class="form-control form-control-color"
                                                   id="inpLinkColorPick" value="#ffffff" title="Choose your color">
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div id="cardBodyImage" class="card-body px-5">
                        <div class="mt-4 d-flex justify-content-center">
                            <div id="cardBodyImageDiv" class="">
                                <button id="uploadBtn" type="button" class="btn btnUploadImg">Upload Image</button>
                                <input type="file" name="choosefile" id="file-input" style="display: none;">

                                <button id="removeBtn" type="button" class="btn btnRemoveImg mt-3">Remove Image</button>
                                <input type="text" name="tempId" id="tempId" class="d-none">
                                <input type="text" name="img" id="image" class="d-none">
                                <textarea class="d-none" name="tempImg" id="tempImg"></textarea>

                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>
        <div class="col text-center" id="secondCol">
            <section id="templateSection" class="mx-auto "></section>
            <button form="userDataForm" id="btnCopy" type="submit" class="btn" disabled>Copy Signature</button>
            <br>
            <button form="userDataForm" id="btnSave" type="submit" class="btn d-none"  disabled>Save Signature</button>
            <button id="btnUpdate" type="submit" class="btn" disabled>Update</button>
            <button id="btnDelete" type="button" class="btn">Delete</button>
            <br>
            <a class="clear" href="#"><i id="txtClearAllIcn" class="fa-solid fa-xmark fa-l p-1 mt-3"></i>
                <p id="txtClearAll">Clear Input Fields</p></a><br>
            <a class="" href="#"><p id="txtSavedSignatures">Saved Signatures</p></a>
            <a class="" href="#"><p id="txtNewSignature">New Signature</p></a>
            <div id="instructionsDiv"><p>Instructions</p></div>
            <div id="docDiv">
                <i class="fa-regular fa-circle-xmark"></i>
                <h5>Instructions</h5>
                <hr>
                <p><b>Step 1 :</b> &nbsp;Click on <i class="fa-solid fa-address-card  header-icon"></i> to select a
                    template of your
                    choice. </p><br>
                <p><b>Step 2 :</b> &nbsp;Select the secont tab <i class="fa-solid fa-align-center header-icon"></i> and
                    fill the
                    necessary fields such as name, title, company, email etc... &nbsp; Always make sure to provide valid
                    URLs and correct values or the signature won't work as intended. Name is a required field. All the
                    other fields are not required. You can fill only the fields you need.</p><br>
                <p><b>Step 3 :</b> &nbsp;After filling necessary fields in the second tab go to the third tab <i
                            class="fa-solid fa-sliders header-icon"></i> to stylize your signature.<br>You can change
                    properties like font-family, font-color, background-color, text-color and link color to make your
                    signature look better.</p><br>
                <p><b>Step 4 :</b> &nbsp;After styling the signature go to the fourth tab <i
                            class="fa-solid fa-image header-icon"></i> to add an image to the signature. Here you can
                    add an image of your preference under some guidelines.</p>
                <p style="margin-bottom: 50px; margin-top: 40px; font-weight: normal"><strong>Congrats! <img width="30"
                                                                                                             height="30"
                                                                                                             src="https://img.icons8.com/ios-glyphs/30/FFFFFF/confetti--v1.png"
                                                                                                             alt="confetti--v1"
                                                                                                             style="margin-right: 10px; margin-left: 10px"/>
                        You are done creating your signature.</strong></p><br>

                <h5>How to Store the Signature ?</h5>
                <hr>
                <p>After creating the signature simply click on the "Save Signature" button.</p>
                <p>That's it. Your signature is saved now.</p>
                <p>You can come back and edit your signature later.</p><br><br>

                <h5>How to Use the Signature ?</h5>
                <hr>
                <p>You can simply copy the email signature by clicking on the "Copy Signature" button.</p>
                <p>That's it. You are ready to use your signature.</p>
                <p>You can use the copied signature in your preferred email client.</p>
            </div>
        </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
<script src="assets/jquery/jquery-3.7.1.min.js"></script>
<!--<script src="assets/script_files/cardHeaderController.php"></script>
<script src="assets/script_files/templateController.php"></script>
<script src="assets/script_files/imageController.php"></script>-->
<?php
require "assets/script_files/cardHeaderController.php";
require "assets/script_files/templateController.php";
require "assets/script_files/imageController.php";
?>
</body>
</html>

