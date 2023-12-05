<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        p{
            margin-bottom: 8px;
        }
        #selected-image{
            width: 100px !important;
            height: 100px !important;
            background : url('assets/images/user1.jpg') center/cover no-repeat;
        }
        a>img{
            margin-bottom: 15px;
        }
        .td2p{
            margin-left: 28px;
        }
        #imgInsta{
            margin-bottom: 0;
        }
        #td2pFirst{
            margin-top: 20px;
        }
        #td2pLast{
            margin-bottom: 14px;
        }
        @media all and (min-width: 320px) and (max-width: 375px){
            #name,#title,#companyName,#email,#mobileNo,#officeNo,#webUrl,#address{
                font-size: 6px !important;
            }
            .td2p{
                margin-left: 2px ;
            }
            .example{
                width: 283px !important;
            }
            .line{
                min-width: 1px !important;
            }
            #side{
                width: max-content !important;
                height: 100% !important;
            }
            #selected-image{
                width: 40px !important;
                height: 40px !important;
            }
            p{
                margin-bottom: 0 !important;
            }
            .td2p>a{
              font-size: 0px !important;
            }
            a>img{
                width: 16px !important;
                height: 16px !important;
                margin-bottom: 5px;
            }
            #td2pFirst{
                margin-top: 0px;
            }
            #td2pLast{
                margin-bottom: 10px;
            }
            .td2p{
                font-size: 5px !important;
            }
        }
        @media all and (min-width: 375px) and (max-width: 450px){
            #name,#title,#companyName,#email,#mobileNo,#officeNo,#webUrl,#address{
                font-size: 7px !important;
            }
            .td2p{
                margin-left: 6px ;
            }
            .line{
                min-width: 1px !important;
            }
            .example{
                width: 283px !important;
            }
            #side{
                width: max-content !important;
                height: 100% !important;
            }
            #selected-image{
                width: 40px !important;
                height: 40px !important;
            }
            p{
                margin-bottom: 1px !important;
            }
            .td2p>a{
                line-height: 8px;
            }
            a>img{
                width: 16px !important;
                height: 16px !important;
                margin-bottom: 5px;
            }
            #td2pFirst{
                margin-top: 0px;
            }
            #td2pLast{
                margin-bottom: 8px;
            }
            .td2p{
                font-size: 5px !important;
            }
        }
        @media all and (min-width: 450px) and (max-width: 500px){
            .line{
                width: 4.5px !important;
            }
            .td2p{
                margin-left: 12px ;
            }
            #name,#title,#companyName,#email,#mobileNo,#officeNo,#webUrl,#address{
                font-size: 8px !important;
            }
            .example{
                width: 350px !important;
            }
            #side{
                width: 100px !important;
                height: 100% !important;
            }
            #mid{
                width: 200px !important;
            }
            #selected-image{
                width: 50px !important;
                height: 50px !important;
            }
            p{
                margin-bottom: -2px !important;
            }
            a>img{
                width: 20px !important;
                height: 20px !important;
                margin-bottom: 5px;
            }
            #td2pFirst{
                margin-top: 0px;
            }
            #td2pLast{
                margin-bottom: 0px;
            }
            .td2p{
                font-size: 12px !important;
            }
        }
        @media all and (min-width: 500px) and (max-width: 600px){
            p{
                font-size: 10px !important;
                margin-bottom: 5px;
            }
            .td2p{
                margin-left: 12px ;
            }
            .line{
                width: 1px !important;
            }
            .td2p>a{
                font-size: 10px !important;
            }
            .example{
                width: 460px !important;
            }
            #side{
                height: 200px !important;
                width: 130px;
            }
            a>img{
                margin-bottom: 8px;
                width: 25px;
                height: 25px;
            }
            #selected-image{
                width: 70px !important;
                height: 70px !important;
            }
        }
        @media all and (min-width: 600px) and (max-width: 720px){
            p{
                font-size: 11px !important;
                margin-bottom: 5px;
            }
            .td2p>a{
                font-size: 12px !important;
            }
            .example{
                width: 550px !important;
            }
            #side{
                height: 250px !important;
                width: 150px;
            }
            a>img{
                margin-bottom: 10px;
            }
            #selected-image{
                width: 80px !important;
                height: 80px !important;
            }
        }
    </style>
