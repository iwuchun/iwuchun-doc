<?php 
$mysql_server_name='localhost';
$mysql_username='root';
$mysql_password='happy1202';
$mysql_database='msg';
$conn = mysqli_connect($mysql_server_name,$mysql_username,$mysql_password,$mysql_database);
if(!$conn){
	die('数据连接失败');
	mysqli_error( $conn );
}
 ?>

