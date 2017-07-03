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


$(".connect").click(function(e){
	e.preventDefault();
	sessionStorage.setItem("loading", 1);
	var provider = $(this).hasClass("facebook") ? facebook : google;
	firebase.auth().signInWithRedirect(provider);

});

firebase.auth().getRedirectResult().then(function(result) {
	sessionStorage.setItem("loading", 0);
	if (result.credential) {
	  var refUsers = firebase.database().ref('users/');

	  var results = refUsers.orderByChild("mail").equalTo(result.user.email).once("value", function(snapshot) {
		  var exists = (snapshot.val() !== null);
		  if(!exists){
			  sessionStorage.setItem("mail", result.user.email);
			  sessionStorage.setItem("nom", result.user.displayName);
			  sessionStorage.setItem("photo", result.user.photoURL);
			  window.location = "app.php?page=register";
		  }
		  else {
			$.post("assets/md5.php", { mdp: "mdp", confirm:1, pseudo:result.user.username, level:1 }).done(function( data ) {
				window.location = "app.php";
			});
		  }
	  });
	}
});
