// Initialize Firebase
var config = {
	apiKey: "AIzaSyAeZ7vDVXfL0vtZFi2-esLuIwsVyDoIC1c",
	authDomain: "unit-60c0b.firebaseapp.com",
	databaseURL: "https://unit-60c0b.firebaseio.com",
	projectId: "unit-60c0b",
	storageBucket: "unit-60c0b.appspot.com",
	messagingSenderId: "1051655555307"
};
firebase.initializeApp(config);


var google = new firebase.auth.GoogleAuthProvider();
var facebook = new firebase.auth.FacebookAuthProvider();
var refUsers = firebase.database().ref('users/');

var mail = $("body").data("id");
var $datasUser = "", $userId = "";
$(document).ready(function(){
	refUsers.orderByChild("mail").equalTo(mail).limitToFirst(1).on("value", function(snapshot) {
		for(var id in snapshot.val()){
			$userId = id;
			$datasUser = snapshot.val()[id];
			launchProductList();
			launchCheckout();
			launchOpus();

			if(typeof($datasUser.checkout) != "undefined"){
				var nbCheckout = Object.keys($datasUser.checkout).length;
				if(nbCheckout > 0) $("#nb-product").html(nbCheckout);
			}
		}
	});
});


function launchOpus(){
	if($("#opus").length){
		var id = $("#opus").data("id");
		firebase.database().ref('opus/'+id).once("value", function(snapshot) {
			var opus = snapshot.val();
			$("#opus").append("<img src='"+opus.image+"' alt='Image de l'oeuvre/>");
			$("#opus").append("<h1>"+opus.titre+"</h1>");
			$("#opus").append("<p>"+opus.description+"</p>");
			$("#opus").append("<a href='?page=achats&id="+id+"' id='link-products'>Produits associés</a>");

			$("#link-products").click(function(e){
	            e.preventDefault();
	            changePage(5);
	        });
		});
	}
}

function launchProductList(){
	if($("#product-slide").length && !$("#product-slide .swiper-slide").length){
		if(typeof($datasUser.opus) == "undefined") return ;

		var oeuvres = Object.values($datasUser.opus);
		if($("#product-slide").data("id")) 	oeuvres = [$("#product-slide").data("id")];


		firebase.database().ref('products/').once("value", function(snapshot) {
			for(var id in snapshot.val()){
				var product = snapshot.val()[id];

				if(oeuvres.indexOf(product.oeuvre) != -1)$("#product-slide .swiper-wrapper").append('<div class="swiper-slide" data-id="'+id+'"><img src="'+product.image+'" /><div class="buy"><p>'+product.titre+'</p><p>€ '+product.prix+',00</p> <img src="/images/app/add-now.png" title="Voir mon panier" id="buy-now"/></div></div>');
			}

			var mySwiper = new Swiper('#product-slide', {
				speed: 400,
				slidesPerView:"auto",
				spaceBetween:25,
				freeMode:true
			});

			$(".apploader").fadeOut(800);

			if(mySwiper.slides.length == 0) $("#product-slide").html('<p>Aucun article pour le moment. <a href="?page=QRcode">Scannez une oeuvre</a></p>')

			var cancel;
			$(".app .container .swiper-slide div.buy").click(function(){
				var idProduct = $(this).closest(".swiper-slide").data("id");
				firebase.database().ref('users/' + $userId+"/checkout").push(idProduct);


				clearTimeout(cancel);
				$("#nb-product").show();
				$("#nb-product").removeClass("animate");
				$("#nb-product").addClass("animate");
				cancel = setTimeout(function(){
					$("#nb-product").removeClass("animate");
				}, 300)
			});
		});
	}
}


function launchCheckout(){
	if($("#checkout").length){
		$("#checkout").html("");
		if(typeof($datasUser.checkout) == "undefined"){
			$("#checkout").append('<p>Aucun article pour le moment. <a href="?page=achats">Consultez les produits proposés</a></p>');
			$("#nb-product").hide();
			return;
		}


		var products = Object.values($datasUser.checkout);
		var productKeys = Object.keys($datasUser.checkout);

		function countElem(array, search){
			return nbOcc = $.grep(array, function(elem) {
			  return elem == search;
		  }).length;
		}


		firebase.database().ref('products/').once("value", function(snapshot) {
			var i = 0;
			var total = 0;
			for(var id in snapshot.val()){
				var product = snapshot.val()[id];
				var nbProduct = countElem(products, id);
				if(products.indexOf(id) != -1) {
					$("#checkout").append('<div class="product" data-id="'+productKeys[i]+'"><img src="'+product.image+'" /><div class="buy"><p>'+product.titre+' x '+nbProduct+'</p><p>€ '+product.prix+',00</p></div></div>');
					total+=(product.prix * nbProduct);
				}
				i++;
			};

			$("#checkout").append("<p>Total "+total+",00€</p> <a class='button blue' href='?page=command'>Commander</a>");

			$(".apploader").fadeOut(800);

			$(".product").click(function(){
				var id = $(this).data("id");
				firebase.database().ref('users/'+$userId+"/checkout"+"/"+id).remove();
			});
		});

	}

}


