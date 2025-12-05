<?php
session_start();

$email = $_POST["email"];




$link = mysqli_connect("mysql3101.db.sakura.ne.jp", "mzx991226_zhixin", "mzx991226", "mzx991226_zhixin");

$sql ="SELECT email, password FROM `users` 
WHERE 
email='$email'";
$res = mysqli_query($link, $sql);

if($res->num_rows==0){

echo "这个用户不存在！";
}else{

echo $email. '<input type="button" value="加好友" class="x4" id="addFriend" onclick="addFriend()">';

}





?>