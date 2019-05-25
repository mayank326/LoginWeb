<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8" />
  <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport" />
  <title></title>
  <script src="https://www.gstatic.com/firebasejs/5.0.4/firebase-app.js"></script>  

  <script src="https://www.gstatic.com/firebasejs/5.0.4/firebase-auth.js"></script>
  <script src="https://www.gstatic.com/firebasejs/5.0.4/firebase-database.js"></script>

  <script src="https://cdn.firebase.com/libs/firebaseui/3.4.0/firebaseui.js"></script>
  <link type="text/css" rel="stylesheet" href="https://cdn.firebase.com/libs/firebaseui/3.4.0/firebaseui.css" />
 
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.red-deep_orange.min.css" /> 
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="user.css">
	
<body>

<button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" style="float: right;margin:20px;" onclick="logout();">
  Sign Out <i class="material-icons">account_circle</i>
</button>


<div class="profile">
  <center><h1>User Profile</h1></center>
  <br>
  
    <b>UserName :</b> &nbsp <div id="name" style="display: inline-block;font-size: 20px;"></div>
    <br><br>
    <b>Email Id :</b> &nbsp<div id="email" style="display: inline-block;font-size: 20px;"></div>
    <br><br>
    <b>Age :</b> &nbsp<div id="age" style="display: inline-block;font-size: 20px;"></div>
    <br><br>
    <b>Gender :</b> &nbsp<div id="gender" style="display: inline-block;font-size: 20px;"></div>
    <br><br>
    <b>Country :</b> &nbsp<div id="country" style="display: inline-block;font-size: 20px;"></div>
  <br><br>
  <b>User Created on :</b> &nbsp<div id="dateCreated" style="display: inline-block;font-size: 20px;"></div>
  <br>
   
    <input type="submit" class="button1" id="edit" value="Edit Profile" onclick="div_show()">
    <div class="mdl-spinner mdl-js-spinner is-active" id="loginSpinner"></div>
  
</div>

  
<!-- popup form -->

<div id="abc">
<div id="popupContact">
<!-- Contact Us Form -->

<div  id="form" method="post" name="form">
<h2>Update Your Profile</h2>
<hr>
<input id="form-name" class="form-control" placeholder="Name" type="text">
<br>
<input id="form-age" class="form-control"  placeholder="Age" type="text">
<br>
<input id="form-gender"  class="form-control" placeholder="Gender" type="text">
<br>
<input id="form-country" class="form-control" placeholder="country" type="text">


<input type="submit" class="button1" value="Update" onclick="updateData();">
<input type="submit"   class="button1" value="Cancel" onclick="div_hide();">

</div><!-- form div ends -->

</div>
<!-- Popup Div Ends Here -->
</div>
<!-- Display Popup Button -->

<script type="text/javascript" src="user.js"></script>
</body>
</html>