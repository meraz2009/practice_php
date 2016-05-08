<?php
 if(isset($_GET['name'])&& isset($_GET['password']))
{
	$name=htmlentities($_GET['name']);
	$password=htmlentities($_GET['password']);
	if(!empty($name && $password)){
	echo "your name:".$name."and password:".$password;
}
else {
echo "fill the form";
}
}
?>
<form action="form.php" method="get">
<input type="text" name="name"/>
<input type="password" name="password"/>
<input type="submit" value="submit"/>
</form>
