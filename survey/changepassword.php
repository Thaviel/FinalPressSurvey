<?php
require'connect.php';

// password1 and password2 sent from form 
$newpass1=$_POST['password1']; 
$newpass2=$_POST['password2'];

//check that they are the same.
if($newpass1==$newpass2){
//create query to change user's password
$changepasssql="UPDATE `survey`.`user` SET `password` =  '" . $newpass1 . "' WHERE  `user`.`User_ID` =" . $_SESSION['UserID'] . ";";
mysql_query($changepasssql);
echo "Password Changed!";
}
else
{
echo "passwords don't match.";
}
echo '<a href="javascript:history.back()">Back</a>';

//create query to change user's password

 

?>