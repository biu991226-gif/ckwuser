<?php
	header('Content-type: text/plain; charset= UTF-8');
	if(
		isset($_POST['firstName']) && isset($_POST['lastName'])
		&& isset($_POST['email']) && isset($_POST['password'])
	)
	{
		$firstname = $_POST['firstName'];
		$lastname = $_POST['lastName'];
		$email = $_POST['email'];
		$pas = $_POST['password'];
		$str = "AJAX REQUEST SUCCESS\nfirstName:" . $firstname  . "\nlastName:". $lastname. "\nemail:".$email."\npassword:".$pas."\n";
		$result = nl2br($str);
		echo $result;
	}else{
		echo 'FAIL TO AJAX REQUEST';
	}
?>