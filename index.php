<?php
/* every time , you need to run a block of php code it must be run inside of php files html cannot run php code becuse it is not a server- side language*
include_once 'php/dbconnect.php'*/
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
        <h1>HOTEL BOOKING FORM</h1>
        <p>denotes a required field</p>

         <form name="hotelForm" action="php/store.php" onsubmit="return validation()" method="post">
            <p>
                <label for="firstname">First name*:</label>
                <input type="text" name="firstname" id="firstname">
            </p> 

            <p>
                <label for="lastname">Last name*:</label>
                <input type="text" name="lastname" id="lastname">
            </p>

            <p>
                <label for="roomSize">Room Size:</label>
                <select name="checkin">
                    <option value="Front deck">single</option>
                    <option value="Onilne">suite</option>
                    <option value="Mobile App">executive</option>
                    <option value="assisted">deluxe</option>

                 </select>
            </p> 

            <p>
                <label for="checkIn">check in type:</label>
                 <select name="checkin">
                    <option value="Front deck">front deck</option>
                    <option value="Onilne">online</option>
                    <option value="Mobile App">moble app</option>
                    <option value="assisted">assisted</option>

                 </select>
            </p> 
            <input type="submit" id="submitbutton" value="submit">





         </form>




















        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.js"><\/script>')</script>

        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
