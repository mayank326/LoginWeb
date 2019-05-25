  var firebaseConfig = {
    apiKey: "AIzaSyBu7Bk1vjwxmq6uSck3DPBbAAefWAcH95Q",
    authDomain: "loginweb-1205e.firebaseapp.com",
    databaseURL: "https://loginweb-1205e.firebaseio.com",
    projectId: "loginweb-1205e",
    storageBucket: "loginweb-1205e.appspot.com",
    messagingSenderId: "366604298090",
    appId: "1:366604298090:web:f02e9e0ebbb66f98"
  };
  firebase.initializeApp(firebaseConfig);

var dateCreated=0;
var emailId=0;

var url_string = window.location.href;
var url = new URL(url_string);
var userId = url.searchParams.get("id");
if(userId==null){
  window.alert("Please Login First");
  window.location.href = 'index.php';
}

var ref=firebase.database().ref('/Users/' +userId);
    
document.getElementById('edit').style.display = "none";
document.getElementById('loginSpinner').style.display = "block";

  ref.on("value", function(snapshot) {


document.getElementById("name").innerHTML=snapshot.val().userName;
document.getElementById("email").innerHTML=snapshot.val().emailId;
document.getElementById("age").innerHTML=snapshot.val().age;
document.getElementById("gender").innerHTML=snapshot.val().gender;
document.getElementById("country").innerHTML=snapshot.val().country;
document.getElementById("dateCreated").innerHTML=snapshot.val().date;
dateCreated=snapshot.val().date;
emailId=snapshot.val().emailId;

document.getElementById('edit').style.display = "block";
document.getElementById('loginSpinner').style.display = "none";
    
});   
    


function div_show() {
document.getElementById('abc').style.display = "block";
document.getElementById("form-name").defaultValue=document.getElementById("name").innerHTML;
document.getElementById("form-age").defaultValue=document.getElementById("age").innerHTML;
document.getElementById("form-gender").defaultValue=document.getElementById("gender").innerHTML;
document.getElementById("form-country").defaultValue=document.getElementById("country").innerHTML;
}

//Function to Hide Popup
function div_hide(){
document.getElementById('abc').style.display = "none";
document.getElementById("form-name").defaultValue="";
document.getElementById("form-age").defaultValue="";
document.getElementById("form-gender").defaultValue="";
document.getElementById("form-country").defaultValue="";

}


function updateData(){

    

   firebase.database().ref('Users/' + userId).set({

   
   userName:document.getElementById("form-name").value,
   emailId:emailId,
    age:document.getElementById("form-age").value,
    gender:document.getElementById("form-gender").value,
    country:document.getElementById("form-country").value,
    date:dateCreated    

  }, function(error) {
    if (error) {
      // The write failed...
    } else {

/*document.getElementById("name").innerHTML=document.getElementById("name").value;
document.getElementById("email").innerHTML=document.getElementById("email").value;
document.getElementById("age").innerHTML=document.getElementById("age").value;
document.getElementById("gender").innerHTML=document.getElementById("gender").value;
document.getElementById("country").innerHTML=document.getElementById("country").value
*/


document.getElementById('abc').style.display = "none";
window.location.reload();
      // Data saved successfully!
    }
  });

}


function logout(){
  firebase.auth().signOut().then(function() {
    window.location.href = 'index.php';
  // Sign-out successful.
}).catch(function(error) {
  // An error happened.
});

}