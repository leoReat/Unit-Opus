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
});


$("header nav .home, header nav ul.navigation li a, a.scroll, .scroll-top").click(function(e){
	e.preventDefault();
	var strate = $(this).attr("href");

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
	if($(window).scrollTop() >= ($("#concept").offset().top - navHeight)){
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
	// e.preventDefault();
	// var mail = $("#contact form input[type=mail]").val();
	// var pro = $("#contact form input[type=hidden]").val();

	// datas = {mailTo:mail};
	// if(pro == "pro"){
	// 	datas["message"] = $("#contact form textarea").val();
	// 	datas["nom"] = $("#contact form input[type=text]").val();
	// }

	// console.log(datas);

	// $.post("lib/mail.php", datas).done(function( data ) {
	// 	if(data){
	// 		console.log(data)
	// 		firebase.database().ref('newsletter'+pro+'/' + Date.now()).set({
	// 			mail:mail
	// 		});
	// 		$("#contact form").hide();
	// 		$("#thanks").fadeIn().css("display","inline-block");;
	// 	}
	// });
});