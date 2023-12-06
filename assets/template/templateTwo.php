<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;1,700&display=swap"
          rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        .udLast{
            margin-bottom: 0;
        }

        #selected-image{
            width: 80px !important;
            height: 80px !important;
            margin-right: 0px;
            margin-left: 0px;
            margin-top: 15px;
            background : url('assets/images/user2.jpg') center/cover no-repeat;
        }

        .signature {
            width: 600px;
            height: 300px;
        }

        .leftSide {
            width: 200px;
            background-color: #0077B5;
        }

        .rightSide {
            width: 400px;
            background-color: #F9F6EE;
        }

        .socialIcons a {
            text-decoration: none;
            margin: 0 10px;
        }

        .socialIcons a img {
            width: 20px;
            height: 20px;
        }

        .userDetails {
            text-align: left;
        }

        .userDetails p {
            color: #000000;
            font-size: 15px;
            margin-left: 30px;
        }

        /* tab size*/

        @media all and (min-width: 550px) and (max-width: 660px) {
            .signature {
                width: 500px;
                height: 250px;
            }

            .leftSide p {
                font-size: 14px;
            }

            .socialIcons a {
                margin: 0 6px;
            }


            .userDetails p {
                font-size: 15px;
            }

            .userDetails a {
                font-size: 15px;
            }
        }

        /*mobile size*/
        @media all and (min-width: 400px) and (max-width: 550px) {
            .signature {
                width: 380px;
                height: 150px !important;
            }

            #selected-image{
                width: 50px !important;
                height: 50px !important;
            }

            a>img{
                width: 20px !important;
                height: 20px !important;
            }
            .userDetails p{
                margin-bottom: 8px !important;
            }
            #udLast{
                margin-bottom: 0px !important;
            }
            #name,#title,#companyName,#address,#mobileNo,#officeNo,#email,#webUrl{
                font-size: 8px !important;
            }
            .nameP{
                margin-top: 15px !important;
                margin-bottom: 8px !important;
            }
            .titleP{
                margin-bottom: 10px !important;
            }
        }

        @media all and (max-width: 400px) {
            .signature {
                width: 300px;
                height: 150px !important;
            }

            #selected-image{
                width: 40px !important;
                height: 40px !important;
                margin-top: 20px !important;
            }

            a>img{
                width: 14px !important;
                height: 14px !important;
            }
            .userDetails p{
                margin-bottom: 8px !important;
            }
            #udLast{
                margin-bottom: 0px !important;
            }
            #name,#title,#companyName,#address,#mobileNo,#officeNo,#email,#webUrl{
                font-size: 7px !important;
            }
            .userDetails p{
                margin-left: 10px !important;
            }
            .nameP{
                margin-top: 15px !important;
                margin-bottom: 3px !important;
            }
            .titleP{
                margin-bottom: 7px !important;
            }
        }

    </style>
</head>
<body>

<div>
    <table class="signature example">
        <tr>
            <td align="center" class="leftSide backgroundColor2" style="background-color: #0C3146">
                <span id="selected-image" style="display: block; border-radius: 50%;">
                </span>
                <p class="nameP" style="font-size: 13px; font-weight: bold; color: #ffffff; margin-top: 25px; margin-bottom: 10px; "><span id="name">Mark Mason</span></p>
                <p class="titleP" style="font-size: 13px; color: #ffffff"><span id="title">Marketing Manager</span></p>
                <p class="" id="s_mid_icons" style="display: flex; flex-direction: row; width: max-content; text-align: center;">
                    <a id="linked" href="" style=" margin-right: 7px; font-size: 0px; ">
                        <img id="imgLinkedIn" width="30" height="30" src="https://img.icons8.com/ios-filled/30/FFFFFF/linkedin.png" alt="linkedin"/>
                    </a>
                    <a id="fbook" href="" style=" margin-right: 7px; font-size: 0px; ">
                        <img id="imgFBook" width="30" height="30" src="https://img.icons8.com/ios-filled/30/FFFFFF/facebook--v1.png" alt="facebook--v1"/>
                    </a>
                    <a id="twi" href="" style=" margin-right: 7px; font-size: 0px;">
                        <img id="imgTwitter" width="30" height="30" src="https://img.icons8.com/ios-filled/30/FFFFFF/twitterx--v1.png" alt="twitterx--v1"/>
                    </a>
                    <a id="insta" href="" style=" font-size: 0px;">
                        <img id="imgInsta" width="30" height="30" src="https://img.icons8.com/ios-filled/30/FFFFFF/instagram-new--v1.png" alt="instagram-new--v1"/>
                    </a>
                </p>
            </td>

            <td class="rightSide backgroundColor" style="background-color: #2c4b5e">
                <div class="userDetails" style="">
                    <p class="" style="font-size: 13px; color: #ffffff;"><span id="companyName">XYZ Corporation</span></p>
                    <p class=""  style="font-size: 13px; color: #ffffff; "><span id="address">123 Main Street, Suite 456, Cityville</span></p>
                    <p class="" style="font-size: 13px; color: #7f5c5c;"><a id="mobNoAnc" style="font-size: 13px; color: #ffffff;" href="tel:"><span id="mobileNo">+1 (555) 987-6543</span></a></p>
                    <p class="" style="font-size: 8px; "><a id="offNoAnc" style="font-size: 13px; color: #ffffff;" href="tel:"><span id="officeNo">+1 (555) 123-4567</span></a></p>
                    <p class="" style=""><a id="emailAnc" href="mailto:" style="color: #ffffff; text-decoration: none; font-size: 13px;"><span id="email">markmsn@gmail.com</span></a></p>
                    <p class="udLast" id="udLast" style="udLast"><a id="webUrlAnc" style="font-size: 13px; color: #ffffff;" href="" target="_blank"><span id="webUrl">www.xyzcorp.com</span></a></p>
                </div>
            </td>
        </tr>
    </table>
</div>
</body>
</html>