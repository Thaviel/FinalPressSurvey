<?php 
include "connect.php"; 
// username and password sent from form 
$myusername=$_POST['username']; 
$mypassword=$_POST['password']; 

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$sql="SELECT * FROM $tbl_name WHERE Username='$myusername' and Password='$mypassword'";
$result=mysql_query($sql);

//creates a query to find the User_ID currently
$useridsql="SELECT User_ID FROM (SELECT * FROM $tbl_name WHERE Username='$myusername' and Password='$mypassword') AS q;";
$useridresult=mysql_query($useridsql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count){

// Register $myusername, $mypassword
$_SESSION['Username'] = $myusername;
$_SESSION['Password'] = $mypassword;
$_SESSION['LoggedIn'] = 1;
//$_SESSION['UserID'] = 2;
$_SESSION['UserID'] = $useridresult;
header("location:account.php");


}
else {
echo "Wrong Username or Password, sorry.";
}
?>