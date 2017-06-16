<?php

if(isset($_POST['mailTo']) && !empty($_POST['mailTo'])){
	
	require_once 'swift_required.php';

	$user = htmlspecialchars($_POST['mailTo']);

	$body = "<html>
		<head></head>
		<body>
			<h1>Bonjour, </h1>
			<p>Vous êtes désormais abonné à notre newsletter. Toute l'équipe d'OPUS vous remercie pour la confiance que vous nous accordez. Vous recevrez des nouvelles très prochainement !</p>

			<h2>Cordialement, <br/> OPUS</h2>
			<script>alert('hello');</script>
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
