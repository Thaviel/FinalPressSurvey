<?php
require'connect.php';

//so we take the number from the url and the user id fromt he cookie to make a query to post O GOD NO
// same looking table except 4th thingy is a datestamp gud I guess.


$survid = htmlspecialchars($_GET["key"]);
$userid = $_SESSION['UserID'];

$sql="SELECT * FROM surveytemplate WHERE SurveyTemplate_ID=$survid;";
$result=mysql_query($sql);

$row = mysql_fetch_array($result);

				//we make a current datestamp
				$date = new DateTime();
				$dbDate = $date->format('U');
				
				$name=$row["name"];
				$q1=$row["q1text"];
				$a1=$row["q1a"];
				$b1=$row["q1b"];
				$c1=$row["q1c"];
				$d1=$row["q1d"];
				$q2=$row["q2text"];
				$a2=$row["q2a"];
				$b2=$row["q2b"];
				$c2=$row["q2c"];
				$d2=$row["q2d"];
				$q3=$row["q3text"];
				$a3=$row["q3a"];
				$b3=$row["q3b"];
				$c3=$row["q3c"];
				$d3=$row["q3d"];
				$q4=$row["q4text"];
				$a4=$row["q4a"];
				$b4=$row["q4b"];
				$c4=$row["q4c"];
				$d4=$row["q4d"];
				$q5=$row["q5text"];
				$a5=$row["q5a"];
				$b5=$row["q5b"];
				$c5=$row["q5c"];
				$d5=$row["q5d"];
				$q6=$row["q6text"];
				$a6=$row["q6a"];
				$b6=$row["q6b"];
				$c6=$row["q6c"];
				$d6=$row["q6d"];
				$q7=$row["q7text"];
				$a7=$row["q7a"];
				$b7=$row["q7b"];
				$c7=$row["q7c"];
				$d7=$row["q7d"];
				$q8=$row["q8text"];
				$a8=$row["q8a"];
				$b8=$row["q8b"];
				$c8=$row["q8c"];
				$d8=$row["q8d"];
				$q9=$row["q9text"];
				$a9=$row["q9a"];
				$b9=$row["q9b"];
				$c9=$row["q9c"];
				$d9=$row["q9d"];
				$q10=$row["q10text"];
				$a10=$row["q10a"];
				$b10=$row["q10b"];
				$c10=$row["q10c"];
				$d10=$row["q10d"];


// To protect MySQL injection (more detail about MySQL injection)

$name = stripslashes($name);
$name = mysql_real_escape_string($name);

$q1 = stripslashes($q1);
$q1 = mysql_real_escape_string($q1);

$a1 = stripslashes($a1);
$a1 = mysql_real_escape_string($a1);

$b1 = stripslashes($b1);
$b1 = mysql_real_escape_string($b1);

$c1 = stripslashes($c1);
$c1 = mysql_real_escape_string($c1);

$d1 = stripslashes($d1);
$d1 = mysql_real_escape_string($d1);

$q2 = stripslashes($q2);
$q2 = mysql_real_escape_string($q2);

$a2 = stripslashes($a2);
$a2 = mysql_real_escape_string($a2);

$b2 = stripslashes($b2);
$b2 = mysql_real_escape_string($b2);

$c2 = stripslashes($c2);
$c2 = mysql_real_escape_string($c2);

$d2 = stripslashes($d2);
$d2 = mysql_real_escape_string($d2);

$q3 = stripslashes($q3);
$q3 = mysql_real_escape_string($q3);

$a3 = stripslashes($a3);
$a3 = mysql_real_escape_string($a3);

$b3 = stripslashes($b3);
$b3 = mysql_real_escape_string($b3);

$c3 = stripslashes($c3);
$c3 = mysql_real_escape_string($c3);

$d3 = stripslashes($d3);
$d3 = mysql_real_escape_string($d3);

$q4 = stripslashes($q4);
$q4 = mysql_real_escape_string($q4);

$a4 = stripslashes($a4);
$a4 = mysql_real_escape_string($a4);

$b4 = stripslashes($b4);
$b4 = mysql_real_escape_string($b4);

$c4 = stripslashes($c4);
$c4 = mysql_real_escape_string($c4);

$d4 = stripslashes($d4);
$d4 = mysql_real_escape_string($d4);

$q5 = stripslashes($q5);
$q5 = mysql_real_escape_string($q5);

$a5 = stripslashes($a5);
$a5 = mysql_real_escape_string($a5);

$b5 = stripslashes($b5);
$b5 = mysql_real_escape_string($b5);

