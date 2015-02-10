<?php

if(!$_SESSION){
    session_start();
 }

require $_SERVER['DOCUMENT_ROOT'].'/coursePractice/scripturesActivity/model.php';

if ($_POST['action'] == "Search" && !empty($_POST['search'])){
	$searchVariable = $_POST['search'];
	$scriptures = getSpecificScriptures($searchVariable);

	$output = "<h1>Scripture Resources</h1>";

	foreach ($scriptures as $value) {
		$output .= "<b>$value[1] $value[2]:$value[3]</b> - \"$value[4]\" <br /><br />";
	}

	include "view.php";
	exit;
}

if ($_GET['action'] == 'input'){
	$_SESSION['topics'] = getTopics();

	// echo $_SESSION['topics'][0][1];
	// exit;

	header('Location: ../input.php');
	exit;
}

if ($_POST['action'] == "Submit Your Scripture"){
	$book = $_POST['book'];
	$chapter = $_POST['chapter'];
	$verse = $_POST['verse'];
	$content = $_POST['content'];
	$topics = $_POST['topics'];

	$resultScripture = insertScripture($book, $chapter, $verse, $content);

	if ($resultScripture){
		foreach ($topics as $value) {
			$resultST = insertScriptureTopic($resultScripture, $value[0]);
			if (!$resultST) {
				echo "there was an error inserting ST";
				exit;
			}
		}
	}

	header('Location: index.php/?action=search');
	exit;
}

// else {
// 	$scriptures = getScriptures();

// 	$output = "<h1>Scripture Resources</h1>";

// 	foreach ($scriptures as $value) {
// 		$output .= "<b>$value[1] $value[2]:$value[3]</b> - \"$value[4]\" <br /><br />";
// 	}

// 	include "view.php";
// 	exit;
// }

else {
	$scriptures = getScriptures();

	$output = "<h1>Scripture Resources</h1>";

	$scriptureId = "";
	foreach ($scriptures as $value) {
		$topics = "";
		if ($scriptureId == $value[0]){
			$topics .= ", $value[5]";
			$output .= "$topics";
		}
		else{
			$topics .= $value[5];
			$output .= "<br /><br /><b>$value[1] $value[2]:$value[3]</b> - \"$value[4]\" <br /><b>Topics: </b>$topics";
			$scriptureId = $value[0];
		}
	}

	include "view.php";
	exit;
}
