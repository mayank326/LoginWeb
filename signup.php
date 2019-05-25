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
    
<link rel="stylesheet" type="text/css" href="signup.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.red-deep_orange.min.css" /> 
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script> 
</head>

<body>



          <div id="contact-form" method="post" action="">
          <center><h3>Sign Up Here</h3></center>
          <center><img src="usericon.png" style="height: 80px;"></center>      
<br>

    		<input type="text" id="user-name" class="form-control" placeholder="UserName*" required>
        <br>
        <input type="email" id="user-email" class="form-control" placeholder="Email Id*" required>
          		<br>  
			<input type="password" id="user-password" class="form-control" placeholder="Your Password*" required>
          		<br>
      <input type="text" id="user-age" class="form-control" placeholder="Your Age*" required>
              <br>
      
        <input type="text" id="user-gender" class="form-control" placeholder="Your Gender*" required>
              <br>  
      <input type="text" id="user-country" class="form-control" placeholder="Your Country*" required>
              
                	
          	<input type="submit" id="signup" class="button button1" value="Create Profile" onclick="signUp();">
          <div class="mdl-spinner mdl-js-spinner is-active" id="loginSpinner" style="display: none;margin-top: 20px;"></div>

		
        </div>

<script type="text/javascript" src=signUp.js></script>

</body>
</html>


