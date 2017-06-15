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

$.getJSON('//freegeoip.net/json/?callback=?', function(infos) {
	var now =  Date.now();
		firebase.database().ref('visiteurs/' + now).set({
		infos
	});
	var ip = infos.ip;

	$("form").submit(function(e){
		e.preventDefault();
		var mail = $("#contact input[type=mail]").val();
		firebase.database().ref('visiteurs/' + now).set({
			infos,
			mail:mail
		});

		$("#contact").fadeOut();
		$("#thanks").fadeIn();
	});
});


$("header nav .home, header nav ul.navigation li a, div.center a.scroll").click(function(e){
	e.preventDefault();
	var strate = $(this).attr("href");
 	if(strate) $('html, body').animate({scrollTop:$(strate).offset().top - 91}, 'slow');
});

$(document).scroll(function(){
	var navHeight = $("header").height()
	var heightStrates = $(window).height() - navHeight - 2;
	var index = Math.ceil($(window).scrollTop() / heightStrates) - 1;
	if(index < 0) index = 0;
	$("header nav ul.navigation li").removeClass("active");
	$("header nav ul.navigation li").eq(index).addClass("active");
});

$("footer p:nth-of-type(2) a, .overlay").click(function(e){
	e.preventDefault();
	$(".modal, .overlay").fadeToggle(300);
	$("body").toggleClass("no-scroll");
});