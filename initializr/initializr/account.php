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
                    <!-- This is where users view the surveys they have released, and review the results-->
					<h1>Account</h1>
				<div class="boxed-border">
					<h2>My Surveys</h2>
					<?php
					//display a table of all surveys created by that user
					$query= "SELECT * FROM survey WHERE user_ID=" . $_SESSION['UserID'] . ";";
					
					$result = mysql_query($query);

echo "<table border='1'>
<tr>
<th>Survey</th>
<th>Active(days remaining)</th>
<th>View results</th>
</tr>";

//time variables to calculate expiry
$currentdate = new DateTime();
$currenttime = $currentdate->format('U');
$tendays = 864000;

while($row = mysql_fetch_array($result))
{
$days= intval($row['dateStamp']);

//subtract the time it is now, from when it was created to get the amount of time it's been alive
$activetime=$currenttime-$days;
//calculate remaining time based on how long it's been up subtracted from the max 10 days
$remainingtime=$tendays-$activetime;
//show time remaining in days
$displaytime=$remainingtime/86400;

  echo "<tr>";
  echo "<td>" . $row['name']."</td>";
  echo "<td>" . ceil($displaytime) ."</td>";
  $survID = $row['Survey_ID'];
  $link= "results.php?key=" . $survID;
  echo "<td> <a href='$link'>View</a> </td>";
  echo "</tr>";
}
echo "</table>";
				?>
					
				</div>
				</br>
				</br>				

				<div class="boxed-border">
				<h2>My Templates</h2>
				<p>here you can change, create, and release survey templates.</p>
				<?php
				//display a table of all surveys created by that user
				$query= "SELECT * FROM surveytemplate WHERE user_ID=" . $_SESSION['UserID'] . ";";
				$resulttemplate = mysql_query($query);

echo "<table border='1'>
<tr>
<th>Template</th>
<th>Edit/Publish</th>
</tr>";

while($row = mysql_fetch_array($resulttemplate))
{
  echo "<tr>";
  echo "<td>" . $row['name']."</td>";
  $survtemplateID = $row['SurveyTemplate_ID'];
  $Elink= "edittemplate.php?key=" . $survtemplateID;
  $Plink= "publishtemplate.php?key=" . $survtemplateID;
  echo "<td> <a href='$Elink'>Edit </a> / <a href='$Plink'>Publish</a> </td>";
  
  echo "</tr>";
}
echo "</table>";
echo "<a href='template.php'>Add...</a>";
				?>
				
				</div>	
				</br>
				</br>
				<!--This is where users change their password-->
				<div class="boxed-border">
					<form id='login' action='changepassword.php' method='post' accept-charset='UTF-8'>
							<fieldset>
								<h2>Change Account Password</h2>
						<input type='hidden' name='submitted' id='submitted' value='1' />
									<label for='Password1'>Password*:</label>
									<input type='text' name='password1' id='Password1' maxlength="50" />

									<label for='Password2'>Re-enter Password*:</label>
									<input type='text' name='password2' id='Password2' maxlength="50" />

						<input type='submit' name='Submit' value='Change Password' />

				</div>
				
				<a href="logout.php"> Logout </a>

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
<?php mysql_close(); ?>
