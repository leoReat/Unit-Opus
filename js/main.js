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

$("#concept #connect .inscription").click(function(e){
	e.preventDefault();
	$("#concept #connect").addClass("actif");
	$("#concept #connect input").focus();
});

function newMail(datas){
	var pro = $("form input[name='pro']").val();
	datas["id"] = (pro == "_pro") ? 8 : 7;
	$.post("assets/newsletter.php", datas).done(function( data ) {
		console.log(data);
		if(data == 2){
			$("#connect").hide();
			$("#thanks").fadeIn();
		}
	});
}

$("#connect form").submit(function(e){
	e.preventDefault();
	var mail = $("#connect form input").val();

	datas = {mailTo:mail, nom:""};
	newMail(datas);
});

$(".button.connect").click(function(e){
	e.preventDefault();
	if(!$(this).closest("#connect").hasClass("actif")) return;
	

	var provider = $(this).hasClass("facebook") ? facebook : google;
	firebase.auth().signInWithPopup(provider).then(function(result) {
		datas = {mailTo:result.user.email, nom:result.user.displayName};
		newMail(datas);
			
	}).catch(function(error) {
		console.log(error)
	});
});

firebase.auth().onAuthStateChanged(function(user) {
	// Si l'utilisateur est déjà connecté, on ne lui propose pas de s'inscrire à la newsletter
	if (user) $("#connect").fadeOut();
});





$("header nav .home, header nav ul.navigation li a, a.scroll, button.scroll, .scroll-top").click(function(e){
	e.preventDefault();
	var strate = $(this).attr("href");
	if(typeof strate == "undefined") strate = "#presentation";

	var navHeight = ($(window).width() < 800) ? 0 : $("header").height();

 	if(strate) $('html, body').animate({scrollTop:$(strate).offset().top - navHeight}, 'slow');
});

$(document).scroll(function(){
	var navHeight = ($(window).width() < 800) ? 0 : $("header").height();
	// var heightStrates = $(window).height() - navHeight - 2;
	// var index = Math.ceil($(window).scrollTop() / heightStrates) - 1;
	// if(index < 0) index = 0;
	// if() index = 2;

	var index = 0;
	var pro = $("form input[name='pro']").val();
	var concept = (pro == "_pro") ? $("#assurance").offset().top : $("#concept").offset().top;
	if($(window).scrollTop() >= (concept - navHeight)){
		index = 1;
		if($(window).width() > 799) $(".scroll-top").fadeIn();
	}	
	else if($(window).width() > 799) $(".scroll-top").fadeOut();

	if($(window).scrollTop() >= ($("#contact").offset().top - navHeight)
		|| ($(window).scrollTop() + $(window).height()) >= $(document).height()) index = 2;

	if($(window).width() > 799){
		var parallax = ($(window).scrollTop() - $("#concept").offset().top) / 7;
		$("#concept img.center").css("margin-top", - parallax )
	}


	$("header nav ul.navigation li").removeClass("active");
	$("header nav ul.navigation li").eq(index).addClass("active");
});



$("#contact form").submit(function(e){
	e.preventDefault();
	// var mail = $("#contact form input[type=mail]").val();
	// var pro = $("#contact form input[type=hidden]").val();

	// datas = {mailTo:mail};
	// if(pro == "pro"){
		datas["message"] = $("#contact form textarea").val();
		datas["nom"] = $("#contact form input[type=text]").val();
	// }

	console.log(datas);

	$.post("lib/mail.php", datas).done(function( data ) {
		if(data){
			// console.log(data)
			// firebase.database().ref('newsletter'+pro+'/' + Date.now()).set({
			// 	mail:mail
			// });
			$("#contact form").hide();
			// $("#thanks").fadeIn().css("display","inline-block");
		}
	});
});

