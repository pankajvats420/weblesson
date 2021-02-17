
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="file/bootstrap.min.css">
		<script type="text/javascript" src="../file/jquery-1.12.0.min.js"></script>
	<script type="text/javascript" src="file/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="../file/sweetalert2@10.js"></script>
	<style type="text/css">
		.error{
			padding-top: 0.20px !important;
            padding-bottom: 0.20px !important;
            color: red;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row mt-5">
			
			<div class="col-md-12">
				<div class="card">
				  <div class="card-header">
				    <h5 class="card-title" style="margin-bottom: -24px;">Insert Record</h5>
				    <a href="index.php" class="btn btn-success float-right">Back To Home Page</a>
				  </div>
				  <div class="card-body">
					    <form method="post" enctype="multipart/form-data" id="frmdata">
						  <div class="form-group row">
						    <label for="name" class="col-md-2 col-form-label">Name</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control mb-1" id="name" name="name">
						      <span class="alert error" id="name_error"  ></span>
						    </div>
						  </div>
						  <div class="form-group row">
						    <label for="email" class="col-sm-2 col-form-label">Email</label>
						    <div class="col-sm-10">
						      <input type="email" class="form-control mb-1" id="email" name="email">
						      <span class="alert error" id="email_error"  ></span>
						    </div>
						  </div>
						  <div class="form-group row">
						    <label for="phone" class="col-sm-2 col-form-label">Phone Number</label>
						    <div class="col-sm-10">
						      <input type="number" class="form-control mb-1" id="phone" name="phone">
						      <span class="alert error" id="phone_error"  ></span>
						    </div>
						  </div>
						  <div class="form-group row">
						    <label for="image" class="col-sm-2 col-form-label">Image</label>
						    <div class="col-sm-2">
						      <input type="file" class="form-control mb-1" id="image" name="image">
						      <span class="alert error" id="image_error"  ></span>
						    </div>
						  </div>
						  <div class="form-group row">
						    <label for="password" class="col-sm-2 col-form-label">Password</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control mb-1" id="password" name="password">
						      <span class="alert error" id="password_error"  ></span>
						    </div>
						  </div>

						  <div class="form-group row">
						    <div class="col-sm-10">
						      <input type="submit" name="submit" class="btn btn-primary" id="submit">
						      <span class="alert error" id="last_error"  ></span>
						    </div>
						  </div>
                        </form>
				 </div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>



<script type="text/javascript">
	jQuery(document).ready(function(){
         
		jQuery("#frmdata").submit(function(e){
			 e.preventDefault();  

            var formdata = new FormData(jQuery("#frmdata")[0]);

		    jQuery.ajax({
	             	url: "submit.php",
	             	type:"POST",
	             	processData:false,
	             	contentType:false,
	             	data:formdata,
	             	success: function(response){
	             		   console.log(response);
			                var data = JSON.parse(response);
			                 
				            	if(data.status == "error"){
                                    jQuery("#"+data.field).text(data.message);   
				            	}else{
				            		 Swal.fire({
			                          position: "middle",
			                          icon: "success",
			                          title: data.message,
			                          showConfirmButton: true  
		                              }).then(function(){
                                         window.location="index.php";
		                              });
				            	}
				           
			               }
		    });
		});


	});

</script>