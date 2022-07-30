<!DOCTYPE html>
<html>
<head>
	<title>Sign In</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.css">
</head>
<body>
	<div class="container">
		<br>
		<br>
		<div class="row justify-content-md-center">
		    <div class="col-md-4 col-md-offset-4">
				<form action="<?php echo site_url('Login/auth'); ?>" method="POST">
					<h2>Please sign in</h2>
				  <div class="form-group">
				    <label for="exampleInputemail">Email</label>
				    <input type="email" class="form-control"  name="email" aria-describedby="emailHelp" placeholder="Email">
				    </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Password</label>
				    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
				  </div>
				  <button type="submit" class="btn btn-primary">Sign In</button>
				</form>
		    </div>
	 	</div>
	</div>
</body>
</html>