$c5 = stripslashes($c5);
$c5 = mysql_real_escape_string($c5);

$d5 = stripslashes($d5);
$d5 = mysql_real_escape_string($d5);

$q6 = stripslashes($q6);
$q6 = mysql_real_escape_string($q6);

$a6 = stripslashes($a6);
$a6 = mysql_real_escape_string($a6);

$b6 = stripslashes($b6);
$b6 = mysql_real_escape_string($b6);

$c6 = stripslashes($c6);
$c6 = mysql_real_escape_string($c6);

$d6 = stripslashes($d6);
$d6 = mysql_real_escape_string($d6);

$q7 = stripslashes($q7);
$q7 = mysql_real_escape_string($q7);

$a7 = stripslashes($a7);
$a7 = mysql_real_escape_string($a7);

$b7 = stripslashes($b7);
$b7 = mysql_real_escape_string($b7);

$c7 = stripslashes($c7);
$c7 = mysql_real_escape_string($c7);

$d7 = stripslashes($d7);
$d7 = mysql_real_escape_string($d7);

$q8 = stripslashes($q8);
$q8 = mysql_real_escape_string($q8);

$a8 = stripslashes($a8);
$a8 = mysql_real_escape_string($a8);

$b8 = stripslashes($b8);
$b8 = mysql_real_escape_string($b8);

$c8 = stripslashes($c8);
$c8 = mysql_real_escape_string($c8);

$d8 = stripslashes($d8);
$d8 = mysql_real_escape_string($d8);

$q9 = stripslashes($q9);
$q9 = mysql_real_escape_string($q9);

$a9 = stripslashes($a9);
$a9 = mysql_real_escape_string($a9);

$b9 = stripslashes($b9);
$b9 = mysql_real_escape_string($b9);

$c9 = stripslashes($c9);
$c9 = mysql_real_escape_string($c9);

$d9 = stripslashes($d9);
$d9 = mysql_real_escape_string($d9);

$q10 = stripslashes($q10);
$q10 = mysql_real_escape_string($q10);

$a10 = stripslashes($a10);
$a10 = mysql_real_escape_string($a10);

$b10 = stripslashes($b10);
$b10 = mysql_real_escape_string($b10);

$c10 = stripslashes($c10);
$c10 = mysql_real_escape_string($c10);

$d10 = stripslashes($d10);
$d10 = mysql_real_escape_string($d10);



$addsurveysql="
INSERT INTO  `survey`.`survey` (
`Survey_ID` , `user_ID` , `name`, `datestamp` , `q1text` , `q1a` , `q1b` ,`q1c` ,`q1d` ,`q2text` ,`q2a` ,`q2b` ,`q2c` ,`q2d` ,`q3text` ,`q3a` ,`q3b` ,`q3c` ,`q3d` ,`q4text` ,`q4a` ,`q4b` ,`q4c` ,`q4d` ,`q5text` ,`q5a` ,`q5b` ,`q5c` ,`q5d` ,`q6text` ,`q6a` ,`q6b` ,`q6c` ,`q6d` ,`q7text` ,`q7a` ,`q7b` ,`q7c` ,`q7d` ,`q8text` ,`q8a` ,`q8b` ,`q8c` ,`q8d` ,`q9text` ,`q9a` ,`q9b` ,`q9c` ,`q9d` ,`q10text` ,`q10a` ,`q10b` ,`q10c` ,`q10d`)
VALUES (

    NULL ,
    '". $_SESSION['UserID'] ."',
    '$name',
    '$dbDate',
    '$q1',
    '$a1',
    '$b1',
    '$c1',
    '$d1',
    '$q2',
    '$a2',
    '$b2',
    '$c2',
    '$d2',
    '$q3',
    '$a3',
    '$b3',
    '$c3',
    '$d3',
    '$q4',
    '$a4',
    '$b4',
    '$c4',
    '$d4',
    '$q5',
    '$a5',
    '$b5',
    '$c5',
    '$d5',
    '$q6',
    '$a6',
    '$b6',
    '$c6',
    '$d6',
    '$q7',
    '$a7',
    '$b7',
    '$c7',
    '$d7',
    '$q8',
    '$a8',
    '$b8',
    '$c8',
    '$d8',
    '$q9',
    '$a9',
    '$b9',
    '$c9',
    '$d9',
    '$q10',
    '$a10',
    '$b10',
    '$c10',
    '$d10'
);";
		mysql_query($addsurveysql);
		echo "Template published! <a href='account.php'> Return to account. </a>;"



?>
