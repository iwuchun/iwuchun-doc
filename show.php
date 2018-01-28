<?php 
include('m.php');
include ('header.php');
$sql = "SELECT*FROM gbook ORDER BY id DESC";
$result = mysqli_query($conn,$sql);
if (!$result) {
 printf("Error: %s\n", mysqli_error($conn));
 exit();
}
while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
	
	if($row['sex']==1){
		$gender = '男';
	}
	else{
		$gender = '女';
	}
	?>
	<!DOCTYPE html>
<html>
<head>
	<title>MR.留言版</title>
</head>
<body>
<table border="1">
	<tr>
		<td>
			<p><?=$row['time_at']?> <?=$row['ip'] ?></p>
			<p><?=$row['name']?> <?=$gender?> <?=$row['email']?></p>
		</td>
	</tr>
<tr><td>
	<?=$row['info']?>
</td></tr>
<tr><td>
	<a href="change.php?id=<?=$row['id']?>">[修改]</a>  <a href="del.php?id=<?=$row['id']?>">[删除]</a>
</td></tr>
</table>
	<?php 
	}
	mysqli_free_result($result);
	 ?>
</body></html>
