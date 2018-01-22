<?php
include('m.php');
$ip=$_SERVER['REMOTE_ADDR'];

$sql = "INSERT INTO 'gbook'('id','name','sex','email','info','ip','time_at')
VALUES(NULL,'$name','$sex','$email','$info','$ip',NOW())";

mysql_select_db($mysql_database,$conn);
$result = mysql_query($sql);
$id = mysql_insert_id();
mysql_close($conn);
?>
<p>留言成功</p>
<p><a href="show.php">去留言页</a></p>
