<!DOCTYPE html>
<html>
<body>
<style>
body{
	background-image:url('awd.gif');
	background-size:cover;
	margin:0;
	padding: 10px;
}
</style></body></html>
<?php
	session_start();
	session_destroy();
	
	if(isset($_SESSION['uname'])){
		
		
		echo "<h2>WELCOME USER</h2>";
		
		echo "<br><a href='login1.php'><input type=button name=LOGOUT value=LOGOUT></a></br>";
		
		echo "<br><a href='next.php'><input type=button name=next value=NEXT></a></br>";
	}
	else {
		
		echo "<script>location.href='login1.php'</script>";
		
	}
?>