<!DOCTYPE html>
<html>
<head>





	<title>Club Activity</title>
	 
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	
	<link rel="stylesheet" type="text/css" href="js/bootstrap.js">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="js/bootstrap.js"></script>

















</head>



<body>

	






	<!--<div class="container-fluid">

		<div class="row" >
			<div class="col">
				<a href="index.php"><img src="img/cc.png"></a>
			</div>
		</div>
	</div>	-->
	<div class="container-fluid">
	<nav class="navbar navbar-default navbar-fixed-top" style="background:rgba(0,0,0,0.5);">
			<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="home.php"><span style="font-size: 30px;">CLUB </span></a>
			</div>
		<ul class="nav navbar-nav navbar-right">
			<li><a href="#"><span class="glyphicon glyphicon-edit"></span><span style="font-size: 20px;">About us</span></a></li>
			<li><a href="#"><span class="glyphicon glyphicon-earphone"></span><span style="font-size: 20px;">Contact us</span></a></li>
			
		</ul>
	</div>
			
	</nav>
</div>
	














	<div class="container">

		
			<div class="row">
								<div class="col-md-5">
									
									<form action="home.php" method="POST">
										<h1 class="text-center">Log In</h1>
										
										
										<label class="label control-label">Usn</label>
										<div class="input-group">
											<span class="input-group-addon"><span class="glyphicon	glyphicon-user"></span></span>

											<input type="text" name="usn" placeholder="Enter Usn Number" class="form-control">
										</div>
										<br>

										<label for="password"class="label control-label">Password</label>
										<div class="trans">
										<div class="input-group">
											<span class="input-group-addon"><span class="glyphicon	glyphicon-lock" ></span></span>
											<input id="password" type="password" name="password" placeholder="Password" class="form-control">
										</div>
										</div>
										<br><br>
										<div class="row">
											<div class="col-md-6">
												<input type="checkbox" ><small style="color:white; font-size:18px;">Remember me</small>
											</div>
											<div class="col-md-6">
												<a href="#"><p class="text-right" style="color:white; font-size:18px;">Forgot password?</p></a>
											</div>
										
										</div>
										<input type="submit" name="login" value="Log In" class="btn btn-default"><br><br>
										<p class="text-center" style="color:white;">Not a member yet?<a href="index.php">Sing up</a>
										</p>
										<div class="row">
											<p class="text-center" style="color:white;">---------------------- OR ----------------------</p>
										</div>
											<button class="btn-default loginBtn loginBtn--facebook">
											  Login with Facebook
											</button><br> <br>

											<button class="btn-default loginBtn loginBtn--google">
											  Login with Google
											</button>
										 <br>
											 <a class="btn btn-block btn-social btn-twitter">
   											 <span class="fa fa-twitter"></span> Sign in with Twitter
 											 </a>
										
									</form>
									

								</div>






								<div class="col-md-2">
									  		

									
								</div>
								<div class="col-md-5">

									<form action="index.php" method="POST">
										<h1 class="text-center">Create New Account</h1>
										
										<label class="label control-label">Email</label>
										<div class="input-group">
											<span class="input-group-addon"><span class="glyphicon	glyphicon-envelope" ></span></span>
										<input class="form-control" type="email" name="email" placeholder="Email@example.com"><br>
										</div>
										<label class="label control-label">Usn</label>
										<div class="input-group">
											<span class="input-group-addon"><span class="glyphicon	glyphicon-user" ></span></span>
										<input class="form-control" type="text" name="usn" placeholder="Enter your Usn"><br>
										</div>
										<label class="label control-label">Full Name</label>
										<div class="input-group">
											<span class="input-group-addon"><span class="glyphicon	glyphicon-user" ></span></span>
										<input class="form-control" type="text" name="name" placeholder="Enter your name"><br>
										</div>

										<label class="label control-label">Password</label>
										<div class="input-group">
											<span class="input-group-addon"><span class="glyphicon	glyphicon-lock" ></span></span>

										<input class="form-control" type="password" name="password1" placeholder="New password"><br>
										</div>

										<label class="label control-label">Re-enter Password</label>
										<div class="input-group">
											<span class="input-group-addon"><span class="glyphicon	glyphicon-lock" ></span></span>

										<input class="form-control"  type="password" name="password2" placeholder="Re-enter new password"><br>
										</div>

										<!--<label class="label control-label">Date of birth</label>
										<div class="input-group">
											<span class="input-group-addon"><span class="glyphicon	glyphicon-time" ></span></span>

										<input class="form-control" type="date" name="dob"><br>
										</div>-->
										<label class="label control-label">Semester</label> 
													<input  type="radio" name="sem"><span style="color:white;">2nd</span>
													
													<input type="radio" name="sem"><span style="color:white;">4th</span><br>


										<label class="label control-label">Gender</label>
										<input type="radio" name="gender" value="male"><span style="color:white;">Male</span>
												<input type="radio" name="gender" value="female"><span style="color:white;">Female</span><br>
												
												<input class="btn btn-default" type="submit" name="submit" value="Sign UP"><br>
									</form>
								</div>
			</div>

		

	</div>

</body>
</html>