<?php
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
	$surname = $_POST['surname'];
	
    echo "Hello : <b> $name $surname </b><br>";
	
    echo "<br>You can use the following form again to enter a new name.<br>";
	
}
echo"
<form method='post' action='".$_SERVER['PHP_SELF']."'>

   Name <input type='text' name='name'><br>
   Surname <input type='text' name='surname' style='width:154px;'><br>
   <input type='submit' name='submit' value='Submit Form'><br>
</form>
";
?>