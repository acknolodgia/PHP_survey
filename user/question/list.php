<?php
$surveyId = $_GET['surveyId'];
$page = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : 0;
$query = mysql_query("select * from question where surveyId=$surveyId limit 1 offset $page");
$row=mysql_fetch_array($query);

if (mysql_num_rows($query)==0)
{
	header("Location: ?view=success");
}

?>

<form method="POST" action="process.php?action=add">
<input type="hidden" name="page" value="<?=$page;?>">
<input type="hidden" name="surveyId" value="<?=$surveyId;?>">
<input type="hidden" name="questionId" value="<?=$row['Id'];?>">
  <?=$row['description'];?></br>

<?php if($row['type']=="open")
{
?>

<input type="text" class="text" name="answer"/>

<?php
}
else {
	?>

<input name="answer" id="radio" value=1 type="radio" />1<br />
<input name="answer" id="radio" value=2 type="radio" />2<br />
<input name="answer" id="radio" value=3 type="radio" />3<br />
<input name="answer" id="radio" value=4	 type="radio" />4<br />

	<?php
}?>
<br>
<br>

<a href="" class="button form_submit"><span>next</span></a>
</form>
