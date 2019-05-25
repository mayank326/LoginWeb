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
 
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.red-deep_orange.min.css" /> 
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</head>

<body>





<h3>Login Here</h3>
          <div id="contact-form" method="post" action="">
<br>

  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="text" id="user_name">
    <label class="mdl-textfield__label" for="sample3">Email Id</label>
  </div>
  <br>  		
  
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="password" id="user_pass">
    <label class="mdl-textfield__label" for="sample3">Password</label>
  </div>
                	
  <input type="submit" id="loginButton" class="button button1" value="Login In" onclick="login()">
  <!-- MDL Spinner Component -->
<div class="mdl-spinner mdl-js-spinner is-active" id="loginSpinner"></div>
        
		<br><p>New User? <a href="signup.php" style="color: rgb(255,69,0);">SignUp Here</p>
        </div>



		
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="  crossorigin="anonymous"></script>
<script type="text/javascript" src="index.js"></script>



</body>
</html>