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

            <article>
                <header>
                    <h1>Survey Title</h1>
                </header>
				<?php
				$survid = htmlspecialchars($_GET["key"]);
				$sql="SELECT * FROM surveytemplate WHERE SurveyTemplate_ID=$survid;";
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
				<form id='login' action="edittemplatesql.php" method='post' accept-charset='UTF-8'>
                
					<input name="Title" id="Title" type="text" value="<?= $title?>" />
					<input name="templateID" id="templateID" type="hidden" value="<?= $survid?>"/>
					<h2>Question 1</h2>
					<textarea name= "q1" id="q1" cols="60" rows="2"> <?= $q1text?> </textarea>
					<p>A: </p>
					<input name="1a" id="1a" type="text" value="<?= $q1a?>" />
					<p>B: </p>
					<input name="1b" id="1b" type="text" value="<?= $q1b?>" />
					<p>C: </p>
					<input name="1c" id="1c" type="text" value="<?= $q1c?>" />
					<p>D: </p>
					<input name="1d" id="1d" type="text" value="<?= $q1d?>" />


					<h2>Question 2</h2>
					<textarea name="q2" id="q2" cols="60" rows="2"><?= $q2text?></textarea>
					<p>A: </p>
					<input name="2a" id="2a" type="text" value="<?= $q2a?>" />
					<p>B: </p>
					<input name="2b" id="2b" type="text" value="<?= $q2b?>" />
					<p>C: </p>
					<input name="2c" id="2c" type="text" value="<?= $q2c?>" />
					<p>D: </p>
					<input name="2d" id="2d" type="text" value="<?= $q2d?>" />

					<h2>Question 3</h2>
					<textarea name="q3" id="q3" cols="60" rows="2"><?= $q3text?></textarea>
					<p>A: </p>
					<input name="3a" id="3a" type="text" value="<?= $q3a?>" />
					<p>B: </p>
					<input name="3b" id="3b" type="text" value="<?= $q3b?>" />
					<p>C: </p>
					<input name="3c" id="3c" type="text" value="<?= $q3c?>" />
					<p>D: </p>
					<input name="3d" id="3d" type="text" value="<?= $q3d?>" />

					<h2>Question 4</h2>
					<textarea name="q4" id="q4" cols="60" rows="2"><?= $q4text?></textarea>
					<p>A: </p>
					<input name="4a" id="4a" type="text" value="<?= $q4a?>" />
					<p>B: </p>
					<input name="4b" id="4b" type="text" value="<?= $q4b?>" />
					<p>C: </p>
					<input name="4c" id="4c" type="text" value="<?= $q4c?>" />
					<p>D: </p>
					<input name="4d" id="4d" type="text" value="<?= $q4d?>" />

					<h2>Question 5</h2>
					<textarea name="q5" id="q5" cols="60" rows="2"><?= $q5text?></textarea>
					<p>A: </p>
					<input name="5a" id="5a" type="text" value="<?= $q5a?>" />
					<p>B: </p>
					<input name="5b" id="5b" type="text" value="<?= $q5b?>" />
					<p>C: </p>
					<input name="5c" id="5c" type="text" value="<?= $q5c?>" />
					<p>D: </p>
					<input name="5d" id="5d" type="text" value="<?= $q5d?>" />

					<h2>Question 6</h2>
					<textarea name="q6" id="q6" cols="60" rows="2"><?=$q6text?></textarea>
					<p>A: </p>
					<input name="6a" id="6a" type="text" value="<?= $q6a?>"/>
					<p>B: </p>
					<input name="6b" id="6b" type="text" value="<?= $q6b?>"/>
					<p>C: </p>
					<input name="6c" id="6c" type="text" value="<?= $q6c?>"/>
					<p>D: </p>
					<input name="6d" id="6d" type="text" value="<?= $q6d?>"/>


					<h2>Question 7</h2>
					<textarea name="q7" id="q7" cols="60" rows="2"><?= $q7text?></textarea>
					<p>A: </p>
					<input name="7a" id="7a" type="text" value="<?= $q7a?>" />
					<p>B: </p>
					<input name="7b" id="7b" type="text" value="<?= $q7b?>"  />
					<p>C: </p>
					<input name="7c" id="7c" type="text" value="<?= $q7c?>"  />
					<p>D: </p>
					<input name="7d" id="7d" type="text" value="<?= $q7d?>"  />

					<h2>Question 8</h2>
					<textarea name="q8" id="q8" cols="60" rows="2"><?= $q8text?></textarea>
					<p>A: </p>
					<input name="8a" id="8a" type="text" value="<?= $q8a?>" />
					<p>B: </p>
					<input name="8b" id="8b" type="text" value="<?= $q8b?>"  />
					<p>C: </p>
					<input name="8c" id="8c" type="text" value="<?= $q8c?>"  />
					<p>D: </p>
					<input name="8d" id="8d" type="text" value="<?= $q8d?>"  />


					<h2>Question 9</h2>
					<textarea name="q9" id="q9" cols="60" rows="2"><?= $q9text?></textarea>
					<p>A: </p>
					<input name="9a" id="9a" type="text" value="<?= $q9a?>" />
					<p>B: </p>
					<input name="9b" id="9b" type="text" value="<?= $q9b?>"  />
					<p>C: </p>
					<input name="9c" id="9c" type="text" value="<?= $q9c?>"  />
					<p>D: </p>
					<input name="9d" id="9d" type="text" value="<?= $q9d?>"  />


					<h2>Question 10</h2>
					<textarea name="q10" id="q10" cols="60" rows="2"><?= $q10text?></textarea>
					<p>A: </p>
					<input name="10a" id="10a" type="text" value="<?= $q10a?>" />
					<p>B: </p>
					<input name="10b" id="10b" type="text" value="<?= $q10b?>" />
					<p>C: </p>
					<input name="10c" id="10c" type="text" value="<?= $q10c?>" />
					<p>D: </p>
					<input name="10d" id="10d" type="text" value="<?= $q10d?>" />

					</br>
					</br>
					
					<input type="submit" name="save" value="Save"/>
					<!--If save is clicked, then save-->
					
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
