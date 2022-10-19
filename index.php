<?php
   include("db/config.php");
   session_start();
   
    if($_SERVER["REQUEST_METHOD"] == "POST") {
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT t1.user_id, t2.type FROM user_details as t1 LEFT JOIN user_type as t2 ON t1.ut_id = t2.ut_id WHERE t1.username = '$myusername' and t1.pword = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      if($count == 1) {
        $type = $row['type'];
        $_SESSION['login_user'] = $myusername;  
        if($type == "Group Member"){
            $type = "Groups";
        }
        $_SESSION['login_usertype'] = $type;
        header("location: ui/$type/dashboard.php");
      }else {
         $error = "Your Username or Password is invalid";
      }
   }
?>    
    
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Sign Up Form by Colorlib</title>

        <!-- Font Icon -->
        <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

        <!-- Main css -->
        <style>
            /* @extend display-flex; */
            display-flex,
            .booking-content {
                display: flex;
                display: -webkit-flex;
            }

            /* @extend list-type-ulli; */
            list-type-ulli,
            ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
            }

            /* poppins-300 - latin */
            @font-face {
                font-family: 'Poppins';
                font-style: normal;
                font-weight: 300;
                src: url("../fonts/poppins/poppins-v5-latin-300.eot");
                /* IE9 Compat Modes */
                src: local("Poppins Light"), local("Poppins-Light"), url("../fonts/poppins/poppins-v5-latin-300.eot?#iefix") format("embedded-opentype"), url("../fonts/poppins/poppins-v5-latin-300.woff2") format("woff2"), url("../fonts/poppins/poppins-v5-latin-300.woff") format("woff"), url("../fonts/poppins/poppins-v5-latin-300.ttf") format("truetype"), url("../fonts/poppins/poppins-v5-latin-300.svg#Poppins") format("svg");
                /* Legacy iOS */
            }

            /* poppins-300italic - latin */
            @font-face {
                font-family: 'Poppins';
                font-style: italic;
                font-weight: 300;
                src: url("../fonts/poppins/poppins-v5-latin-300italic.eot");
                /* IE9 Compat Modes */
                src: local("Poppins Light Italic"), local("Poppins-LightItalic"), url("../fonts/poppins/poppins-v5-latin-300italic.eot?#iefix") format("embedded-opentype"), url("../fonts/poppins/poppins-v5-latin-300italic.woff2") format("woff2"), url("../fonts/poppins/poppins-v5-latin-300italic.woff") format("woff"), url("../fonts/poppins/poppins-v5-latin-300italic.ttf") format("truetype"), url("../fonts/poppins/poppins-v5-latin-300italic.svg#Poppins") format("svg");
                /* Legacy iOS */
            }

            /* poppins-regular - latin */
            @font-face {
                font-family: 'Poppins';
                font-style: normal;
                font-weight: 400;
                src: url("../fonts/poppins/poppins-v5-latin-regular.eot");
                /* IE9 Compat Modes */
                src: local("Poppins Regular"), local("Poppins-Regular"), url("../fonts/poppins/poppins-v5-latin-regular.eot?#iefix") format("embedded-opentype"), url("../fonts/poppins/poppins-v5-latin-regular.woff2") format("woff2"), url("../fonts/poppins/poppins-v5-latin-regular.woff") format("woff"), url("../fonts/poppins/poppins-v5-latin-regular.ttf") format("truetype"), url("../fonts/poppins/poppins-v5-latin-regular.svg#Poppins") format("svg");
                /* Legacy iOS */
            }

            /* poppins-italic - latin */
            @font-face {
                font-family: 'Poppins';
                font-style: italic;
                font-weight: 400;
                src: url("../fonts/poppins/poppins-v5-latin-italic.eot");
                /* IE9 Compat Modes */
                src: local("Poppins Italic"), local("Poppins-Italic"), url("../fonts/poppins/poppins-v5-latin-italic.eot?#iefix") format("embedded-opentype"), url("../fonts/poppins/poppins-v5-latin-italic.woff2") format("woff2"), url("../fonts/poppins/poppins-v5-latin-italic.woff") format("woff"), url("../fonts/poppins/poppins-v5-latin-italic.ttf") format("truetype"), url("../fonts/poppins/poppins-v5-latin-italic.svg#Poppins") format("svg");
                /* Legacy iOS */
            }

            /* poppins-500 - latin */
            @font-face {
                font-family: 'Poppins';
                font-style: normal;
                font-weight: 500;
                src: url("../fonts/poppins/poppins-v5-latin-500.eot");
                /* IE9 Compat Modes */
                src: local("Poppins Medium"), local("Poppins-Medium"), url("../fonts/poppins/poppins-v5-latin-500.eot?#iefix") format("embedded-opentype"), url("../fonts/poppins/poppins-v5-latin-500.woff2") format("woff2"), url("../fonts/poppins/poppins-v5-latin-500.woff") format("woff"), url("../fonts/poppins/poppins-v5-latin-500.ttf") format("truetype"), url("../fonts/poppins/poppins-v5-latin-500.svg#Poppins") format("svg");
                /* Legacy iOS */
            }

            /* poppins-500italic - latin */
            @font-face {
                font-family: 'Poppins';
                font-style: italic;
                font-weight: 500;
                src: url("../fonts/poppins/poppins-v5-latin-500italic.eot");
                /* IE9 Compat Modes */
                src: local("Poppins Medium Italic"), local("Poppins-MediumItalic"), url("../fonts/poppins/poppins-v5-latin-500italic.eot?#iefix") format("embedded-opentype"), url("../fonts/poppins/poppins-v5-latin-500italic.woff2") format("woff2"), url("../fonts/poppins/poppins-v5-latin-500italic.woff") format("woff"), url("../fonts/poppins/poppins-v5-latin-500italic.ttf") format("truetype"), url("../fonts/poppins/poppins-v5-latin-500italic.svg#Poppins") format("svg");
                /* Legacy iOS */
            }

            /* poppins-600 - latin */
            @font-face {
                font-family: 'Poppins';
                font-style: normal;
                font-weight: 600;
                src: url("../fonts/poppins/poppins-v5-latin-600.eot");
                /* IE9 Compat Modes */
                src: local("Poppins SemiBold"), local("Poppins-SemiBold"), url("../fonts/poppins/poppins-v5-latin-600.eot?#iefix") format("embedded-opentype"), url("../fonts/poppins/poppins-v5-latin-600.woff2") format("woff2"), url("../fonts/poppins/poppins-v5-latin-600.woff") format("woff"), url("../fonts/poppins/poppins-v5-latin-600.ttf") format("truetype"), url("../fonts/poppins/poppins-v5-latin-600.svg#Poppins") format("svg");
                /* Legacy iOS */
            }

            /* poppins-700 - latin */
            @font-face {
                font-family: 'Poppins';
                font-style: normal;
                font-weight: 700;
                src: url("../fonts/poppins/poppins-v5-latin-700.eot");
                /* IE9 Compat Modes */
                src: local("Poppins Bold"), local("Poppins-Bold"), url("../fonts/poppins/poppins-v5-latin-700.eot?#iefix") format("embedded-opentype"), url("../fonts/poppins/poppins-v5-latin-700.woff2") format("woff2"), url("../fonts/poppins/poppins-v5-latin-700.woff") format("woff"), url("../fonts/poppins/poppins-v5-latin-700.ttf") format("truetype"), url("../fonts/poppins/poppins-v5-latin-700.svg#Poppins") format("svg");
                /* Legacy iOS */
            }

            /* poppins-700italic - latin */
            @font-face {
                font-family: 'Poppins';
                font-style: italic;
                font-weight: 700;
                src: url("../fonts/poppins/poppins-v5-latin-700italic.eot");
                /* IE9 Compat Modes */
                src: local("Poppins Bold Italic"), local("Poppins-BoldItalic"), url("../fonts/poppins/poppins-v5-latin-700italic.eot?#iefix") format("embedded-opentype"), url("../fonts/poppins/poppins-v5-latin-700italic.woff2") format("woff2"), url("../fonts/poppins/poppins-v5-latin-700italic.woff") format("woff"), url("../fonts/poppins/poppins-v5-latin-700italic.ttf") format("truetype"), url("../fonts/poppins/poppins-v5-latin-700italic.svg#Poppins") format("svg");
                /* Legacy iOS */
            }

            /* poppins-800 - latin */
            @font-face {
                font-family: 'Poppins';
                font-style: normal;
                font-weight: 800;
                src: url("../fonts/poppins/poppins-v5-latin-800.eot");
                /* IE9 Compat Modes */
                src: local("Poppins ExtraBold"), local("Poppins-ExtraBold"), url("../fonts/poppins/poppins-v5-latin-800.eot?#iefix") format("embedded-opentype"), url("../fonts/poppins/poppins-v5-latin-800.woff2") format("woff2"), url("../fonts/poppins/poppins-v5-latin-800.woff") format("woff"), url("../fonts/poppins/poppins-v5-latin-800.ttf") format("truetype"), url("../fonts/poppins/poppins-v5-latin-800.svg#Poppins") format("svg");
                /* Legacy iOS */
            }

            /* poppins-800italic - latin */
            @font-face {
                font-family: 'Poppins';
                font-style: italic;
                font-weight: 800;
                src: url("../fonts/poppins/poppins-v5-latin-800italic.eot");
                /* IE9 Compat Modes */
                src: local("Poppins ExtraBold Italic"), local("Poppins-ExtraBoldItalic"), url("../fonts/poppins/poppins-v5-latin-800italic.eot?#iefix") format("embedded-opentype"), url("../fonts/poppins/poppins-v5-latin-800italic.woff2") format("woff2"), url("../fonts/poppins/poppins-v5-latin-800italic.woff") format("woff"), url("../fonts/poppins/poppins-v5-latin-800italic.ttf") format("truetype"), url("../fonts/poppins/poppins-v5-latin-800italic.svg#Poppins") format("svg");
                /* Legacy iOS */
            }

            /* poppins-900 - latin */
            @font-face {
                font-family: 'Poppins';
                font-style: normal;
                font-weight: 900;
                src: url("../fonts/poppins/poppins-v5-latin-900.eot");
                /* IE9 Compat Modes */
                src: local("Poppins Black"), local("Poppins-Black"), url("../fonts/poppins/poppins-v5-latin-900.eot?#iefix") format("embedded-opentype"), url("../fonts/poppins/poppins-v5-latin-900.woff2") format("woff2"), url("../fonts/poppins/poppins-v5-latin-900.woff") format("woff"), url("../fonts/poppins/poppins-v5-latin-900.ttf") format("truetype"), url("../fonts/poppins/poppins-v5-latin-900.svg#Poppins") format("svg");
                /* Legacy iOS */
            }

            a:focus,
            a:active {
                text-decoration: none;
                outline: none;
                transition: all 300ms ease 0s;
                -moz-transition: all 300ms ease 0s;
                -webkit-transition: all 300ms ease 0s;
                -o-transition: all 300ms ease 0s;
                -ms-transition: all 300ms ease 0s;
            }

            input,
            select,
            textarea {
                outline: none;
                appearance: unset !important;
                -moz-appearance: unset !important;
                -webkit-appearance: unset !important;
                -o-appearance: unset !important;
                -ms-appearance: unset !important;
            }

            input::-webkit-outer-spin-button,
            input::-webkit-inner-spin-button {
                appearance: none !important;
                -moz-appearance: none !important;
                -webkit-appearance: none !important;
                -o-appearance: none !important;
                -ms-appearance: none !important;
                margin: 0;
            }

            input:focus,
            select:focus,
            textarea:focus {
                outline: none;
                box-shadow: none !important;
                -moz-box-shadow: none !important;
                -webkit-box-shadow: none !important;
                -o-box-shadow: none !important;
                -ms-box-shadow: none !important;
            }

            input[type=checkbox] {
                appearance: checkbox !important;
                -moz-appearance: checkbox !important;
                -webkit-appearance: checkbox !important;
                -o-appearance: checkbox !important;
                -ms-appearance: checkbox !important;
            }

            input[type=radio] {
                appearance: radio !important;
                -moz-appearance: radio !important;
                -webkit-appearance: radio !important;
                -o-appearance: radio !important;
                -ms-appearance: radio !important;
            }

            img {
                max-width: 100%;
                height: auto;
            }

            figure {
                margin: 0;
            }

            p {
                margin-bottom: 0px;
            }

            h2 {
                line-height: 1.8;
                margin: 0;
                padding: 0;
                font-weight: bold;
                color: #fff;
                font-family: Poppins;
                font-size: 21px;
                text-align: center;
                margin-bottom: 28px;
            }

            .clear {
                clear: both;
            }

            body {
                font-size: 14px;
                line-height: 1.8;
                
                background: #ffd9b0;
                font-weight: 400;
                font-family: Poppins;
                margin: 0px;
                
            }

            .main {
                padding: 115px 0;
                position: relative;
            }

            .container {
                width: 1150px;
                background: #fff;
                margin: 0 auto;
                box-shadow: 0px 10px 9.9px 0.1px rgba(0, 0, 0, 0.05);
                -moz-box-shadow: 0px 10px 9.9px 0.1px rgba(0, 0, 0, 0.05);
                -webkit-box-shadow: 0px 10px 9.9px 0.1px rgba(0, 0, 0, 0.05);
                -o-box-shadow: 0px 10px 9.9px 0.1px rgba(0, 0, 0, 0.05);
                -ms-box-shadow: 0px 10px 9.9px 0.1px rgba(0, 0, 0, 0.05);
                border-radius: 10px;
                -moz-border-radius: 10px;
                -webkit-border-radius: 10px;
                -o-border-radius: 10px;
                -ms-border-radius: 10px;
            }

            .booking-content {
                flex-wrap: wrap;
                -moz-flex-wrap: wrap;
                -webkit-flex-wrap: wrap;
                -o-flex-wrap: wrap;
                -ms-flex-wrap: wrap;
            }

            .booking-image {
                width: 58.33%;
                margin-bottom: -8px;
                overflow: hidden;
                position:relative;
                display:inline-block;
            }
           
           
            
            .booking-img {
                border-top-left-radius: 10px;
                border-bottom-left-radius: 10px;
                transform: scale(1.5);
                object-fit: cover;
                object-position: center;
            }

            .booking-form {
                width: 41.67%;
                background: #111;
                border-top-right-radius: 10px;
                border-bottom-right-radius: 10px;
            }

            .form-radio {
                margin-bottom: 65px;
                padding-top: 20px;
            }

            .form-radio input {
                width: 0;
                height: 0;
                position: absolute;
                left: -9999px;
            }

            .form-radio label {
                padding-top: 4px;
            }

            .form-radio input+label {
                margin: 0 3px;
                box-sizing: border-box;
                position: relative;
                display: inline-block;
                border: solid 2px #ebebeb;
                background-color: #FFF;
                font-size: 14px;
                font-weight: 600;
                color: #888;
                text-align: center;
                transition: border-color .15s ease-out, color .25s ease-out, background-color .15s ease-out, box-shadow .15s ease-out;
                width: 36px;
                height: 36px;
                border-radius: 50%;
                -moz-border-radius: 50%;
                -webkit-border-radius: 50%;
                -o-border-radius: 50%;
                -ms-border-radius: 50%;
            }

            .form-radio input:checked+label {
                background-color: #111;
                color: #FFF;
                border-color: #111;
                z-index: 1;
            }

            .form-radio input:focus+label {
                outline: none;
            }

            .form-radio input:hover {
                background-color: #111;
                color: #FFF;
                border-color: #111;
            }

            .radio-item-list {
                margin: 0 -3px;
            }

            .active {
                position: relative;
                background: #edb77d;
                padding: 14px 1px;
                margin-right: 7px;
                margin-left: 3px;
                border-radius: 24px;
                -moz-border-radius: 24px;
                -webkit-border-radius: 24px;
                -o-border-radius: 24px;
                -ms-border-radius: 24px;
            }

            .active:after {
                position: absolute;
                content: 'Person';
                right: 17px;
                top: 50%;
                transform: translateY(-50%);
                -moz-transform: translateY(-50%);
                -webkit-transform: translateY(-50%);
                -o-transform: translateY(-50%);
                -ms-transform: translateY(-50%);
                font-size: 11px;
                color: #222;
                font-weight: bold;
            }

            .active input+label {
                margin-right: 59px;
            }

            form {
                padding: 72px 70px 70px 70px;
            }

            .form-group {
                margin-bottom: 10px;
                position: relative;
            }

            .form-input {
                padding-top: 21px;
            }

            .form-label {
                position: absolute;
                transition: 0.25s ease;
                -moz-transition: 0.25s ease;
                -webkit-transition: 0.25s ease;
                -o-transition: 0.25s ease;
                -ms-transition: 0.25s ease;
                color: #bebebe;
                left: 0;
                top: 23px;
            }

            input {
                transition: 0.3s ease;
                -moz-transition: 0.3s ease;
                -webkit-transition: 0.3s ease;
                -o-transition: 0.3s ease;
                -ms-transition: 0.3s ease;
                padding-top: 10px;
                -webkit-appearance: none;
            }

            input:focus+.form-label,
            input:valid+.form-label {
                top: 1px;
                font-size: 11px;
                color: #edb77d;
            }

            input,
            select {
                box-sizing: border-box;
                width: 100%;
                display: block;
                border: none;
                font-family: Poppins;
                color: #fff;
                background: transparent;
                border-bottom: 1px solid #999;
                padding: 4px 0;
            }

            input:focus,
            select:focus {
                border-bottom: 1px solid #edb77d;
            }

            input:-webkit-autofill {
                -webkit-box-shadow: 0 0 0 30px transparent inset;
            }

            input::-webkit-input-placeholder {
                color: #bebebe;
            }

            input::-moz-placeholder {
                color: #bebebe;
            }

            input:-ms-input-placeholder {
                color: #bebebe;
            }

            input:-moz-placeholder {
                color: #bebebe;
            }

            .submit {
                width: auto;
                background: #edb77d;
                color: #fff;
                padding: 15px 43px;
                font-weight: bold;
                border: none;
                border-radius: 5px;
                -moz-border-radius: 5px;
                -webkit-border-radius: 5px;
                -o-border-radius: 5px;
                -ms-border-radius: 5px;
                cursor: pointer;
            }

            .submit:hover {
                background: #e79e50;
            }

            ul {
                background: 0 0;
                z-index: 9;
                border-bottom: 1px solid #999;
                padding-top: 15px;
            }

            ul li {
                padding: 5px 0px;
                z-index: 2;
                color: #bebebe;
            }

            ul li:not(.init) {
                display: none;
                background: #fff;
                color: #222;
                padding: 5px 10px;
            }

            ul li:not(.init):hover,
            ul li.selected:not(.init) {
                background: #edb77d;
            }

            li.init {
                cursor: pointer;
                position: relative;
            }

            li.init:after {
                position: absolute;
                right: 0;
                top: 50%;
                transform: translateY(-50%);
                -moz-transform: translateY(-50%);
                -webkit-transform: translateY(-50%);
                -o-transform: translateY(-50%);
                -ms-transform: translateY(-50%);
                font-size: 20px;
                color: #bebebe;
                font-family: 'Material-Design-Iconic-Font';
                content: '\f2f2';
            }

            .label-radio {
                display: block;
                margin-bottom: 18px;
            }

            .vertify-booking {
                color: #edb77d;
                font-size: 11px;
                text-decoration: none;
                margin-top: 14px;
                display: block;
                transition: all 0.3s;
                -moz-transition: all 0.3s;
                -webkit-transition: all 0.3s;
                -o-transition: all 0.3s;
                -ms-transition: all 0.3s;
            }

            .vertify-booking:hover {
                text-decoration: underline;
            }

            .select-list {
                position: relative;
                display: inline-block;
                width: 100%;
                margin-bottom: 47px;
            }

            .list-item {
                position: absolute;
                width: 100%;
            }

            #time {
                z-index: 99;
            }

            #food {
                z-index: 9;
            }

            @media screen and (max-width: 1200px) {
                .container {
                    width: calc(100% - 30px);
                    max-width: 100%;
                    background: transparent;
                }

                .booking-content {
                    flex-direction: column;
                    -moz-flex-direction: column;
                    -webkit-flex-direction: column;
                    -o-flex-direction: column;
                    -ms-flex-direction: column;
                }

                .booking-image,
                .booking-form {
                    width: 100%;
                }

                .booking-image {
                    order: 2;
                    text-align: center;
                    position:relative;
                     display:inline-block;
                }

              

                .booking-form {
                    order: 1;
                    border-top-right-radius: 0px;
                    border-bottom-right-radius: 0px;
                }

                .booking-img {
                    border-top-left-radius: 0px;
                    border-bottom-left-radius: 0px;
                    width: 100%;
                    display:block;
                }
            }

            @media screen and (max-width: 480px) {
                .radio-item {
                    display: block;
                    margin-bottom: 15px;
                    width: 150px;
                }

                .active {
                    padding: 7px 1px;
                }

                form {
                    padding: 72px 40px 70px 40px;
                }
            }

            /*# sourceMappingURL=style.css.map */
        </style>
    </head>

    <body>

        <div class="main">

            <div class="container">
                <div class="booking-content">
                    <div class="booking-image">
                        <img class="booking-img" src="Images/lspu.png" alt="Booking Image">
                    </div>
                    <div class="booking-form">
                        <form id="booking-form" action = "" method = "post">
                            <h2>Login</h2>
                            <div class="form-group form-input">
                                <input type="text" name="username" id="name" value="" required />
                                <label for="name" class="form-label">Username</label>
                            </div>
                            <div class="form-group form-input">
                                <input type="password" name="password" id="password" required />
                                <label for="password" class="form-label">Password</label>
                            </div>


                            <div class="form-submit">
                                <input type="submit" value="Login" class="submit" id="submit" name="submit" />
                                <a href="#" class="vertify-booking">Forgot Password?</a>
                            </div>
                            <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
		
                        </form>
                    </div>
                </div>
            </div>

        </div>

        <!-- JS -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="js/main.js"></script>
    </body><!-- This templates was made by Colorlib (https://colorlib.com) -->

    </html>