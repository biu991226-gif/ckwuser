<?php
session_start();


$from = $_SESSION["email"];
$to = $_POST["to"];



$link = mysqli_connect("mysql3101.db.sakura.ne.jp", "mzx991226_zhixin", "mzx991226", "mzx991226_zhixin");

$sql ="INSERT INTO `friend`(`from`, `to`, `status`) VALUES ('$from','$to', 0)";

$res = mysqli_query($link, $sql);


echo "加好友成功";
echo "<a href='frends.html'>好友一栏</a>";



?>