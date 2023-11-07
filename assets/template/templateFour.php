<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .templateFour{
            width: 675px !important;
            height: 300px !important;
        }
        .td1{
            width: 110px;
        }
        .td2{
            width: 240px;
        }
        .td3{
            width: 300px !important;
        }
        .td4{
            height: 50px !important;
        }
        .td2p{
            margin-top: 10px;
            margin-bottom: 10px;
        }
        #selected-image{
            width: 80px !important;
            height: 80px !important;
            margin: auto !important;
        }
        #email{
            margin-top: 10px;
        }
        #s_mid_icons{
            margin-bottom: 10px !important;
            margin-top: 10px !important;
        }
        .td3pLast{
            margin-bottom: 0px !important;
        }
        @media all and (min-width: 577px) and (max-width: 768px) {
            .templateFour{
                width: 500px !important;
                height: 250px !important;
            }
            #selected-image{
                width: 70px !important;
                height: 70px !important;
                margin: auto !important;
            }
            #name,#title,#companyName,#email,#mobileNo,#officeNo,#webUrl,#address{
                font-size: 10px !important;
            }
            .td4{
                height: 40px !important;
            }
            #s_mid_icons{
                margin-bottom: 5px !important;
                margin-top: 5px !important;
            }
            a>img{
                width: 25px !important;
                height: 25px !important;
            }
            .td3p{
                margin-bottom: 8px !important;
            }
        }
        @media all and (max-width: 576px){
            .templateFour{
                width: 500px !important;
                height: max-content !important;
                max-width: 400px !important;
            }
            #selected-image{
                width: 50px !important;
                height: 50px !important;
                margin: auto !important;
            }
            #name,#title,#companyName,#email,#mobileNo,#officeNo,#webUrl,#address{
                font-size: 9px !important;
            }
            .td4{
                height: 35px !important;
            }
            #s_mid_icons{
                margin-bottom: 5px !important;
                margin-top: 5px !important;
            }
            a>img{
                width: 20px !important;
                height: 20px !important;
            }
            .td3p{
                margin-bottom: 7px !important;
            }
            .td2p{
                margin-bottom: 2px !important;
                margin-top: 2px !important;
            }
        }
        @media all and (max-width: 450px){
            .templateFour{
                width: 300px !important;
                height: max-content !important;
                max-width: 300px !important;
            }
            #selected-image{
                width: 40px !important;
                height: 40px !important;
                margin: auto !important;
            }
            #name,#title,#companyName,#email,#mobileNo,#officeNo,#webUrl,#address{
                font-size: 7px !important;
            }
            .td1{
                width: 50px !important;
            }
            .td2{
                width: 100px !important;
            }
            .td3{
                width: 150px !important;
            }
            .td4{
                height: 30px !important;
            }
            #s_mid_icons{
                margin-bottom: 5px !important;
                margin-top: 5px !important;
            }
            a>img{
                width: 15px !important;
                height: 15px !important;
            }
            .td3p{
                margin-bottom: 2px !important;
            }
            .td2p{
                margin-bottom: 2px !important;
                margin-top: 2px !important;
            }
        }
        @media all and (max-width: 350px){
            .templateFour{
                width: 250px !important;
                height: max-content !important;
                max-width: 250px !important;
            }
            #selected-image{
                width: 30px !important;
                height: 30px !important;
                margin: auto !important;
            }
            #name,#title,#companyName,#email,#mobileNo,#officeNo,#webUrl,#address{
                font-size: 7px !important;
            }
            .td1{
                width: 40px !important;
            }
            .td2{
                width: 80px !important;
            }
            .td3{
                width: 130px !important;
            }
            .td4{
                height: 27px !important;
            }
            #s_mid_icons{
                margin-bottom: 5px !important;
                margin-top: 5px !important;
            }
            a>img{
                width: 12px !important;
                height: 12px !important;
            }
            .td3p{
                margin-bottom: 0px !important;
            }
            .td2p{
                margin-bottom: 0px !important;
                margin-top: 0px !important;
            }
        }
    </style>
</head>
<body>
<div >
    <table class="example backgroundColor templateFour" style="color: rgb(0, 0, 0); font-family: Arial, serif; border-radius: 10px; background-color: #C4C4C4; ">
        <tr style="border-bottom: 1px solid white">
            <td class="td2" style="padding: 10px 10px">
                <p class="td2p" style="font-size: 14px; font-weight: bold; color: black"><span id="name">Mark Mason</span></p>
                <p class="td2p" style="font-size: 14px; color: black"><span id="title">Marketing Manager</span></p>
                <p class="td2p" style="font-size: 14px; color: black"><span id="companyName">XYZ Corporation</span></p>
            </td>
            <td class="td1" style="">
                        <span id="selected-image" style="display: block; border-radius: 50%; background-color: white;">

                        </span>
            </td>
            <td class="td3" style="padding: 10px">
                <p class="td3p" style="font-size: 14px; color: black"><a href="mailto:youremail@example.com" style="color: #000000; text-decoration: none;"><span id="email">markmsn@gmail.com</span></a></p>
                <p class="td3p" style="font-size: 14px; color: black"><span id="mobileNo">+1 (555) 987-6543</span></p>
                <p class="td3p" style="font-size: 14px; color: black"><span id="officeNo">+1 (555) 123-4567</span></p>
                <p class="td3p" style="font-size: 14px; color: black"><span id="webUrl">www.xyzcorp.com</span></p>
                <p class="td3p td3pLast" style="font-size: 14px; color: black"><span id="address">123 Main Street, Suite 456, Cityville</span></p>
            </td>
        </tr>
        <tr style="">
            <td class="td4" colspan="3" style=" ">
                <p class="td4p" id="s_mid_icons" style="display: flex; flex-direction: row; width: max-content; margin: auto !important; ">
                    <a id="linked" href="" style=" margin-right: 7px; font-size: 0px; ">
                        <img id="imgLinkedIn" width="30" height="30" src="https://img.icons8.com/ios-glyphs/30/FFFFFF/linkedin.png" alt="linkedin"/>
                    </a>
                    <a id="fbook" href="" style=" margin-right: 7px; font-size: 0px; ">
                        <img id="imgFBook" width="30" height="30" src="https://img.icons8.com/ios-glyphs/30/FFFFFF/facebook-new.png" alt="facebook-new"/>
                    </a>
                    <a id="twi" href="" style=" margin-right: 7px; font-size: 0px;">
                        <img id="imgTwitter" width="30" height="30" src="https://img.icons8.com/ios-glyphs/30/FFFFFF/twitter.png" alt="twitter"/>
                    </a>
                    <a id="insta" href="" style=" font-size: 0px; margin-right: 7px">
                        <img id="imgInsta" width="30" height="30" src="https://img.icons8.com/ios-glyphs/30/FFFFFF/instagram-new.png" alt="instagram-new"/>
                    </a>
                </p>
            </td>
        </tr>
    </table>
</div>

</body>
</html>