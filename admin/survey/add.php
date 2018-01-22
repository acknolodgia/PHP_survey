<?php
$error = (isset($_GET['error']) && $_GET['error'] != '') ? $_GET['error'] : '';
?>

<form action="process.php?action=add" method="POST">
  Title: <input type="text" class="text" name="title"/></br></br>
  Creator: <input type="text" class="text" name="creator"/></br></br>

  <a href="" class="button form_submit" ><span>Submit</span></a>
  <a href="../survey/" class="button"><span>Back</span></a>
</form>
</br></br>
