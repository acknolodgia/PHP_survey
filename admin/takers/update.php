<?php
$qId = $_GET['qId'];
$query = mysql_query("select * from question where Id = $qId");
$row=mysql_fetch_array($query);
?>

<form action="process.php?action=update" method="POST">
  <input type="hidden" name="sId" value="<?=$row['surveyId'];?>"/>
  <input type="hidden" name="qId" value="<?=$qId;?>"/>
  Description: <input type="text" class="text" name="description" value="<?=$row['description']?>"/></br></br>
  Type: <input type="text" class="text" name="type" value="<?=$row['type']?>"/></br></br>

  <a href="" class="button form_submit"><span>UPDATE</span></a>
</form>
</br>
