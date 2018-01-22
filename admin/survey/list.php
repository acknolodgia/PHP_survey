<?php
$query = mysql_query("select * from survey order by Id");
?>

<h1>Survey</h1>
<a href="?view=add" class="button"><small class="icon plus"></small><span>ADD</span></a></button>
</br></br>
	<table>
		<tr>
			<th>Title</th>
			<th>&nbsp;</th>
			<th>&nbsp;</th>
			<th>&nbsp;</th>
			<th>&nbsp;</th>
		</tr>
	<?php
		while($row=mysql_fetch_array($query)){
	?>
	<tr>
	  <td><?=$row['title'];?></td>
	  <td><a href="../question/?sId=<?=$row['Id'];?>" class="button"><span>view question</span></a></td>
	  <td><a href="../takers/?sId=<?=$row['Id'];?>" class="button"><span>view takers</span></a></td>
		<td><a href="?view=update&id=<?=$row['Id']?>" class="button"><span>UPDATE</span></a></td>
		<td><a href="process.php?action=delete&id=<?=$row['Id']?>" class="button red"><small class="icon cross"></small><span>DELETE</span></a></td>
	</tr>
	<?php
		}
	?>
	</table>
