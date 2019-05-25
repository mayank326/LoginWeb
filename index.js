  var firebaseConfig = {
    apiKey: "AIzaSyBu7Bk1vjwxmq6uSck3DPBbAAefWAcH95Q",
    authDomain: "loginweb-1205e.firebaseapp.com",
    databaseURL: "https://loginweb-1205e.firebaseio.com",
    projectId: "loginweb-1205e",
    storageBucket: "loginweb-1205e.appspot.com",
    messagingSenderId: "366604298090",
    appId: "1:366604298090:web:f02e9e0ebbb66f98"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);

firebase.auth().onAuthStateChanged(function(user) {
  if (user) {
  
        $("#loginButton").hide();
     $("#loginSpinner").show();   
   	
	var userId = firebase.auth().currentUser.uid;
	window.location.href = 'user.php?id='+userId;
	} else {

  }
});





function login(){

    var email_user=document.getElementById('user_name').value;
  var pass_user=document.getElementById('user_pass').value;

    if(email_user!="" && pass_user!=""){

     $("#loginButton").hide();
     $("#loginSpinner").show();   

  firebase.auth().signInWithEmailAndPassword(email_user, pass_user).catch(function(error) {
    var errorCode = error.code;
  var errorMessage = error.message;
  
     $("#loginButton").show();
     $("#loginSpinner").hide();
  window.alert(errorMessage);
   

  // ...
});

}
else{
  window.alert("Please fill all the fields");
}

}