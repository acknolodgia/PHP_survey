<?php
$surveyId = $_GET['sId'];
$query = mysql_query("select * from answered_question where answeredSurveyId=$surveyId");
$row=mysql_fetch_array($query);

?>

<?php
	while($row=mysql_fetch_array($query)){
?>
  <?=getQuestion($row['questionId']);?></br>
	<?=$row['answer'];?></br>

<?php } ?>
<br>
<br>

</form>
