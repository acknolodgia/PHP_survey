<?php
$id = (isset($_GET['id']) && $_GET['id'] != '') ? $_GET['id'] : '';
$query = mysql_query("select * from survey where Id = $id");
$row=mysql_fetch_array($query);
?>

<form action="process.php?action=update&id=<?=$id?>" method="POST">
  Title: <input type="text" name="title" value="<?=$row['title']?>"/></br>
  Creator: <input type="text" name="creator" value="<?=$row['creator']?>"/></br>

  <input type="submit" value="update"/>
</form>
