<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <style>
        #selected-image{
            width: 80px;
            height: 80px;
        }
        .td2p{
            margin-bottom: 7px !important;
        }
        .lastTd2p{
            margin-bottom: 0px !important;
        }
        .td3p{
            margin-bottom: 12px !important;
        }
        #s_mid_icsons{
            margin-bottom: 3px;
        }
        @media all and (min-width: 577px) and (max-width: 768px) {
            .templateTwo{
                width: 500px;
                /*height: 250px;*/
                height: max-content !important;
            }
            #selected-image{
                width: 60px !important;
                height: 60px !important;
            }
            .td1,.td2{
                width: 250px !important;
                height: max-content !important;
            }
            .td4{
                height: 30px !important;
            }
            #s_mid_icsons{
                margin-bottom: 0;
            }
            .td2p{
                margin-bottom: 4px !important;
            }
            .lastTd2p{
                margin-bottom: 0px !important;
            }
            #name,#title,#companyName,#email,#mobileNo,#officeNo,#webUrl,#address{
                font-size: 12px !important;
            }
            .td3p{
                margin-bottom: 4px !important;
            }
            a>img{
                width: 20px !important;
                height: 20px !important;
            }
        }
        @media all and (max-width: 576px){
            .templateTwo{
                width: 400px;
                height: max-content !important;
            }
            #selected-image{
                width: 50px !important;
                height: 50px !important;
            }
            .td1,.td2{
                width: 250px !important;
                height: max-content !important;
            }
            .td4{
                height: 30px !important;
            }
            #s_mid_icsons{
                margin-bottom: 0;
            }
            .td2p{
                margin-bottom: 2px !important;
            }
            .lastTd2p{
                margin-bottom: 0px !important;
            }
            #name,#title,#companyName,#email,#mobileNo,#officeNo,#webUrl,#address{
                font-size: 10px !important;
            }
            .td3p{
                margin-bottom: 2px !important;
            }
            a>img{
                width: 20px !important;
                height: 20px !important;
            }
        }
        @media all and (max-width: 576px){
            .templateTwo{
                width: 400px;
                height: max-content !important;
            }
            #selected-image{
                width: 50px !important;
                height: 50px !important;
            }
            .td1,.td2{
                width: 250px !important;
                height: max-content !important;
            }
            .td4{
                height: 30px !important;
            }
            #s_mid_icsons{
                margin-bottom: 0;
            }
            .td2p{
                margin-bottom: 2px !important;
            }
            .lastTd2p{
                margin-bottom: 0px !important;
            }
            #name,#title,#companyName,#email,#mobileNo,#officeNo,#webUrl,#address{
                font-size: 10px !important;
            }
            .td3p{
                margin-bottom: 2px !important;
            }
            a>img{
                width: 20px !important;
                height: 20px !important;
            }
        }
        @media all and (max-width: 450px){
            .templateTwo{
                width: 300px;
                height: max-content !important;
            }
            #selected-image{
                width: 40px !important;
                height: 40px !important;
            }
            .td1,.td2{
                width: 250px !important;
                height: max-content !important;
            }
            .td4{
                height: 30px !important;
            }
            #s_mid_icsons{
                margin-bottom: 0;
            }
            .td2p{
                margin-bottom: 0px !important;
            }
            .lastTd2p{
                margin-bottom: 0px !important;
            }
            #name,#title,#companyName,#email,#mobileNo,#officeNo,#webUrl,#address{
                font-size: 8px !important;
            }
            .td3p{
                margin-bottom: 0px !important;
            }
            a>img{
                width: 15px !important;
                height: 15px !important;
            }
        }
        @media all and (max-width: 350px){
            .templateTwo{
                width: 250px;
                height: max-content !important;
            }
            #selected-image{
                width: 40px !important;
                height: 40px !important;
            }
            .td1,.td2{
                width: 250px !important;
                height: max-content !important;
            }
            .td4{
                height: 30px !important;
            }
            #s_mid_icsons{
                margin-bottom: 0;
                margin-top: 5px !important;
            }
            .td2p{
                margin-bottom: 0px !important;
            }
            .lastTd2p{
                margin-bottom: 0px !important;
            }
            #name,#title,#companyName,#email,#mobileNo,#officeNo,#webUrl,#address{
                font-size: 8px !important;
            }
            .td3p{
                margin-bottom: 0px !important;
            }
            a>img{
                width: 15px !important;
                height: 15px !important;
            }
        }
    </style>
