<?php 
include('m.php');
$sql = "SELECT nickname,password FROM user WHERE nickname='{$_POST['nickname']}'";
$result = mysqli_query($conn,$sql);
if(!$result){
	die(mysqli_error);
}
$row=mysqli_query($conn,$sql);
if(!$row){
	die(mysqli_error);
}
$row=mysqli_fetch_array($row,MYSQLI_ASSOC);
session_start();  
if($_POST['password']!=$row['password']){
	$msg="密码错误！";
}else{
	$msg="登录成功！";
}
if($_POST['verification']!=$_SESSION['rand']){
	echo "验证码错误！";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title><?=$msg?></title>
</head>
<body>
<p><?=$msg?></p>
<p><a href="index.html">回到首页</a></p>
</body>
</html>
