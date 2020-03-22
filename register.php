<?php include("path.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF_8">
  <meta name="viewport" content="width-devicewidth, initial-scale=1.0">
  <meta http-equi=X-UA-Compatible" content="ie=edge">
  
  <!--font Awesome-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css"  />
  
  <!--Custom Styling-->
  <link rel="stylesheet" href="/HTML BLOG/style.css">
  
  <title>Register</title>
  
</head>

<body>
  <?php include(ROOT_PATH . "/app/includes/header.php");?>
  

<div class="auto-content">
 
  <form action="register.php" method="post">
  <h2 class="form-title">Register</h2>
  
  <!--div class="msg error">
   <li>Username required</li>
  </div-->
  
  <div>
     <label>Usename</label>
	 <input type="text" name="username" class="text-input">
  </div>
  
  <div>
     <label>Email</label>
	 <input type="email" name="email" class="text-input">
  </div>
  
  <div>
     <label>Password</label>
	 <input type="password" name="password" class="text-input">
  </div>
  
  <div>
     <label>Password Confirmation</label>
	 <input type="password" name="passwordConf" class="text-input">
  </div>
  
  <div>
   <button type="submit" name="register-btn" class="btn btn-big">Register</button>
  </div>
  
  <p>Or<a href="<?php echo BASE_URL. '/login.php' ?>">Sign In</a></p>
  
  </form>
  
</div>
 <!--JQUERY-->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>


<!--Custome Script-->
<script src="assets/js/scripts.js"></script>
</body>

</html>