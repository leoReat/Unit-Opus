<?php
ini_set('display_errors',1);

$mailTo = htmlspecialchars($_POST['mailTo']);

require_once('Mailin.php');
$mailin = new Mailin("https://api.sendinblue.com/v2.0","bg8knMtwrWDzP3f6");
$data = array( "email" => $mailTo,
    "attributes" => array("NOM"=> htmlspecialchars($_POST['nom'])),
    "listid" => array(intval($_POST['id'])),
);

$success = $mailin->create_update_user($data);
if($success['code'] == "success"){
	$data = array( "id" => 2,
	  "to" => $mailTo,
	  "replyto" => "contact@get-opus.fr",
	  "headers" => array("Content-Type"=> "text/html;charset=iso-8859-1")
	);

	$successMail = $mailin->send_transactional_template($data);

	if($successMail['code'] == "success") echo 2;
	else echo 1;
}
else echo 0;


