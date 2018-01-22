<?php
$sId = $_GET['sId'];
?>

<form action="process.php?action=add" method="POST">
  Description: <input type="text" class="text" name="description"/></br></br>
  Type: <input type="text" class="text" name="type"/></br></br>
  <input type="hidden" name="sId" value="<?=$sId;?>"/>

  <a href="" class="button form_submit"><span>Submit</span></a>
  <a href="../survey/" class="button"><span>Back</span></a>
</form>
</br></br>
