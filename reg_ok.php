<?php 
include('m.php');
$sql = "INSERT INTO user(id,nickname,password,sex,email,time_at) VALUES (NULL,'{$_POST['nickname']}','{$_POST['password']}','{$_POST['sex']}','{$_POST['email']}',NOW())";
$result = mysqli_query($conn,$sql);
if(!$result){
	die(mysqli_error);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>注册成功</title>
</head>
<body>
<p>注册成功！</p>
<p><a href="login.html">马上登录</a></p>
</body>
</html>
