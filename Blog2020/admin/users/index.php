<?php include("../../path.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF_8">
  <meta name="viewport" content="width-devicewidth, initial-scale=1.0">
  <meta http-equi=X-UA-Compatible" content="ie=edge">
  
  <!--font Awesome-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css"  />
  
  <!--Custom Styling-->
<link rel="stylesheet" href="../../assets/css/style.css">

 <!--Admin Styling-->
 <link rel="stylesheet" href="../../assets/css/admin.css">
  <title>Admin Section - Manage Users</title>
  
</head>

<body>
  
  <?php include(ROOT_PATH . "/app/includes/adminheader.php"); ?>
  
  
	    <!--Admin Page wrapper-->
		<div class="admin-wrapper">
		
		    
	<?php include(ROOT_PATH . "/app/includes/adminsidebar.php"); ?>

			
			<!--Admin Content-->
			<div class="admin-content">
			    <div class="button-group">
				   <a href="create.php" class="btn btn-big">Add User</a>
				   <a href="index.php" class="btn btn-big">Manage Users</a>
				</div>
				
				<div class="content">
				  
				  <h2 class="page-title">Manage Users</h2>
				  
				  <table>
				      <thead>
					     <th>SN</th>
						 <th>Username</th>
						 <th>Role</th>
						 <th colspan="2">Action</th>
					  </thead>
					  <tbody>
					     <tr>
						   <td>1</td>
						   <td>Awa</td>
						   <td>Admin</td>
						   <td><a href="#" class="edit">edit</td>
						   <td><a href="#" class="delete">delete</td>
						   </tr>
						 
						 <tr>
						    <td>2</td>
							<td>MSN</td>
							<td>Author</td>
						   <td><a href="#" class="edit">edit</td>
						   <td><a href="#" class="delete">delete</td>
						   
						 </tr>
					  </tbody>
				  </table>
				</div>
			</div>

			<!--//Admin Content-->
	 </div>
	 
  <!--//Page Wrapper-->
  
 <!--JQUERY-->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

<!--Ckeditor-->
<script src="https://cdn.ckeditor.com/ckeditor5/17.0.0/classic/ckeditor.js"></script>

<!--Custome Script-->
<script src="../../assets/js/scripts.js"></script>
</body>

</html>