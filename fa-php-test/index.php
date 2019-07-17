<html>
<head>
</head>
<body>
<?php
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
	$surname = $_POST['surname'];
	
	$server = "us-cdbr-iron-east-02.cleardb.net";
	$username = "b090f028798438";
	$password = "3051bc1b";
	$db = "ad_ea13be3c598c03b";
	
	$link = new mysqli($server, $username, $password, $db);
	$query = "INSERT INTO users (nome, cognome) values ('".$name."','".$surname."')";
	$link->query($query);
	$link->close();
	
    echo "Hello : <b> $name $surname </b><br>";
	echo "<br>Thank you, your name has been registered.<br>";
    echo "<br>You can use the following form again to enter a new name.<br>";
	
}
echo"<div style='position: absolute;top: 50%; -ms-transform: translateY(-50%);transform: translateY(-50%);left: 50%; -ms-transform: translateX(-50%);transform: translateX(-50%);'>
<form method='post' action='".$_SERVER['PHP_SELF']."'>

   Name <input type='text' name='name'><br>
   Surname <input type='text' name='surname' style='width:154px;'><br>
   
   <input type='submit' name='submit' value='Submit Form' style='width:215px;'><br>
</form>
</div>
</center>
";
?>
</body>
</html>