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

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count){
// Register $myusername, $mypassword and redirect to file "login_success.php"

$_SESSION['Username'] = $myusername;
$_SESSION['Password'] = $mypassword;
$_SESSION['LoggedIn'] = 1; 
header("location:index.php");


}
else {
echo "Wrong Username or Password, sorry.";
}
?>