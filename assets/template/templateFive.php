<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        p{
            margin-bottom: 15px;
        }
        #selected-image{
            width: 100px !important;
            height: 100px !important;
        }
        a>img{
            margin-bottom: 15px;
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
                width: 40px !important;
                height: 40px !important;
            }
            p{
                margin-bottom: 0;
            }
            a>img{
                width: 20px !important;
                height: 20px !important;
                margin-bottom: 5px;
            }
            .td1{
                width: 200px !important;
            }
            .td3{
                width: 30px !important;
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
                margin-bottom: 5px;
            }
            .td1{
                width: 200px !important;
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
                width: 40px !important;
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
                margin-bottom: 5px;
            }
        }
        @media all and (min-width: 500px) and (max-width: 600px){
            p{
                font-size: 14px !important;
                margin-bottom: 10px;
            }
            .example{
                width: 460px !important;
            }
            #side{
                height: 250px !important;
                width: 130px;
            }
            a>img{
                margin-bottom: 8px;
            }
            #selected-image{
                width: 70px !important;
                height: 70px !important;
            }
            .mid{
                width: 40px !important;
            }
        }
        @media all and (min-width: 600px) and (max-width: 720px){
            p{
                font-size: 14px !important;
                margin-bottom: 12px;
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
    <table class="example" cellspacing="0" cellpadding="0" width="675px"
           style="font-family: Arial, sans-serif; border-collapse: collapse; border-radius: 10px;">
        <tr>
            <td class="backgroundColor td1" style="position:relative; background-color: #c1c1c1; text-align: center; width: 500px; padding: 10px; border-radius: 10px 0px 0px 10px">
                <p style="font-size: 14px; font-weight: bold; color: black"><span id="name">Mark Mason</span></p>
                <p style="font-size: 14px; color: black"><span id="title">Marketing Manager</span></p>
                <p style="font-size: 14px; color: black"><span id="companyName">XYZ Corporation</span></p>
                <p style="font-size: 14px; color: black"><a href="mailto:youremail@example.com" style="color: #000000; text-decoration: none;"><span id="email">markmsn@gmail.com</span></a></p>
                <p style="font-size: 14px; color: black"><span id="mobileNo">+1 (555) 987-6543</span></p>
                <p style="font-size: 14px; color: black"><span id="officeNo">+1 (555) 123-4567</span></p>
                <p style="font-size: 14px; color: black"><span id="webUrl">www.xyzcorp.com</span></p>
                <p style="font-size: 14px; color: black"><span id="address">123 Main Street, Suite 456, Cityville</span></p>
            </td>
            <td class="backgroundColor2" id="side" height="250px"  width="200px" style="background-color: #000000; padding: 7px">
               <span id="selected-image" style="display: block; border-radius: 50%; background-color: white; margin: auto">

               </span>
            </td>
            <td id="mid" class="backgroundColor td3" style="background-color: #c1c1c1; width: 50px; border-radius: 0 10px 10px 0">
                <div style="display: flex; flex-direction: column; padding: 10px; gap: 10px;">
                    <p style="display:grid; margin: 0px;">
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
                </div>
            </td>
        </tr>
    </table>
</div>
</body>
</html>