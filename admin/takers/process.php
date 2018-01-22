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

	default :
}

function add()
{
	$sId = $_POST['sId'];
	$description = $_POST['description'];
	$type = $_POST['type'];

	mysql_query("insert into question set surveyId='$sId',
									description='$description',
									type='$type'");

	header('Location: ../question/?sId='.$sId);
}

function update()
{
	$qId = $_POST['qId'];
	$sId = $_POST['sId'];

	$description = $_POST['description'];
	$type = $_POST['type'];

	mysql_query("update question set description='$description',
								type='$type'
								where Id='$qId'");

	header('Location: ../question/?sId='.$sId);
}

?>
