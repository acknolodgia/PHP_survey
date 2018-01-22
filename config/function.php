<?php

function getSurveyName($sId){
	$query = mysql_query("select * from survey where Id='$sId'");
	$get = mysql_fetch_array($query);

	return $get['title'];
}

function getQuestion($qId){
	$query = mysql_query("select * from question where Id='$qId'");
	$get = mysql_fetch_array($query);

	return $get['description'];
}

?>
