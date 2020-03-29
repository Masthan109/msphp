<?php include("path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/users.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF_8">
  <meta name="viewport" content="width-devicewidth, initial-scale=1.0">
  <meta http-equi=X-UA-Compatible" content="ie=edge">
  
  <!--font Awesome-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css"  />
  
  <!--Custom Styling-->
  <link rel="stylesheet" href="assets/css/style.css">
  
  <title>Register</title>
  
</head>

<body>
   <?php include(ROOT_PATH . "/app/includes/header.php"); ?>

<div class="auto-content">
 
  <form action="login.php" method="post">
  <h2 class="form-title">Login</h2>
  
  <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>
  
  <div>
     <label>Usename</label>
	 <input type="text" name="username" value="<?php echo $username; ?>" class="text-input">
  </div>
  
  <div>
     <label>Password</label>
	 <input type="password" name="password" value="<?php echo $password; ?>" class="text-input">
  </div>
  
  <div>
   <button type="submit" name="login-btn" class="btn btn-big">Login</button>
  </div>
  
  <p>Or<a href="<?php echo BASE_URL. '/register.php' ?>">Sign up</a></p>
  
  </form>
  
  <!--JQUERY-->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>


<!--Custome Script-->
<script src="assets/js/script.js"></script>
</body>

</html>