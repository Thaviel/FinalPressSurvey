<?php
require'connect.php';
 
 
 
 
 
 
 
 
 
 
 
 
 

if (isset($_POST['save'])) {
	echo"Saving guy";
} else if (isset($_POST['publish'])) {
	echo"Publishing guy";
} else {
	echo"WTF DUDE GET OUT!";
}
?>