<?php

if(isset($_POST['mailTo']) && !empty($_POST['mailTo'])){
	
	require_once 'swift_required.php';

	$user = htmlspecialchars($_POST['mailTo']);
	$text = "<h1>Bonjour, </h1>
			<p>Vous êtes désormais abonné à notre newsletter. Toute l'équipe d'OPUS vous remercie pour la confiance que vous nous accordez. Vous recevrez des nouvelles très prochainement !</p>

			<h2>Cordialement, <br/> OPUS</h2>";

	if(isset($_POST['message'])){
		$user = "unit.iesa@gmail.com";
		$text = "Bonjour l'équipe UNIT, vous avez reçu un mail de \"".$_POST['nom']."\" (".$_POST['mailTo'].") depuis le site web get-opus. <br/> Ci-dessous, le message de l'utilisateur : <br /> <br />".htmlspecialchars($_POST['message']);
	}

	$body = "<html>
		<head></head>
		<body>
			".$text."
		</body>
	</html>";

	$transport = Swift_MailTransport::newInstance();

	$message = Swift_Message::newInstance();

	$message->setTo($user);
	$message->setSubject("Newsletter OPUS");
	$message->setBody($body, 'text/html');
	$message->setFrom("unit.iesa@gmail.com", "Opus");

	// Send the email
	$mailer = Swift_Mailer::newInstance($transport);
	echo $mailer->send($message);
}
