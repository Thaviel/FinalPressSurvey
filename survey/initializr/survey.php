<?php require'connect.php';?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/normalize.min.css">
    <link rel="stylesheet" href="css/main.css">

    <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
<body>
    <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <div class="header-container">
        <header class="wrapper clearfix">
            <h1 class="title">Surveys</h1>
            <img src="img/logo.png" alt="Survey" >
            <nav>
                <ul>
                    <li><a href="index.php">surveys</a></li>
                    <li><a href="login.php">account</a></li>
                </ul>
            </nav>
        </header>
    </div>

    <div class="main-container">
        <div class="main wrapper clearfix">
			<?php
				$survid = htmlspecialchars($_GET["key"]);
				$sql="SELECT * FROM survey WHERE Survey_ID=$survid;";

				$result=mysql_query($sql);
				$row = mysql_fetch_array($result);
				
				$title = $row["name"];
				$q1text=$row["q1text"];
				$q1a=$row["q1a"];
				$q1b=$row["q1b"];
				$q1c=$row["q1c"];
				$q1d=$row["q1d"];
				$q2text=$row["q2text"];
				$q2a=$row["q2a"];
				$q2b=$row["q2b"];
				$q2c=$row["q2c"];
				$q2d=$row["q2d"];
				$q3text=$row["q3text"];
				$q3a=$row["q3a"];
				$q3b=$row["q3b"];
				$q3c=$row["q3c"];
				$q3d=$row["q3d"];
				$q4text=$row["q4text"];
				$q4a=$row["q4a"];
				$q4b=$row["q4b"];
				$q4c=$row["q4c"];
				$q4d=$row["q4d"];
				$q5text=$row["q5text"];
				$q5a=$row["q5a"];
				$q5b=$row["q5b"];
				$q5c=$row["q5c"];
				$q5d=$row["q5d"];
				$q6text=$row["q6text"];
				$q6a=$row["q6a"];
				$q6b=$row["q6b"];
				$q6c=$row["q6c"];
				$q6d=$row["q6d"];
				$q7text=$row["q7text"];
				$q7a=$row["q7a"];
				$q7b=$row["q7b"];
				$q7c=$row["q7c"];
				$q7d=$row["q7d"];
				$q8text=$row["q8text"];
				$q8a=$row["q8a"];
				$q8b=$row["q8b"];
				$q8c=$row["q8c"];
				$q8d=$row["q8d"];
				$q9text=$row["q9text"];
				$q9a=$row["q9a"];
				$q9b=$row["q9b"];
				$q9c=$row["q9c"];
				$q9d=$row["q9d"];
				$q10text=$row["q10text"];
				$q10a=$row["q10a"];
				$q10b=$row["q10b"];
				$q10c=$row["q10c"];
				$q10d=$row["q10d"];
			  ?>
            <article>
                <header>
                    <h1><?= $title ?></h1>
					<!--form that displays all questions of a survey along with answers-->
					<form>
					<p> <?= $q1text ?> </p> 
					<input id="1A" type="radio" name="Q1"/> <?= $q1a ?> </br>
					<input id="1B" type="radio" name="Q1"/> <?= $q1b ?> </br>
					<input id="1C" type="radio" name="Q1"/> <?= $q1c ?> </br>
					<input id="1D" type="radio" name="Q1"/> <?= $q1d ?> </br>
					<p> <?= $q2text ?> </p> 
					<input id="2A" type="radio" name="Q2"/> <?= $q2a ?> </br>
					<input id="2B" type="radio" name="Q2"/> <?= $q2b ?> </br>
					<input id="2C" type="radio" name="Q2"/> <?= $q2c ?> </br>
					<input id="2D" type="radio" name="Q2"/> <?= $q2d ?> </br>
					<p> <?= $q3text ?> </p> 
					<input id="3A" type="radio" name="Q3"/> <?= $q3a ?> </br>
					<input id="3B" type="radio" name="Q3"/> <?= $q3b ?> </br>
					<input id="3C" type="radio" name="Q3"/> <?= $q3c ?> </br>
					<input id="3D" type="radio" name="Q3"/> <?= $q3d ?> </br>
					<p> <?= $q4text ?> </p> 
					<input id="4A" type="radio" name="Q3"/> <?= $q4a ?> </br>
					<input id="4B" type="radio" name="Q3"/> <?= $q4b ?> </br>
					<input id="4C" type="radio" name="Q3"/> <?= $q4c ?> </br>
					<input id="4D" type="radio" name="Q3"/> <?= $q4d ?> </br>
					<p> <?= $q5text ?> </p> 
					<input id="5A" type="radio" name="Q4"/> <?= $q5a ?> </br>
					<input id="5B" type="radio" name="Q4"/> <?= $q5b ?> </br>
					<input id="5C" type="radio" name="Q4"/> <?= $q5c ?> </br>
					<input id="5D" type="radio" name="Q4"/> <?= $q5d ?> </br>
					<p> <?= $q6text ?> </p> 
					<input id="6A" type="radio" name="Q5"/> <?= $q6a ?> </br>
					<input id="6B" type="radio" name="Q5"/> <?= $q6b ?> </br>
					<input id="6C" type="radio" name="Q5"/> <?= $q6c ?> </br>
					<input id="6D" type="radio" name="Q5"/> <?= $q6d ?> </br>
					<p> <?= $q7text ?> </p> 
					<input id="7A" type="radio" name="Q6"/> <?= $q7a ?> </br>
					<input id="7B" type="radio" name="Q6"/> <?= $q7b ?> </br>
					<input id="7C" type="radio" name="Q6"/> <?= $q7c ?> </br>
					<input id="7D" type="radio" name="Q6"/> <?= $q7d ?> </br>
					<p> <?= $q8text ?> </p> 
					<input id="8A" type="radio" name="Q7"/> <?= $q8a ?> </br>
					<input id="8B" type="radio" name="Q7"/> <?= $q8b ?> </br>
					<input id="8C" type="radio" name="Q7"/> <?= $q8c ?> </br>
					<input id="8D" type="radio" name="Q7"/> <?= $q8d ?> </br>
					<p> <?= $q9text ?> </p> 
					<input id="9A" type="radio" name="Q8"/> <?= $q9a ?> </br>
					<input id="9B" type="radio" name="Q8"/> <?= $q9b ?> </br>
					<input id="9C" type="radio" name="Q8"/> <?= $q9c ?> </br>
					<input id="9D" type="radio" name="Q8"/> <?= $q9d ?> </br>
					<p> <?= $q10text ?> </p> 
					<input id="10A" type="radio" name="Q9"/> <?= $q10a ?> </br>
					<input id="10B" type="radio" name="Q9"/> <?= $q10b ?> </br>
					<input id="10C" type="radio" name="Q9"/> <?= $q10c ?> </br>
					<input id="10D" type="radio" name="Q9"/> <?= $q10d ?> </br>

					</form>
					


               </article>
        </div>
        <!-- #main -->
    </div>
    <!-- #main-container -->

    <div class="footer-container">
        <footer class="wrapper">
            <h3>Copyright Statement</h3>
            <div>
                <p>
                    this website is made under the:
                    <br />
                    GNU GENERAL PUBLIC LICENSE

Version 107, 17 June 2014

Copyright (c) 2007 Free Software Foundation, Inc. <a href="http://fsf.org">http://fsf.org</a>
                </p>
            </div>
        </footer>
    </div>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>

    <script src="js/main.js"></script>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
        (function (b, o, i, l, e, r) {
            b.GoogleAnalyticsObject = l; b[l] || (b[l] =
            function () { (b[l].q = b[l].q || []).push(arguments) }); b[l].l = +new Date;
            e = o.createElement(i); r = o.getElementsByTagName(i)[0];
            e.src = '//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e, r)
        }(window, document, 'script', 'ga'));
        ga('create', 'UA-XXXXX-X'); ga('send', 'pageview');
        </script>
</body>
</html>
