<?php
    require_once('../includes/functions.php');

    start_session('apsesh');
    if(isset($_SESSION['id'])){
        unset($_SESSION['id']);
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title> Practical Theatre With Dan Kpodoh</title>
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
<body >
    <div id="pageCover" onclick="hideMenu()"></div>
    <main class="row">
    <div class="top-background">
        <header>
        <span class="top-header row">
            <h1 class="col-12 col-m-12 col-t-12"><span class="title-top">Practical Theatre With</span><br><span class="title-bottom">Dan Kpodoh</span></h1>
        </span>
        </header>
        
            <section class="welcome row">
                <span class="col-1 col-m-1 col-t-1">&nbsp;</span>
                <span class="col-10 col-m-10 col-t-10 l-home-text whitetext">
                    <p class="home-text">A one-month pragmatic course to push your theatre skills to the next level, improve your performance,
                        and show you how to use them to make reasonable financial profits.</p>

                    <ul class="welcome-list home-text" >
                        <li>Training from the best in the industry.</li>
                        <li>Great networking opportunities.</li>
                    </ul>

                    <a href="#reg_form"><button class="home-started-button">Register Now</button></a>
                </span>
                <span class="col-1 col-m-1 col-t-1">&nbsp;</span>
            </section>
        </div>
        <div  class="col-12 col-m-12 col-t-12">&nbsp;</div>

        </main>
        
    <footer>
            <section class="info pt-section row">
                <span class="col-1 col-m-1 col-t-1">&nbsp;</span>
                <span class="col-10 col-m-10 col-t-10">
                    <p class="info-text">All Trainings will be personally conducted by Dan Kpodoh and other highly successful personalities in the industry. 
                        Participants have the option to choose one out of four theatrical fields to be trained in. These are:
                    </p>
                    <table>
                        <tr><th>Category</th><th>Price(NGN)</th></tr>
                        <tr><td> Acting </td><td> 10,000 </td></tr>
                        <tr><td> Dance </td><td> 10,000 </td></tr>
                        <tr><td> Choreography </td><td> 15,000</td></tr>
                        <tr><td> Directing </td><td> 15,000 </td></tr>
                    </table>
                    <div class="venue-date">
                        <span class="venue">Port Harcourt, Rivers State.</span><br>
                        <span class="date" >October, 2020</span>
                    </div>

                    <span class="info-text">Make payment to the account below:</span><br>
                    <div class="acct-dets">
                        <span class="acct_no">1001567755</span><br>
                        <span class="bank">Heritage Bank</span>
                    </div>
                </span>
                <span class="col-1 col-m-1 col-t-1">&nbsp;</span>
            </section>
        <section class="row mid-footer" id="reg_form">
            <span class="col-1 col-m-1 col-t-1">&nbsp;</span>
            <span class="col-10 col-m-10 col-t-10">
                <header class="pt-section-header lato"><h2>REGISTRATION FORM</h2></header>
                <p class="">Please fill the form below</p>
                <form method="post" action="processreg.php" class="home-form" >
                    <table class="home-form">
                        <tr><td class="home-form-table-cell"><label for="surname">Surname</label></td><td class="home-form-table-cell"><input type="text" placeholder="Surname" name="surname" required /></td></tr>
                        <tr><td class="home-form-table-cell"><label for="firstname">First Name</label></td><td class="home-form-table-cell"><input type="text" placeholder="First Name" name="firstname" required /></td></tr>
                        <tr><td class="home-form-table-cell"><label for="phone">Phone Number</label></td><td class="home-form-table-cell"><input type="text" placeholder="Phone No." name="phone" required /></td></tr>
                        <tr><td class="home-form-table-cell"><label for="email">Email</label></td><td class="home-form-table-cell"><input type="email" placeholder="Email" name="email" required /></td></tr>
                        <tr><td class="home-form-table-cell"><label for="category">Category</label></td><td class="home-form-table-cell"><select name="category" required ><option>Select Category</option><option value="1">Acting</option><option value="2">Dance</option><option value="3">Choreography</option><option value="4">Directing</option></td></tr>
                        <tr><td class="home-form-table-cell"></td><td class="home-form-table-cell"><input type="submit" value="Submit" name="send" /></td></tr>
                    </table>
                    <span id="form_status">Please ensure you have your proof of payment ready before submitting.</span>
                </form>
            </span>
            <span class="col-1 col-m-1 col-t-1">&nbsp;</span>
        </section>
        <section class="row mid-low-footer">
            <span class="col-1 col-m-1 col-t-1">&nbsp;</span>
            <span class="col-10 col-m-10 col-t-10">
                <header class="pt-section-header lato" id="contacts"><h2>HAVE ENQUIRIES?</h2></header>
                <div class="s-page-section contact-section">
                    <span><span class="email">Email:</span> &nbsp;&nbsp;<span class="">activeplayhouse@gmail.com</span></span><br />
                    <span><span class="phone">Phone:</span>&nbsp;&nbsp;<span class="">08035525042, 09052224859</span></span><br />
                    <span><span class="address">Port Harcourt, Rivers State, Nigeria</span></span><br />
                    <span class="l-sm-icons"><a href="https://www.facebook.com/activeplayhouse" target="_blank"><img src="images/facebook.png" alt="" class="sm-icons" /></a></span>&nbsp;<span class="l-sm-icons"><a href="https://www.instagram.com/activeplayhouse" target="_blank"><img src="images/instagram.png" alt="" class="sm-icons" /></a></span>&nbsp;<span class="l-sm-icons"><a href="https://twitter.com/ActivePlayhouse" target="_blank"><img src="images/twitter.png" alt="" class="sm-icons" /></a></span>&nbsp;<a href="mailto:activeplayhouse@gmail.com"><span class="l-sm-icons"><img src="images/email.png" alt="" class="sm-icons" /></span></a>
                </div>
            </span>
            <span class="col-1 col-m-1 col-t-1">&nbsp;</span>
        </section>
        </span>
        <span class="bottom-footer row"><span class="col-3 col-m-5 col-t-3 s-bottom-footer">&copy; 2020 Active Playhouse</span><span class="col-5 no-mobile col-t-4">&nbsp;</span><span class="col-3 col-m-6 col-t-4" style="text-align: right;">powered by PM Consolidated</span></span>
    </footer>
    <script type="text/javascript" src="js/responsive.js"></script>
    <script type="text/javascript" src="ajaxrequests.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" src=js/sliderscript.js></script>
    <noscript> </noscript>
</body>
</html>