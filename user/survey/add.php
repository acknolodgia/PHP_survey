<?php
$surveyId = $_GET['surveyId'];
?>

<form action="process.php?action=add" method="POST">
  Name: <input type="text" class="text" name="taker"/></br>
  <input type="hidden" value="<?=$surveyId;?>" name="surveyId">
  </br>
  <a href="" class="button form_submit" ><span>Submit</span></a>
  <a href="../survey/" class="button"><span>Back</span></a>
</form>
