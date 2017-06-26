<?php
	$lang = (isset($_GET["lang"]) && $_GET["lang"] == "en") ? "en" : "fr";
	$pro = (isset($_GET["pro"])) ? "_pro" : "";
	require_once("lang/".$lang.".lang.php");

	$urlBASE = "/Unit-opus/";
