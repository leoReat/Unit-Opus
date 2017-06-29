<?php
	session_start();

	if(isset($_POST['lang'])) $selectedLang = $_POST["lang"];
	elseif(isset($_GET["lang"])) $selectedLang = $_GET["lang"];
	elseif(isset($_SESSION['lang'])) $selectedLang = $_SESSION['lang'];
	else $selectedLang = "fr";

	if($selectedLang == "it") $lang = "it";
	if($selectedLang == "en") $lang = "en";
	else $lang = "fr";

	$_SESSION['lang'] = $lang;

	$pro = (isset($_GET["pro"])) ? "_pro" : "";
	require_once("lang/".$lang.".lang.php");

	$urlBASE = "/";
	$urlAPP = $urlBASE."app.php?page=";
