<?php 
include'm.php';
$id = $_GET['id'];
$sql = "SELECT name,sex,email,info FROM gbook WHERE id='$id'";
$result = mysqli_query($conn,$sql);
if(!$result){
	echo mysqli_error($conn);
}
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
 ?>
 <!DOCTYPE html>
<html>
<head>
	<title>MR.留言版</title>
</head>
<body>
<form name='msg' method="post" action='change_insert.php?id=<?=$id?>'>
<p>你的姓名：<input type="text" name="name" size="20" value="<?=$row['name']?>"></p>

<p>你的性别：<input type="radio" name="sex"  <?=$row['sex']?'checked':''?>  value="1">男 <input type="radio" name="sex" value="0" <?=$row['sex']?'':'checked' ?>>女</p>
<p>你的邮箱：<input type="text" name="email" size="20" value="<?=$row['email']?>"></p>
<p>你的留言：</p>
<p><textarea name="info" rows="9" cols="35"><?=$row['info']?></textarea></p>
<p><input type="submit" name="submit" value="提交"> <input type="reset" name="submit2" value="重设"></p>
</form>
</body>
</html>