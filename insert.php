<?php
include('m.php');
function getIp(){
if(!empty($_SERVER['HTTP_CLIENT_IP'])){
   return $_SERVER['HTTP_CLIENT_IP']; 
}elseif(!empty($_SERVER['HTTP_X_FORVARDED_FOR'])){
   return $_SERVER['HTTP_X_FORVARDED_FOR'];
}elseif(!empty($_SERVER['REMOTE_ADDR'])){
   return $_SERVER['REMOTE_ADDR'];
}else{
   return "未知IP";
}}
$user_IP = getIp();

$sql = "INSERT INTO gbook(id,name,sex,email,info,ip,time_at) VALUES(NULL,'{$_POST['name']}','{$_POST['sex']}','{$_POST['email']}','{$_POST['info']}','{$user_IP}',Now())";

$result = mysqli_query($conn,$sql);
if (!$result) {
 printf("Error: %s\n", mysqli_error($conn));
 exit();
}
$id = mysqli_insert_id($conn);
mysqli_close($conn);
if(!$conn){
	die('数据连接失败');
}
echo "{$_POST['name']},{$_POST['sex']},{$_POST['email']},{$_POST['info']},$user_IP";
?>
<p>留言成功</p>
<p><a href="show.php">去留言页</a></p>