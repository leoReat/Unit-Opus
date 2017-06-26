<?php
	$lang = (isset($_GET["lang"]) && $_GET["lang"] == "en") ? "en" : "fr";
	$pro = (isset($_GET["pro"])) ? "_pro" : "";
	require_once("lang/".$lang.".lang.php");

<<<<<<< HEAD
	$urlBASE = "/Unit-opus/";
=======
	$urlBASE = "";
>>>>>>> 718714b09b5ab0d3bed8fb027f3a266b3199e28f
