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

				<form id='login' action='addtemplate.php' method='post' accept-charset='UTF-8'>
                
					<input name="Title" id="Title" type="text" />

					<h2>Question 1</h2>
					<textarea name= "q1" id="q1" cols="60" rows="2"></textarea>
					<p>A: </p>
					<input name="1a" id="1a" type="text" />
					<p>B: </p>
					<input name="1b" id="1b" type="text" />
					<p>C: </p>
					<input name="1c" id="1c" type="text" />
					<p>D: </p>
					<input name="1d" id="1d" type="text" />


					<h2>Question 2</h2>
					<textarea name="q2" id="q2" cols="60" rows="2"></textarea>
					<p>A: </p>
					<input name="2a" id="2a" type="text" />
					<p>B: </p>
					<input name="2b" id="2b" type="text" />
					<p>C: </p>
					<input name="2c" id="2c" type="text" />
					<p>D: </p>
					<input name="2d" id="2d" type="text" />

					<h2>Question 3</h2>
					<textarea name="q3" id="q3" cols="60" rows="2"></textarea>
					<p>A: </p>
					<input name="3a" id="3a" type="text" />
					<p>B: </p>
					<input name="3b" id="3b" type="text" />
					<p>C: </p>
					<input name="3c" id="3c" type="text" />
					<p>D: </p>
					<input name="3d" id="3d" type="text" />

					<h2>Question 4</h2>
					<textarea name="q4" id="q4" cols="60" rows="2"></textarea>
					<p>A: </p>
					<input name="4a" id="4a" type="text" />
					<p>B: </p>
					<input name="4b" id="4b" type="text" />
					<p>C: </p>
					<input name="4c" id="4c" type="text" />
					<p>D: </p>
					<input name="4d" id="4d" type="text" />



					<h2>Question 5</h2>
					<textarea name="q5" id="q5" cols="60" rows="2"></textarea>
					<p>A: </p>
					<input name="5a" id="5a" type="text" />
					<p>B: </p>
					<input name="5b" id="5b" type="text" />
					<p>C: </p>
					<input name="5c" id="5c" type="text" />
					<p>D: </p>
					<input name="5d" id="5d" type="text" />

					<h2>Question 6</h2>
					<textarea name="q6" id="q6" cols="60" rows="2"></textarea>
					<p>A: </p>
					<input name="6a" id="6a" type="text" />
					<p>B: </p>
					<input name="6b" id="6b" type="text" />
					<p>C: </p>
					<input name="6c" id="6c" type="text" />
					<p>D: </p>
					<input name="6d" id="6d" type="text" />


					<h2>Question 7</h2>
					<textarea name="q7" id="q7" cols="60" rows="2"></textarea>
					<p>A: </p>
					<input name="7a" id="7a" type="text" />
					<p>B: </p>
					<input name="7b" id="7b" type="text" />
					<p>C: </p>
					<input name="7c" id="7c" type="text" />
					<p>D: </p>
					<input name="7d" id="7d" type="text" />

					<h2>Question 8</h2>
					<textarea name="q8" id="q8" cols="60" rows="2"></textarea>
					<p>A: </p>
					<input name="8a" id="8a" type="text" />
					<p>B: </p>
					<input name="8b" id="8b" type="text" />
					<p>C: </p>
					<input name="8c" id="8c" type="text" />
					<p>D: </p>
					<input name="8d" id="8d" type="text" />


					<h2>Question 9</h2>
					<textarea name="q9" id="q9" cols="60" rows="2"></textarea>
					<p>A: </p>
					<input name="9a" id="9a" type="text" />
					<p>B: </p>
					<input name="9b" id="9b" type="text" />
					<p>C: </p>
					<input name="9c" id="9c" type="text" />
					<p>D: </p>
					<input name="9d" id="9d" type="text" />


					<h2>Question 10</h2>
					<textarea name="q10" id="q10" cols="60" rows="2"></textarea>
					<p>A: </p>
					<input name="10a" id="10a" type="text" />
					<p>B: </p>
					<input name="10b" id="10b" type="text" />
					<p>C: </p>
					<input name="10c" id="10c" type="text" />
					<p>D: </p>
					<input name="10d" id="10d" type="text" />

					</br>
					</br>
					
					<input type="submit" name="save" value="Save"/>
					<input type="submit" name="publish" value="Publish"/>
					<!--If save is clicked, then save-->
					
				</form>

				<?php 
					if (isset($_POST['save'])) {
							//if key is new, use an add query
							if($_GET['key']=='new')
							{
							//submit to addtemplate to add to the current list of templates
							 header( 'Location: addtemplate.php' ) ;
							
							}else{
							
								echo "Saved Changes!";
							//if key is not new, use the value of key as the //templateid and update that one.
							
							}
					} 
					else if (isset($_POST['publish'])) 
					{
							echo"Survey has been published";
					} 
				?>
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
