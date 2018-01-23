<?php 
include'm.php';
$id = $_GET['id'];
$sql = "DELETE FROM gbook WHERE id={$id}";
$sql = mysqli_query($conn,$sql)?'成功':'{mysqli_error}';
?>
<p>删除留言成功</p>
<p><a href="show.php">去留言页</a></p>