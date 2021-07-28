<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>COE - <?php include('dist/includes/title.php');?></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="dist/css/my-login.css">
</head>

<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
				
					<!--div class="card-body">
							<img  class="img-coelogo" src="dist/img/text_mmsu.png" style="float:center; margin-top:auto; margin-right:auto; width:150px; ">
							<img  class="img-coelogo" src="dist/img/mmsu.png" style="float: center; margin-top:2px; margin-right:10px; width:80px; "></img>
							<img  class="img-coelogo" src="dist/img/coe.png" style="float: center; margin-top:2px; margin-right:10px; width:79px; "></img>
								
						
					</div-->
					<div >
						
						
					</div>
					<div class="card fat">
						<div class="card-body">
							<img  class="img-coelogo" src="dist/img/mmsu.png" style="float: left; margin-top:2px; margin-right:10px; width:60px; "></img>
							
							<img  class="img-coelogo" src="dist/img/coe.png" style="float: left; margin-top:2px; margin-right:10px; width:60px; "></img>
							<h5 style="text-align:left;font-family:Courier New"> Mariano Marcos State University</h5>

							<h6 style="text-align:left;font-family:Courier New" class="card-title" >  College of Engineering</h6>
							<div>
							<h6 style="text-align:CENTER;font-family:Lucida Console" class="card-title" > FACULTY SCHEDULER</h6></div>
							
   		

								<form action="login.php" method="POST" class="my-login-validation" >
								<div class="form-group">
									<label >Username</label>
									<input  type="text" class="form-control" name="username" placeholder="" required autofocus>
									
								</div>

								<div class="form-group">
									<label >Password</label>
									<input  type="password" class="form-control" name="password" required data-eye>
								    <div class="invalid-feedback">
								    	Password is required
							    	</div>
								</div>


								<div class="form-group m-0">
									<button type="submit" name="login" class="btn btn-success btn-block">
										Login
									</button>
								</div>
								
							</form>
						</div>
					</div>
					<div class="footer">
						Copyright &copy; 2021 &mdash; MMSU-COE Scheduler System
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="dist/js/my-login.js"></script>
</body>
</html>
