<?php
	echo '<a href = "index.php"></a>';
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	
		if($username == "aubrey" && $password == "1234"){
			
			echo '<a> You are now succsefully log in </a>' . '<a href = "session.php">CONTINUE</a>';
		}
		else{
			
			echo '<a> Log in Failed </a>' . '<a href = "index.php">TRY AGAIN</a>';
		}
?>