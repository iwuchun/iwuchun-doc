<?php 
include'm.php';
$id = $_GET['id'];
$sql = "UPDATE gbook SET name='{$_POST['name']}',sex='{$_POST['sex']}',email='{$_POST['email']}',info='{$_POST['info']}' WHERE id={$id}";
$sql = mysqli_query($conn,$sql)?'成功':'{mysqli_error}';
?>
<p>修改留言成功</p>
<p><a href="show.php">去留言页</a></p>