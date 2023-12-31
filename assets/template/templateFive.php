<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .templateThree{
            width: 675px !important;
            height: 280px !important;
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
        .td2p{
            margin-top: 10px;
            margin-bottom: 10px;
        }
        #selected-image{
            width: 90px !important;
            height: 90px !important;
            margin-right: 0px;
            margin-left: 30px;
            background : url('assets/images/user12.jpg') center/cover no-repeat ;
        }
        #email{
            margin-top: 10px;
        }
        #s_mid_icons{
            margin-top: 20px !important;
        }
        #td3Div{
            margin-left: 20px;
        }
        .td3Lastp{
            margin-bottom: 0px;
        }
        @media all and (min-width: 577px) and (max-width: 768px) {
            .templateThree{
                width: 500px !important;
                height: 250px !important;
            }
            #selected-image{
                width: 70px !important;
                height: 70px !important;
                margin-right: 0px;
                margin-left: 20px;
            }
            #name,#title,#companyName,#email,#mobileNo,#officeNo,#webUrl,#address{
                font-size: 10px !important;
            }
            #s_mid_icons{
                margin-bottom: 5px !important;
                margin-top: 15px !important;
            }
            a>img{
                width: 25px !important;
                height: 25px !important;
            }
            .td3p{
                margin-bottom: 8px !important;
            }
            #td3Div{
                margin-left: 10px;
            }
            .td2p{
                margin-bottom: 0px;
                margin-top: 0px;
            }
        }
        @media all and (max-width: 576px){
            .templateThree{
                width: 500px !important;
                height: max-content !important;
                max-width: 400px !important;
            }
            #selected-image{
                width: 50px !important;
                height: 50px !important;
                margin-right: 0px;
                margin-left: 20px;
            }
            #name,#title,#companyName,#email,#mobileNo,#officeNo,#webUrl,#address{
                font-size: 9px !important;
            }
            #s_mid_icons{
                margin-bottom: 5px !important;
                margin-top: 10px !important;
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
            #td3Div{
                margin-left: 8px;
            }
        }
        @media all and (max-width: 450px){
            #email{
                margin-top: 5px !important;
            }
            .templateThree{
                width: 300px !important;
                height: max-content !important;
                max-width: 300px !important;
            }
            #selected-image{
                width: 40px !important;
                height: 40px !important;
                margin-right: 0px;
                margin-left: 10px;
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
            #s_mid_icons{
                margin-bottom: 0px !important;
                margin-top: 8px !important;
            }
            a>img{
                width: 15px !important;
                height: 15px !important;
            }
            .td3p{
                margin-bottom: 2px !important;
            }
            .td2p{
                margin-bottom: 0px !important;
                margin-top: 0px !important;
            }
            #td3Div{
                margin-left: 5px;
            }
        }
        @media all and (max-width: 350px){
            .templateThree{
                width: 250px !important;
                height: max-content !important;
                max-width: 250px !important;
            }
            #selected-image{
                width: 30px !important;
                height: 30px !important;
                margin-right: 0px;
                margin-left: 10px;
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
            #s_mid_icons{
                margin-bottom: 0px !important;
                margin-top: 4px !important;
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
            #td3Div{
                margin-left: 0px;
            }
            #email{
                margin-top: 4px !important;
            }
        }
    </style>
</head>
<body>
<div >
    <table class="example backgroundColor templateThree" style="color: rgb(0, 0, 0); font-family: Arial, serif; background-color: #1F2839; ">
        <tr style="border-bottom: 1px solid white">
            <td class="td1" style="">
                <span id="selected-image" style="display: block; border-radius: 50%; background-color: white;">
                </span>
            </td>
            <td class="td2" style="padding: 10px 10px">
                <p class="td2p" style="font-size: 13px; font-weight: bold; color: #ffffff"><span id="name">Mark Mason</span></p>
                <p class="td2p" style="font-size: 13px; color: #ffffff"><span id="title">Marketing Manager</span></p>
                <p class="td2p" style="font-size: 13px; color: #ffffff"><span id="companyName">XYZ Corporation</span></p>
                <p class="td2BigP" id="s_mid_icons" style="display: flex; flex-direction: row; width: max-content; margin: auto;">
                    <a id="linked" href="" style=" margin-right: 7px; font-size: 0px; ">
                        <!--                            <img  width="30" height="30" src="https://img.icons8.com/ios-glyphs/30/FFFFFF/linkedin.png" alt="linkedin"/>-->
                        <img id="imgLinkedIn" width="30" height="30" src="https://img.icons8.com/ios-filled/30/ffffff/linkedin.png" alt="linkedin"/>
                    </a>
                    <a id="fbook" href="" style=" margin-right: 7px; font-size: 0px; ">
                        <!--                            <img id="imgFBook" width="30" height="30" src="https://img.icons8.com/ios-glyphs/30/FFFFFF/facebook-new.png" alt="facebook-new"/>-->
                        <img id="imgFBook" width="30" height="30" src="https://img.icons8.com/ios-filled/30/ffffff/facebook--v1.png" alt="facebook--v1"/>
                    </a>
                    <a id="twi" href="" style=" margin-right: 7px; font-size: 0px;">
                        <!--                            <img id="imgTwitter" width="30" height="30" src="https://img.icons8.com/ios-glyphs/30/FFFFFF/twitter.png" alt="twitter"/>-->
                        <img id="imgTwitter" width="30" height="30" src="https://img.icons8.com/ios-filled/30/ffffff/twitterx--v1.png" alt="twitterx--v1"/>
                    </a>
                    <a id="insta" href="" style=" font-size: 0px;">
                        <!--                            <img id="imgInsta" width="30" height="30" src="https://img.icons8.com/ios-glyphs/30/FFFFFF/instagram-new.png" alt="instagram-new"/>-->
                        <img id="imgInsta" width="30" height="30" src="https://img.icons8.com/ios-filled/30/ffffff/instagram-new--v1.png" alt="instagram-new--v1"/>
                    </a>
                </p>
            </td>
            <td class="line" style="width: 1px; background-color: #ffffff; padding: 0;"></td>
            <td class="td3" style=" padding: 10px; text-align: left;">
                <div id="td3Div">
                    <p class="td3p" style=""><a id="emailAnc" href="mailto:" style="color: #ffffff; text-decoration: none; font-size: 13px;"><span id="email">markmsn@gmail.com</span></a></p>
                    <p class="td3p" style="font-size: 13px; "><a id="webUrlAnc" href="" style="font-size: 13px; color: #ffffff"><span id="webUrl">www.xyzcorp.com</span></a></p>
                    <p class="td3p" style="font-size: 13px; color: #ffffff"><span id="address">123 Main Street, Suite 456, Cityville</span></p>
                    <p class="td3p" style=""><a id="mobNoAnc" href="tel:" style="font-size: 13px; color: #ffffff"><span id="mobileNo">+1 (555) 987-6543</span></a></p>
                    <p class="td3p td3Lastp"  style=""><a id="offNoAnc" href="tel:" style="font-size: 13px; color: #ffffff;"><span id="officeNo">+1 (555) 123-4567</span></a></p>
                </div>
            </td>
        </tr>
    </table>
</div>

</body>
</html>