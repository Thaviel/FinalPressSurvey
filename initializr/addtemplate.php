<?php 
include "connect.php"; 

//save all posts from template.php as php variables
$name=$_POST['Title']; 
$q1=$_POST['q1'];
$a1=$_POST['1a'];
$b1=$_POST['1b'];
$c1=$_POST['1c'];
$d1=$_POST['1d'];
$q2=$_POST['q2'];
$a2=$_POST['2a'];
$b2=$_POST['2b'];
$c2=$_POST['2c'];
$d2=$_POST['2d'];
$q3=$_POST['q3'];
$a3=$_POST['3a'];
$b3=$_POST['3b'];
$c3=$_POST['3c'];
$d3=$_POST['3d'];
$q4=$_POST['q4'];
$a4=$_POST['4a'];
$b4=$_POST['4b'];
$c4=$_POST['4c'];
$d4=$_POST['4d'];
$q5=$_POST['q5'];
$a5=$_POST['5a'];
$b5=$_POST['5b'];
$c5=$_POST['5c'];
$d5=$_POST['5d'];
$q6=$_POST['q6'];
$a6=$_POST['6a'];
$b6=$_POST['6b'];
$c6=$_POST['6c'];
$d6=$_POST['6d'];
$q7=$_POST['q7'];
$a7=$_POST['7a'];
$b7=$_POST['7b'];
$c7=$_POST['7c'];
$d7=$_POST['7d'];
$q8=$_POST['q8'];
$a8=$_POST['8a'];
$b8=$_POST['8b'];
$c8=$_POST['8c'];
$d8=$_POST['8d'];
$q9=$_POST['q9'];
$a9=$_POST['9a'];
$b9=$_POST['9b'];
$c9=$_POST['9c'];
$d9=$_POST['9d'];
$q10=$_POST['q10'];
$a10=$_POST['10a'];
$b10=$_POST['10b'];
$c10=$_POST['10c'];
$d10=$_POST['10d'];


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




//concatinate a string together to submit to sql
$addtemplatesql="
INSERT INTO  `survey`.`surveytemplate` (
`SurveyTemplate_ID` , `user_ID` , `name` , `q1text` , `q1a` , `q1b` ,`q1c` ,`q1d` ,`q2text` ,`q2a` ,`q2b` ,`q2c` ,`q2d` ,`q3text` ,`q3a` ,`q3b` ,`q3c` ,`q3d` ,`q4text` ,`q4a` ,`q4b` ,`q4c` ,`q4d` ,`q5text` ,`q5a` ,`q5b` ,`q5c` ,`q5d` ,`q6text` ,`q6a` ,`q6b` ,`q6c` ,`q6d` ,`q7text` ,`q7a` ,`q7b` ,`q7c` ,`q7d` ,`q8text` ,`q8a` ,`q8b` ,`q8c` ,`q8d` ,`q9text` ,`q9a` ,`q9b` ,`q9c` ,`q9d` ,`q10text` ,`q10a` ,`q10b` ,`q10c` ,`q10d`)
VALUES (

    NULL ,
    '". $_SESSION['UserID'] ."',
    '$name',
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

								echo "Template Added! <a href='account.php'> Return to account. </a>;"

?>