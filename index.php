<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Page Title</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  
</head>
<body>
  


<div class="login-page">
<div>
<?php
if(isset($_GET['reg'])&&$_GET['reg']==1){

	echo "Your are register";
}
if(isset($_GET['reg'])&&$_GET['reg']==0){

  echo "Your are NOT register ";
}

?>
</div>
  <div class="form">

  <!-- Registration form  -->
    <form class="register-form" method="post" action="register.php">
      <input type="text" name="name" placeholder="name"/>
      <input type="password"  name="password" placeholder="password"/>
      <input type="text"  name="email" placeholder="email address"/>
      <select name="role" class="form-select">
        <option value="Manager">Manager</option>
        <option value="Client">client</option>
      </select>
      <button>create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>

    <!-- end form  -->
    <!-- login form -->
    <form class="login-form" action="login.php" method="post">
      <input type="text"  name="email" placeholder="Email"/>
      <input type="password" name="password" placeholder="password"/>
      <button>login</button>
      <p class="message">Not registered? <a href="#">Create an account</a></p>
    </form>
  </div>
</div>


<script src="js/js.js"></script>
</body>
</html>