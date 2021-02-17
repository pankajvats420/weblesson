<?php
session_start();
$conn = mysqli_connect("localhost","root","","test");

if(isset($_POST['login'])){
     
	$sql = "SELECT * FROM users WHERE name='".$_POST['name']."' and password = '".$_POST['password']."'";
	$result = mysqli_query($conn,$sql);
	$user = mysqli_fetch_assoc($result);

	if($user){
          if(!empty($_POST['checkbox'])){
              setcookie("name",$_POST['name'],time()+ (5));
              setcookie("password",$_POST['password'],time()+ (5));
          }else{
          	if(isset($_COOKIE['name'])){
          		setcookie("name","");
          	}
          	if(isset($_COOKIE['name'])){
          		setcookie("password","");
          	}        
          }
          $_SESSION["message"] = "Register";
          header("location:logout.php");
          
	}else{
		$message = 'Invalied Login Detail';
	}
     
}


print_r($_COOKIE);
 ?>




<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="../file/bootstrap.min.css">
		<script type="text/javascript" src="../file/jquery-1.12.0.min.js"></script>
	<script type="text/javascript" src="../file/bootstrap.bundle.min.js"></script>

</head>
<body>
	<div class="container mt-5" >
		<div class="row">
			<div class="col-md-8">
				        <?php 
					        if(isset($message)){ 
                              ?>
                              <div class="alert alert-danger">
                              	<?php echo $message; ?>
				               </div>
						          
						          <?php
					         } 
					    ?>
				
			    <form method="post" id="frmLogin">
					  <div class="form-group">
					    <label for="Name">Name</label>
					    <input type="text" class="form-control" name="name"  placeholder="Enter name" id="name" value="<?php if(isset($_COOKIE['name'])){ echo $_COOKIE['name'];} ?>">
					  </div>
					  <div class="form-group">
					    <label for="Password">Password</label>
					    <input type="text" class="form-control" name="password"  placeholder="Enter password" id="password" value="<?php if(isset($_COOKIE['password'])){ echo $_COOKIE['password'];} ?>">
					  </div>
					 
					  <div class="form-group form-check">
					    <input type="checkbox" class="form-check-input" id="checkbox" name="checkbox" <?php if(isset($_COOKIE['name'])){ ?> checked   <?php } ?>>
					    <label class="form-check-label" for="exampleCheck1">Remember Me</label>
					  </div>
				      <button type="submit"  name="login" id="login" class="btn btn-success">Submit</button>
			    </form>

				
			</div>
		</div>
	</div>
</body>
</html>



