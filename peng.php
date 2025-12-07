<?php
session_start();

$email = $_SESSION["email"];


$link = mysqli_connect("mysql3101.db.sakura.ne.jp", "mzx991226_zhixin", "mzx991226", "mzx991226_zhixin");

// 搜索好友邮件地址
$sql1 ="SELECT `to` FROM `friend` 
WHERE 
`from`='$email'";
$sql2 ="SELECT `from` FROM `friend` 
WHERE 
`to`='$email'";

// 执行sql1，来寻找自己好友的邮件地址
$data = [];
$res1 = mysqli_query($link, $sql1);
// 找到多少件就循环多少次，把邮件地址全部放进data数组里
while($row1 = mysqli_fetch_assoc($res1)){
	$data[] = $row1["to"];
}
// 执行sql2，来寻找对方加上的好友的邮件地址（自己）
$res2 = mysqli_query($link, $sql2);
// 找到多少件就循环多少次，把邮件地址全部放进data数组里
while($row2 = mysqli_fetch_assoc($res2)){
	$data[] = $row2["from"];
}
// 为了看到自己的朋友圈内容，加上自己的邮件地址
$data[] = $email;

$newdata = [];
$time = [];
$sender = [];
for ($i=0; $i < count($data); $i++) { 
	$sqlpeng ="SELECT `content`,`time`,`from` FROM `moments` WHERE `from`='$data[$i]'";

	$respeng = mysqli_query($link, $sqlpeng);
	while($rowpeng = mysqli_fetch_assoc($respeng)){
		$newdata[] = $rowpeng["content"];
		$time[] = $rowpeng["time"];
		$sender[] = $rowpeng["from"];

	}
}


$html = '';
for ($i=0; $i < count($newdata); $i++) { 
	$html = $html . $sender[$i] ." -- ". $time[$i] ." -- ". $newdata[$i]."</a><br>";
}

echo $html;


?>