<?php
$sId = $_GET['sId'];
$query = mysql_query("select * from question where surveyId=$sId order by Id");
?>

<h1><?=getSurveyName($sId);?></h1>
<a href="?view=add&sId=<?=$sId;?>" class="button"><small class="icon plus"></small><span>ADD</span></a>
<a href="../survey/" class="button"><span>BACK</span></a>
</br></br>
<table>
	<tr>
		<th>Questions</th>
		<th>&nbsp;</th>
		<th>&nbsp;</th>
	</tr>
	<?php
		while($row=mysql_fetch_array($query)){
	?>
	<tr>
		<td><?=$row['description'];?></td>
		<td><a href="?view=update&qId=<?=$row['Id']?>" class="button"><span>UPDATE</span></a></td>
		<td><a href="process.php?action=delete&qId=<?=$row['Id']?>" class="button red"><small class="icon cross"></small><span>DELETE</span></a></td>
	</tr>
	<?php
		}
	?>
</table>
