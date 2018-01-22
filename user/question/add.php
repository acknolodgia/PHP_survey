<?php
$surveyId = $_GET['surveyId'];
$error = (isset($_GET['error']) && $_GET['error'] != '') ? $_GET['error'] : '';
?>

<form action="process.php?action=add" method="POST">
  Description: <input type="text" name="description"/></br>
  Type: <input type="text" name="type"/></br>
  <input type="hidden" name="surveyId" value="<?=$surveyId;?>"/>

  <input type="submit" value="add"/>
</form>
