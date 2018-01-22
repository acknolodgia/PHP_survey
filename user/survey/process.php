<?php

require_once '../../config/database.php';
require_once '../../config/function.php';

$action = $_GET['action'];

switch ($action) {

	case 'add' :
		add();
		break;

	default :
}

function add()
{
	$surveyId = $_POST['surveyId'];
	$taker = $_POST['taker'];

	mysql_query("insert into answered_survey set surveyId='$surveyId',
									taker='$taker'");

	header('Location: ../question/?surveyId='.$surveyId);
}

?>
