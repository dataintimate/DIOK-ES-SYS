<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .templateThree{
            width: 675px !important;
            height: 300px !important;
        }
        /*#selected-image{*/
        /*    width: 100px !important;*/
        /*    height: 100px !important;*/
        /*    background : url('assets/images/user8-128x128.jpg') center/cover no-repeat;*/
        /*}*/
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
        .td2BigP{
            margin-right: 10px !important;
        }
        .td2p{
            margin-top: 10px;
            margin-bottom: 10px;
        }
        #selected-image{
            width: 100px !important;
            height: 100px !important;
            margin-right: 0px;
            margin-left: 50px;
            background : url('assets/images/user10.jpg') center/cover no-repeat ;
        }
        #email{
            margin-top: 10px;
        }
        #s_mid_icons{
            margin-bottom: 10px !important;
            margin-top: 10px !important;
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
    <table class="example backgroundColor templateThree" style="color: rgb(0, 0, 0); font-family: Arial, serif; background-color:#808278; ">
        <tr style="">
            <td class="td1" style="">
                        <span id="selected-image" style="display: block; border-radius: 50%; background-color: white;">

                        </span>
            </td>
            <td class="td2" style="padding: 10px 10px; ">
                <p class="td2p" style="font-size: 13px; font-weight: bold; color: #ffffff"><span id="name">Mark Mason</span></p>
                <p class="td2p" style="font-size: 13px; color: #ffffff"><span id="title">Marketing Manager</span></p>
                <p class="td2p" style="font-size: 13px; color:#ffffff"><span id="companyName">XYZ Corporation</span></p>
            </td>
            <td class="line" style="min-width: 1px; background-color: white; opacity: 20%; ">
            </td>
            <td class="td3" style=" padding: 10px">
                <p class="td3p" style="color: #ffffff"><a id="emailAnc" href="mailto:" style="color: #ffffff; text-decoration: none; font-size: 13px;"><span id="email">markmsn@gmail.com</span></a></p>
                <p class="td3p" style=""><a id="mobNoAnc" href="tel:" style="font-size: 13px; color: #ffffff;"><span id="mobileNo">+1 (555) 987-6543</span></a></p>
                <p class="td3p" style=""><a id="offNoAnc" href="tel:" style="font-size: 13px; color: #ffffff;"><span id="officeNo">+1 (555) 123-4567</span></a></p>
                <p class="td3p" style="font-size: 13px; color: #ffffff"><span id="address">123 Main Street, Suite 456, Cityville</span></p>
                <p class="td3p" style=""><a id="webUrlAnc" href="" style="font-size: 13px; color: #ffffff;"><span id="webUrl">www.xyzcorp.com</span></a></p>
            </td>
        </tr>
        <tr>
            <td class="line" style="background-color: white; min-height: 1px; opacity: 20%;"></td>
            <td class="line" style="background-color: white; min-height: 1px; opacity: 20%;"></td>
            <td class="line" style="background-color: white; min-height: 1px; opacity: 20%;"></td>
            <td class="line" style="background-color: white; min-height: 1px; opacity: 20%;"></td>
        </tr>
        <tr style="">
            <td></td>
            <td class="td4" colspan="3" style=" ">
                <p class="td4p" id="s_mid_icons" style="display: flex; flex-direction: row; width: max-content; float: right">
                    <a id="linked" href="" style=" margin-right: 7px; font-size: 0px; ">
                        <img id="imgLinkedIn" width="30" height="30" src="https://img.icons8.com/ios-filled/30/FFFFFF/linkedin.png" alt="linkedin"/>
                    </a>
                    <a id="fbook" href="" style=" margin-right: 7px; font-size: 0px; ">
                        <img id="imgFBook" width="30" height="30" src="https://img.icons8.com/ios-filled/30/FFFFFF/facebook--v1.png" alt="facebook--v1"/>
                    </a>
                    <a id="twi" href="" style=" margin-right: 7px; font-size: 0px;">
                        <img id="imgTwitter" width="30" height="30" src="https://img.icons8.com/ios-filled/30/FFFFFF/twitterx--v1.png" alt="twitterx--v1"/>
                    </a>
                    <a id="insta" href="" style=" font-size: 0px; margin-right: 15px">
                        <img id="imgInsta" width="30" height="30" src="https://img.icons8.com/ios-filled/30/FFFFFF/instagram-new--v1.png" alt="instagram-new--v1"/>
                    </a>
                </p>
            </td>
        </tr>
    </table>
</div>

</body>
</html>