$(".connect").click(function(e){
	e.preventDefault();
	sessionStorage.setItem("loading", 1);
	var provider = $(this).hasClass("facebook") ? facebook : google;
	firebase.auth().signInWithRedirect(provider);

});

firebase.auth().getRedirectResult().then(function(result) {
	sessionStorage.setItem("loading", 0);
	if (result.credential) {
	  refUsers.orderByChild("mail").equalTo(result.user.email).limitToFirst(1).once("value", function(snapshot) {
		  var exists = (snapshot.val() !== null);
		  console.log(snapshot.val())
		  if(!exists){
			  sessionStorage.setItem("mail", result.user.email);
			  sessionStorage.setItem("nom", result.user.displayName);
			  sessionStorage.setItem("photo", result.user.photoURL);
			  window.location = "app.php?page=register";
		  }
		  else {
			  for(var id in snapshot.val()){
				  var user = snapshot.val()[id].username;
				  var tel = snapshot.val()[id].tel;
				  var lvl = snapshot.val()[id].auth;
				   $.post("assets/md5.php",
				   { mdp: "mdp", confirm:1, pseudo:user, level:lvl, mail:result.user.email, tel:tel })
				   .done(function( data ) {
		  				window.location = "app.php";
					});
			  }
		  }
	  });
	}
});



$("form.form-register").submit(function(e){
	e.preventDefault();
	var compte = $(this).hasClass("compte");

	var error = 0;
	var username = $("input[type='text']").val();
	var mail = $("input[type='email']").val();
	var mdp = $("input[type='password']").val();
	var tel = $("input[type='tel']").val();
	var photo = $("#logo").attr("src");

	$("#mail-already").hide();
	$(".pform").removeClass("error");

	var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
	if(!emailReg.test(mail) || mail.length < 5){
		$("p.form-mail").addClass("error");
		 error++
	}
	if(username.length < 3 || username.length > 25){
		$("p.form-name").addClass("error");
		error++;
	}

	if(mdp.length < 3 || mdp.length > 25){
		$("p.form-mdp").addClass("error");
		error++;
	}

	if(tel.length < 10 || tel.length > 12){
		$("p.form-tel").addClass("error");
		error++;
	}
	if(error == 0){
		refUsers.orderByChild("mail").equalTo(mail).limitToFirst(1).once("value", function(snapshot) {
			var exists = (snapshot.val() !== null);
			var parameters = { mdp: mdp, confirm:1, pseudo:username, level:1, tel:tel, mail:mail };

			if(!exists){
				console.log("exist pas")
				$(".home .container").fadeOut();
				$.post("assets/md5.php", parameters).done(function( data ) {
					console.log(parameters);
					var datas = {auth:1, username: username, mail: mail, mdp : data, photo : photo, tel : tel, opus:[0]};
					refUsers.push(datas).key;
				});
				window.location = "app.php";
			}
			else{
				console.log("exist")
				// Update de compte
				if(compte){
					for(var id in snapshot.val()){
						$.post("assets/md5.php", parameters).done(function( data ) {
							var datas = {username: username, mail: mail, mdp : data, photo : $datasUser.photo, tel : tel, opus:$datasUser.opus, auth:$datasUser.auth};
							firebase.database().ref('users/' + id).set(datas);
						});
					}
				}
				else $("#mail-already").show();
			}
		});
	}
});







$(".form-login").submit(function(e){
	e.preventDefault();

	var mail = $("input[type='email']").val();
	var mdp = $("input[type='password']").val();
	refUsers.orderByChild("mail").equalTo(mail).limitToFirst(1).once("value", function(snapshot) {
		var exists = (snapshot.val() !== null);
		if(exists){
			for(var id in snapshot.val()){
				var user = snapshot.val()[id];
				$.post("assets/md5.php",
				{ mdp: mdp, confirm:user.mdp, pseudo:user.username, tel:user.tel, level:user.auth, mail:mail })
				.done(function( data ) {
					window.location = "app.php?page=login";
				});
			}
		}
		else{
			console.log("existe pas")
		}
	});
});
