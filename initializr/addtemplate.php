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
								echo $addtemplatesql;
								mysql_query($addtemplatesql);
								echo "Template Added! <a href='account.php'> CLICK </a>;"

?>