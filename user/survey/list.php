<?php
$query = mysql_query("select * from survey order by Id");
?>

<h1>Survey</h1>
</br>
<table>
	<tr>
		<th>Title</th>
		<th>&nbsp;</th>
	</tr>
	<?php
		while($row=mysql_fetch_array($query)){
	?>
	<tr>
		<td><?=$row['title'];?></td>
		<td><a href="?surveyId=<?=$row['Id'];?>&view=add" class="button"><span>take survey</span></a></td>
	</tr>
	<?php
		}
	?>
</table>