</head>
<body>
<div>
    <table class="example backgroundColor templateTwo" width="700px" cellspacing="0" cellpadding="0" style="font-family: Arial, serif; background-color:  #C4C4C4; height: max-content">
        <tr>
            <td class="td1" width="400px" style="padding: 15px;">
                <span id="selected-image" style="display: block; border-radius: 50%; background-color: white; float: right">
               </span>
            </td>
            <td class="td2" width="400px" style="padding: 15px; text-align: left; font-size: 14px;">
                <p id="name" class="td2p" style=" font-weight: bold; color: black;">Mark Mason</p>
                <p id="title" class="td2p" style=" color: black;">Marketing Manager</p>
                <p id="companyName" class="td2p lastTd2p" style=" color: black;">XYZ Corporation</p>
            </td>
        </tr>
        <tr style="">
            <td style="">
                <div class="line" style="background-color: black; max-height: 1px; height: 1px;"></div>
            </td>
            <td style="">
                <div class="line" style="background-color: black; max-height: 1px; height: 1px;"></div>
            </td>
        </tr>
        <tr>
            <td class="td3" colspan="3" style="padding: 15px 20px; padding-bottom: 0px; font-size: 14px;">
                <p class="td3p" style=" color: black;"><a href="mailto:youremail@example.com" style="color: #000000; text-decoration: none;"><span id="email">markmsn@gmail.com</span></a></p>
                <p class="td3p" style=" color: black;"><span id="address">123 Main Street, Suite 456, Cityville</span></p>
                <p class="td3p" style=" color: black;"><span id="mobileNo">+1 (555) 987-6543</span></p>
                <p class="td3p" style=" color: black;"><span id="officeNo">+1 (555) 123-4567</span></p>
                <p class="td3p" style=" color: black; margin: 0"><span id="webUrl">www.xyzcorp.com</span></p>
            </td>
        </tr>
        <tr style="">
            <td class="td4" colspan="3" style="padding: 10px; padding-top: 5px; padding-right: 20px;  ">
                <p id="s_mid_icsons" style="display: flex; flex-direction: row; width: max-content; float: right">
                    <a id="linked" href="" style=" margin-right: 7px; font-size: 0px; ">
                        <img id="imgLinkedIn" width="30" height="30" src="https://img.icons8.com/ios-filled/30/FFFFFF/linkedin.png" alt="linkedin"/>
                    </a>
                    <a id="fbook" href="" style=" margin-right: 7px; font-size: 0px; ">
                        <img id="imgFBook" width="30" height="30" src="https://img.icons8.com/ios-filled/30/FFFFFF/facebook--v1.png" alt="facebook--v1"/>
                    </a>
                    <a id="twi" href="" style=" margin-right: 7px; font-size: 0px;">
                        <img id="imgTwitter" width="30" height="30" src="https://img.icons8.com/ios-filled/30/FFFFFF/twitterx--v1.png" alt="twitterx--v1"/>
                    </a>
                    <a id="insta" href="" style=" font-size: 0px; margin-right: 7px">
                        <img id="imgInsta" width="30" height="30" src="https://img.icons8.com/ios-filled/30/FFFFFF/instagram-new--v1.png" alt="instagram-new--v1"/>
                    </a>
                </p>

            </td>
        </tr>
    </table>
</div>
</body>
</html>