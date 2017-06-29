<div class="container">
	<h1><img src="<?php echo $urlBASE; ?>images/app/logo-large.png" alt="Logo d'Opus" id="logo" /></h1>
	<form class="" action="" method="POST">
		<input type="email" name="mail" id="mail" value="" class="button" placeholder="Adresse mail">
		<input type="password" name="mdp" id="mdp" value="" class="button" placeholder="Mot de passe">
		<button type="submit" name="button" class="button blue">Se connecter</button>
		<select class="lang">
			<option>Français</option>
			<option>Anglais</option>
			<option>Italien</option>
		</select>
	</form>
</div>

<script>
$("form").submit(function(e){
	e.preventDefault();

	var mail = $("input[type='email']").val();
	var mdp = $("input[type='password']").val();

	var refUsers = firebase.database().ref('users/');
	var results = refUsers.orderByChild("mail").equalTo(mail).once("value", function(snapshot) {
		var exists = (snapshot.val() !== null);
		if(exists){
			for(var id in snapshot.val()){
				var user = snapshot.val()[id];
				$.post("assets/md5.php", { mdp: mdp, confirm:user.mdp, pseudo:user.username, level:1 }).done(function( data ) {
					window.location = "app.php?page=login";
				});
			}
		}
		else{
			console.log("existe pas")
		}
	});
});

</script>
