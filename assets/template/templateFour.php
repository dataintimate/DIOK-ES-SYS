<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .td1p{
            margin-bottom: 0px;
        }
        #selected-image{
            width: 100px !important;
            height: 100px !important;
        }
        .td2p{
            margin-bottom: 10px;
        }
        #td2pFirst{
            margin-top: 20px;
        }
        #td2pLast{
            margin-bottom: 20px;
        }
        #td2div{
            margin-left: 20px;
        }
        @media all and (min-width: 320px) and (max-width: 375px){
            #name,#title,#companyName,#email,#mobileNo,#officeNo,#webUrl,#address{
                font-size: 8px !important;
            }
            .example{
                width: 283px !important;
            }
            #side{
                width: max-content !important;
                height: 100% !important;
            }
            #selected-image{
                width: 50px !important;
                height: 50px !important;
            }
            p{
                margin-bottom: 0;
            }
            a>img{
                width: 20px !important;
                height: 20px !important;
            }
            #td2pFirst{
                margin-top: 0px;
            }
            #td2pLast{
                margin-bottom: 0px;
            }
        }
        @media all and (min-width: 375px) and (max-width: 450px){
            #name,#title,#companyName,#email,#mobileNo,#officeNo,#webUrl,#address{
                font-size: 9px !important;
            }
            .example{
                width: 283px !important;
            }
            #side{
                width: max-content !important;
                height: 100% !important;
            }
            #selected-image{
                width: 50px !important;
                height: 50px !important;
            }
            p{
                margin-bottom: 0;
            }
            a>img{
                width: 20px !important;
                height: 20px !important;
            }
            #td2pFirst{
                margin-top: 0px;
            }
            #td2pLast{
                margin-bottom: 0px;
            }
        }
        @media all and (min-width: 450px) and (max-width: 500px){
            #name,#title,#companyName,#email,#mobileNo,#officeNo,#webUrl,#address{
                font-size: 9px !important;
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
                margin-bottom: 0;
            }
            a>img{
                width: 20px !important;
                height: 20px !important;
            }
            #td2pFirst{
                margin-top: 0px;
            }
            #td2pLast{
                margin-bottom: 0px;
            }
        }
        @media all and (min-width: 500px) and (max-width: 600px){
            p{
                font-size: 12px !important;
                margin-bottom: 3px;
            }
            .example{
                width: 460px !important;
            }
            #side{
                height: 250px !important;
                width: 130px;
            }
            #selected-image{
                width: 70px !important;
                height: 70px !important;
            }
        }
        @media all and (min-width: 600px) and (max-width: 720px){
            p{
                font-size: 14px !important;
                margin-bottom: 5px;
            }
            .example{
                width: 550px !important;
            }
            #side{
                height: 250px !important;
                width: 150px;
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
    <table class="example" cellspacing="0" cellpadding="0" width="675px"
           style="font-family: Arial, sans-serif; border-collapse: collapse; border-radius: 10px;">
        <tr>
            <td class="backgroundColor td1p" id="side" height="250px"  width="200px" style="background-color: #c1c1c1; padding: 10px;">
               <span id="selected-image" style="display: block; border-radius: 50%; background-color: white; margin: auto">
               </span>
                <p class="td2p" style="font-size: 14px; color: black; margin-top: 10px"><span id="webUrl">www.xyzcorp.com</span></p>
                <p id="s_mid_icsons" style="display: flex; flex-direction: row; width: max-content; margin: auto">
                    <a id="linked" href="" style=" margin-right: 7px; font-size: 0px; ">
                        <!--                            <img  width="30" height="30" src="https://img.icons8.com/ios-glyphs/30/FFFFFF/linkedin.png" alt="linkedin"/>-->
                        <img id="imgLinkedIn" width="30" height="30" src="https://img.icons8.com/ios-filled/30/FFFFFF/linkedin.png" alt="linkedin"/>
                    </a>
                    <a id="fbook" href="" style=" margin-right: 7px; font-size: 0px; ">
                        <!--                            <img id="imgFBook" width="30" height="30" src="https://img.icons8.com/ios-glyphs/30/FFFFFF/facebook-new.png" alt="facebook-new"/>-->
                        <img id="imgFBook" width="30" height="30" src="https://img.icons8.com/ios-filled/30/FFFFFF/facebook--v1.png" alt="facebook--v1"/>
                    </a>
                    <a id="twi" href="" style=" margin-right: 7px; font-size: 0px;">
                        <!--                            <img id="imgTwitter" width="30" height="30" src="https://img.icons8.com/ios-glyphs/30/FFFFFF/twitter.png" alt="twitter"/>-->
                        <img id="imgTwitter" width="30" height="30" src="https://img.icons8.com/ios-filled/30/FFFFFF/twitterx--v1.png" alt="twitterx--v1"/>
                    </a>
                    <a id="insta" href="" style=" font-size: 0px;">
                        <!--                            <img id="imgInsta" width="30" height="30" src="https://img.icons8.com/ios-glyphs/30/FFFFFF/instagram-new.png" alt="instagram-new"/>-->
                        <img id="imgInsta" width="30" height="30" src="https://img.icons8.com/ios-filled/30/FFFFFF/instagram-new--v1.png" alt="instagram-new--v1"/>
                    </a>
                </p>
            </td>
            <td class="line" style="width: 1px; background-color: #000000"></td>
            <td class="backgroundColor td2" style="position:relative; background-color: #c1c1c1; text-align: left; width: 500px; padding: 10px;">
                <div id="td2div">
                    <p class="td2p" id="td2pFirst" style="font-size: 14px; font-weight: bold; color: black"><span id="name">Mark Mason</span></p>
                    <p class="td2p" style="font-size: 14px; color: black"><span id="title">Marketing Manager</span></p>
                    <p class="td2p" style="font-size: 14px; color: black"><span id="companyName">XYZ Corporation</span></p>
                    <p class="td2p" style="font-size: 14px; color: black"><a href="mailto:youremail@example.com" style="color: #000000; text-decoration: none;"><span id="email">markmsn@gmail.com</span></a></p>
                    <p class="td2p" style="font-size: 14px; color: black"><span id="address">123 Main Street, Suite 456, Cityville</span></p>
                    <p class="td2p" style="font-size: 14px; color: black"><span id="mobileNo">+1 (555) 987-6543</span></p>
                    <p class="td2p" id="td2pLast" style="font-size: 14px; color: black"><span id="officeNo">+1 (555) 123-4567</span></p>
                </div>
            </td>

        </tr>
    </table>
</div>
</body>
</html>