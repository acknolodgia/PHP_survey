<?php

require_once '../../config/database.php';
require_once '../../config/function.php';

$action = $_GET['action'];

switch ($action) {

	case 'add' :
		add();
		break;

	case 'update' :
		update();
		break;

	case 'delete' :
		delete();
		break;

	default :
}

function add()
{
	$title = $_POST['title'];
	$creator = $_POST['creator'];

	mysql_query("insert into survey set title='$title',
									creator='$creator'");

	header('Location: ../survey/');
}

function update()
{
	$id = $_GET['id'];

	$title = $_POST['title'];
	$creator = $_POST['creator'];
	$time = $_POST['time'];

	mysql_query("update survey set title='$title',
								creator='$creator'
								where Id='$id'");

	header('Location: ../survey/');
}

function delete()
{
	$id = $_GET['id'];

	mysql_query("delete from survey where Id = '".$id."'");

	header('Location: ../survey/');
}

?>
