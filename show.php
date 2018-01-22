<?php 
include('m.php');
$sql = "SELECT*FROM gbook ORDER BY 'id' DESC";
$mysql_select_db($mysql_database,$conn);
$result = mysql_query($sql);

while ($row=mysql_fetch_row($result)) {
	# code...
	if($row[2]==1){
		$gender = '男';
	}
	else{
		$gender = '女';
	}
	?>
<table border="1">
	<tr>
		<td>
			<p><?=$time_at?> <?=$ip ?></p>
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
	mysql_free_result($result);
	 ?>

