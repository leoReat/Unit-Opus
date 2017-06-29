<img src="<?php echo $urlBASE; ?>images/app/logo-large.png" alt="Logo d'Opus" class="loader logo" />

<div class="container">
	<h1><img src="<?php echo $urlBASE; ?>images/app/logo-large.png" alt="Logo d'Opus" id="logo" /></h1>
	<h2>Se connecter avec</h2>
	<a href="#concept" class="facebook connect"><img src="<?php echo $urlBASE; ?>images/app/facebook.png" alt="Connexion à Opus avec Facebook" /></a>
	<a href="#concept" class="google connect"><img src="<?php echo $urlBASE; ?>images/app/google.png" alt="Connexion à Opus avec Google" /></a>
	<p class="separation">ou</p>

	<a href="<?php echo $urlAPP; ?>login" class="button blue">Je suis déjà membre - Se connecter</a>
	<a href="<?php echo $urlAPP; ?>register" class="button filet">Créer un compte</a>

	<select class="lang">
		<option>Français</option>
		<option>Anglais</option>
		<option>Italien</option>
	</select>
</div>

<div class="bottom">
	<p>En vous inscrivant, vous acceptez <a href="#">les conditions d’utilisation</a></p>
</div>
<div class="bottom loader">
	<h2>Chargement<span><b>.</b><b>.</b><b>.</b></span></h2>
</div>
<script type="text/javascript">
	$(document).ready(function(){

		function endLoading(){
			if(sessionStorage.getItem("loading") == 1) return;
			$("body").removeClass("loading");
			$(".loader").fadeOut(500);
		}
		var code = sessionStorage.getItem("lang");
		if(code){
			console.log("Bienvenue en "+code)
			endLoading();
		}
		else{
			$.get( "http://ip-api.com/json", function(data) {
			  	code = data.countryCode.toLowerCase();
				endLoading();
			}).fail(function() {
				code = "fr";
				endLoading();
		  	}).always(function() {
				endLoading();
				sessionStorage.setItem("lang", code);
		  	});
		}


		// Sécurité en cas de problème avec l'API
		setTimeout(function(){
			endLoading("fr");
		}, 3000);
	});
</script>
