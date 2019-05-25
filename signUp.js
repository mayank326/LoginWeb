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



function signUp(){
  
  var uname=document.getElementById('user-name').value;
  var email=document.getElementById('user-email').value;
  var password=document.getElementById('user-password').value;
  var uage=document.getElementById('user-age').value;
  var ugender=document.getElementById('user-gender').value;
  var ucountry=document.getElementById('user-country').value;

  if(uname!="" && email!="" && password!="" && uage!="" && ugender!="" && ucountry!=""){

  document.getElementById('loginSpinner').style.display = "block";
  document.getElementById('signup').style.display = "none";

  var promise=firebase.auth().createUserWithEmailAndPassword(email, password).catch(function(error) {
  // Handle Errors here.
  var errorCode = error.code;
  var errorMessage = error.message;
  // ...
  window.alert(errorMessage);
});

var today = new Date();
var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
var dateTime = date+' '+time;

promise.then(function () {
    var currentUser = firebase.auth().currentUser;

    firebase.database().ref().child('Users/' + currentUser.uid).set({
        userName:uname,
        emailId:email,
        age:uage,
        gender:ugender,
        country:ucountry,
        date:dateTime
    }).then(function(){
  document.getElementById('loginSpinner').style.display = "none";
  document.getElementById('signup').style.display = "block";

    window.alert("User Created Successfully!!");
    window.location = 'index.php';
});
      
});    

    
}

else{
  window.alert("Please Fill all the fields");
}


}//signup function

