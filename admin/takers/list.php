<?php
$sId = $_GET['sId'];
$query = mysql_query("select * from answered_survey where surveyId=$sId order by Id");
?>

<h1><?=getSurveyName($sId);?></h1>
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
		<td><?=$row['taker'];?></td>
		<td><a href="?view=answer&sId=<?=$row['Id']?>" class="button"><span>View answers</span></a></td>
		<td><a href="process.php?action=delete&qId=<?=$row['Id']?>" class="button red"><small class="icon cross"></small><span>DELETE</span></a></td>
	</tr>
	<?php
		}
	?>
</table>
