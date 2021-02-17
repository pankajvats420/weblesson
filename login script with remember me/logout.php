<?php
session_start();

?>
<head>

	<link rel="stylesheet" type="text/css" href="../file/bootstrap.min.css">
		<script type="text/javascript" src="../file/jquery-1.12.0.min.js"></script>
	<script type="text/javascript" src="../file/bootstrap.bundle.min.js"></script>

</head>
<a href="index.php">Index</a>

 <?php 
    if(isset($_SESSION["message"])){ 
      ?>
      <div class="alert alert-danger">
      	<?php echo $_SESSION["message"]; ?>
       </div>
          
          <?php
     } 

     unset($_SESSION["message"]);
 ?>