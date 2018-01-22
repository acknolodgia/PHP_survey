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
	$page = $_POST['page'];
	$surveyId = $_POST['surveyId'];
	$questionId = $_POST['questionId'];
	$answer = $_POST['answer'];

	$query = mysql_query("select * from answered_survey order by Id desc limit 1");
	$get = mysql_fetch_array($query);
	$answeredSurveryId = $get['Id'];

	mysql_query("insert into answered_question set answeredSurveyId='$answeredSurveryId',
										questionId='$questionId',
										answer='$answer'");

	$nextpage = $page + 1;

	header('Location: ../question/?surveyId='.$surveyId.'&page='.$nextpage);
}

?>
