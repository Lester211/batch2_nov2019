<!DOCTYPE html>
<html>
<title>WELCOME</title>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"></script>
<link rel="stylesheet" href="style.css">

<body>
<body background="pink.jpg">

<div class = "container">
<br/>
<h1 class = "text-center">LOG IN TO CONTINUE</h1>
<form action = "session.php" method = "POST" style = "max-width: 450px; margin: auto;">
<input class = "form-control" type="text" placeholder = "username">
<br/>
<input class = "form-control" type="password" placeholder = "password">
<br/>
<table  border="0" align="center">

    <tr>

      <td width="215"> Validation code:</td>

      <td width="162">

<?php

$arr= array_merge(range(0,9),range("A","Z"));

//print_r($arr);

for($i=1;$i<=5;$i++)

{
	$ch = $arr[array_rand($arr)];

	@$captcha=$captcha.$ch;

	@$fc=$fc.$ch.",";

}

//echo $fc."<br>";
$nar = explode(",",$fc);

for($i=0;$i<5;$i++)

{

echo $nar[$i];
//echo "<img src='$nar[$i].GIF'/>";

}

if(isset($_POST['match']))

{

    if($_POST['img']==$_POST['hid'])

     {

      echo  "<br/><font color='blue'>security code matched</font>";

     }

    else

    {

	echo "<br/><font color='red'> try again</font>";

    }

}

?>

    <tr>

        <td>Enter the code here :</td>

       <td> <input name="img" type="text">

        </td>

    </tr>

    <tr>

      <td colspan="2" align="center">

	  

    </tr>

  </table>

<input type="hidden" value="<?php echo $captcha; ?>" name="hid"/>
<br/>
<form action = "session.php" method = "POST" style = "max-width: 450px; margin: auto;">

<button type="submit" class="btn btn-primary btn-block">Log in</button>
</form>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</body>
</html>