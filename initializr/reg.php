<?php 
include "connect.php"; 
// username and password sent from form 
$myusername=$_POST['username']; 
$mypassword=$_POST['password']; 
$myemail=$_POST['email'];

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myemail = stripslashes($myemail);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$myemail = mysql_real_escape_string($myemail);


$sql="SELECT * FROM $tbl_name WHERE Username='$myusername'";
$result=mysql_query($sql);
$count=mysql_num_rows($result);
if($count){
	echo'your username is taken try '. $myusername . rand() . '<a href="javascript:history.back()">Back</a>';

	} else {

		$sql="SELECT * FROM $tbl_name WHERE Password='$myemail'";
		$result=mysql_query($sql);
		$count=mysql_num_rows($result);
		
		} if($count){
		echo'your already registered' . '<a href="javascript:history.back()">Back</a>';
		
			}else{
			
			$sql = "INSERT INTO `survey`.`user` (`User_ID`, `username`, `password`, `email`) VALUES (NULL, \'$myusername\', \'$mypassword\', \'$myemail\');";
			echo $sql;
			mysql_query($sql);
			
			}



?>