</head>
<body>
<div>
    <table class="example" cellspacing="0" cellpadding="0" width="652px"
           style="font-family: Arial, sans-serif; border-collapse: collapse;">
        <tr>
            <td class="" id="side" height="280px"  width="200px" style="background-color: #f5f4f4; padding: 7px">
               <span id="selected-image" style="display: block; border-radius: 50%; margin: auto; ">
               </span>
            </td>
            <td class="line" style="width: 1px; background-color: #7f5c5c; padding: 0;"></td>
            <td class="backgroundColor td2" style="position:relative; background-color: #f5f4f4; text-align: left; width: 500px; padding: 10px;">
                <p class="td2p" id="td2pFirst" style="font-size: 13px; font-weight: bold; color: #7f5c5c;"><span id="name">Mark Mason</span></p>
                <p class="td2p" style="font-size: 13px; color: #7f5c5c;"><span id="title">Marketing Manager</span></p>
                <p class="td2p" style="font-size: 13px; color: #7f5c5c;"><span id="companyName">XYZ Corporation</span></p>
                <p class="td2p"  style="font-size: 13px; color: #7f5c5c; margin-bottom: 3px;"><span id="address">123 Main Street, Suite 456, Cityville</span></p>
                <p class="td2p" style=""><a href="mailto:" style="color: #7f5c5c; text-decoration: none; font-size: 13px;"><span id="email">markmsn@gmail.com</span></a></p>
                <p class="td2p" style="font-size: 13px; color: #7f5c5c;"><a style="font-size: 13px; color: #7f5c5c;" href="tel:"><span id="mobileNo">+1 (555) 987-6543</span></a></p>
                <p class="td2p" style="font-size: 13px; color: #7f5c5c; margin-bottom: 3px;"><a style="font-size: 13px; color: #7f5c5c;" href="tel:"><span id="officeNo">+1 (555) 123-4567</span></a></p>
                <p class="td2p" id="td2pLast" style=""><a style="font-size: 13px; color: #7f5c5c;" href="" target="_blank"><span id="webUrl">www.xyzcorp.com</span></a></p>
            </td>
            <td id="mid" class="backgroundColor"  style="background-color:#f5f4f4; width: 100px;">
                <div style="display: flex; flex-direction: column; padding: 10px; gap: 10px;">
                    <p style="display:grid; margin: 0px;">
                        <a id="linked" href="" style=" margin-right: 7px; font-size: 0px; ">
                            <img id="imgLinkedIn" width="30" height="30" src="https://img.icons8.com/ios-filled/30/907474/linkedin.png" alt="linkedin"/>
                        </a>
                        <a id="fbook" href="" style=" margin-right: 7px; font-size: 0px; ">
                            <img id="imgFBook" width="30" height="30" src="https://img.icons8.com/ios-filled/30/907474/facebook--v1.png" alt="facebook--v1"/>
                        </a>
                        <a id="twi" href="" style=" margin-right: 7px; font-size: 0px;">
                            <img id="imgTwitter" width="30" height="30" src="https://img.icons8.com/ios-filled/30/907474/twitterx--v1.png" alt="twitterx--v1"/>
                        </a>
                        <a id="insta" href="" style=" font-size: 0px; margin-right: 7px">
                            <img id="imgInsta" width="30" height="30" src="https://img.icons8.com/ios-filled/30/907474/instagram-new--v1.png" alt="instagram-new--v1"/>
                        </a>
                    </p>
                </div>
            </td>
        </tr>
    </table>
</div>
</body>
</html>