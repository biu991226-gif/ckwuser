<?php
session_start();


$from = $_SESSION["email"];
$time = date('Y-m-d H:i:s');
$content = $_POST["content"];



$link = mysqli_connect("mysql3101.db.sakura.ne.jp", "mzx991226_zhixin", "mzx991226", "mzx991226_zhixin");

$sql ="INSERT INTO `moments`(`from`,`time`,`content`) VALUES ('$from','$time','$content')";

$res = mysqli_query($link, $sql);


echo "发布成功"."<a href='peng.html'>朋友圈一栏</a>";



?>