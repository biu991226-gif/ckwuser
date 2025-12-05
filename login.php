<?php
session_start();
$flag = $_POST["loginFlag"];
if($flag == "1"){
	// add
	$firstname = $_POST["firstName"];
	$lastname = $_POST["lastName"];
	$email = $_POST["email"];
    $password = $_POST["password"];


$link = mysqli_connect("mysql3101.db.sakura.ne.jp", "mzx991226_zhixin", "mzx991226", "mzx991226_zhixin");

$sql ="INSERT INTO `users`(`firstName`,`lastName`,`email`, `password`) VALUES ('$firstname','$lastname','$email','$password ')";
$res = mysqli_query($link, $sql);


echo "注册成功";
echo "<a href='login.html'>登录</a>";


} else {
	// login
$email = $_POST["login_email"];
$password = $_POST["login_password"];



$link = mysqli_connect("mysql3101.db.sakura.ne.jp", "mzx991226_zhixin", "mzx991226", "mzx991226_zhixin");

$sql ="SELECT email, password FROM `users` 
WHERE 
email='$email' and password='$password'";
$res = mysqli_query($link, $sql);

if($res->num_rows==0){

echo "这个用户不存在！".$sql;
}else{ 
$_SESSION["email"]= $email;
echo "登录成功";
echo "<a href='my.php'>自己的信息</a>";
}
}






?>