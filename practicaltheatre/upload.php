<?php
    require_once("../includes/functions.php");

    start_session("apsesh");

    if(isset($_SESSION['id']) && !empty($_SESSION['id'])){
        //Do nothing
    } elseif(isset($_GET['payee_id'])){
        $_SESSION['id'] = $_GET['payee_id'];   
    }else{
        header('location: index.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title> Complete Registration</title>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="dance,drama,critically acclaimed,dan kpodoh,modelling,runway,entertainment,movie,movies,active playhouse,education,certification,certified,">
    <meta name="author" content="PM Consolidated">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="og:title" property="og:title" content="Practical Theatre With Dan Kpodoh">
    <meta name="og:description" property="og:description" content="Home of Active Playhouse, the amazingly acclaimed theatre and total entertainment troupe based in Nigeria">
    <meta name="og:image" property="og:image" content="images/logo2.jpg">
    <meta name="google-site-verification" content="qkmKHjvxjgyJKNOAU9jCL3DeIWZYaZp_3xZobkrKmMQ" />
    <meta name="robots" content="index, follow">
    <link rel="icon" type="image/x-icon" href="images/logo2.jpg" />
    <link href="https://fonts.googleapis.com/css?family=Lato|Lora|Montserrat|Raleway|Roboto" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Arizonia' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel= "stylesheet" href= "../css/style.css" type= "text/css" />
    <link rel= "stylesheet" href= "../css/localstyle.css" type= "text/css" />
    <link rel= "stylesheet" href= "pt_style.css" type= "text/css" />
</head>
<body>
    <div id="pageCover" onclick="hideMenu()"></div>
    <main class="row">
        <div class="top-background2">
            <header>
            <span class="top-header row">
                <h1 class="col-12 col-m-12 col-t-12"><span class="title-top">Practical Theatre With</span><br><span class="title-bottom">Dan Kpodoh</span></h1>
            </span>
            </header><br>
            <p class="home-text whitetext">Just One more step to go!</p>
        </div>
    </main>
    <footer>
        <section class="row mid-footer" id="reg_form">
            <span class="col-1 col-m-1 col-t-1">&nbsp;</span>
            <span class="col-10 col-m-10 col-t-10">
                <p class="">Upload your Proof of Payment Below</p>
                <!--<p class="">Image size must be less than 2MB</p>-->
                <form method="post" action="processreg2.php" enctype="multipart/form-data" class="home-form" >
                    <table class="home-form">
                        <tr><td class="home-form-table-cell"><label for="proof_jpeg">Select File</label></td><td class="home-form-table-cell"><input id="file_input" type="file" name="proof_jpeg" accept=".jpg,.png, image/*, .jpeg" required/></td></tr>
                        
                        <tr><td class="home-form-table-cell"></td><td class="home-form-table-cell"><input type="submit" value="Submit" name="send" /></td></tr>
                    </table>
                    <span id="form_status">Please ensure you have your proof of payment ready before submitting.</span>
                </form>
            </span>
            <span class="col-1 col-m-1 col-t-1">&nbsp;</span>
        </section>
        <span class="bottom-footer row" style="position:fixed; bottom:0; right:0;left:0;"><span class="col-3 col-m-5 col-t-3 s-bottom-footer">&copy; 2020 Active Playhouse</span><span class="col-5 no-mobile col-t-4">&nbsp;</span><span class="col-3 col-m-6 col-t-4" style="text-align: right;">powered by PM Consolidated</span></span>
    </footer>
    <script type="text/javascript" src="../js/responsive.js"></script>
    <script type="text/javascript" src="../ajaxrequests.js"></script>
    <script type="text/javascript" src="../js/script.js"></script>
    <script type="text/javascript" src="../js/sliderscript.js"></script>
    <script type="text/javascript">
      /*  var uploadField = document.getElementById("file_input");

        uploadField.onchange = function() {
            if(this.files[0].size > 2097152){
            alert("Image size must be less than 2MB!");
            this.value = "";
            };
        }; */
    </script>
    <noscript> </noscript>
</body>
</html>