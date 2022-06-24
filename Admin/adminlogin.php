<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- External CSS link -->
    <link rel="stylesheet" type="text/css" href="../style.css">
    <!-- online bootstrap file -->
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">    
    <!-- Online Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- offline bootstrap CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">
    <!-- bootstrap icon & font -->  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"/>

    <!-- Online font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">	
    
    <title>E-Logbook</title>    
</head>
<body class="bg">
<!-- Biginning of Header & Navigation Bar -->
<div class="header">
<div class="logo">
	<a href="#" style="cursor: auto;"><img src="../logo.png" /></a>
		</div>
		<div class="nav">
			<div class="link">
				<ul>
					<a href="adminlogin.php"><li>Dashboard</li></a>				
					<a href="adminlogin.php"><li>User </li></a>
					<a href="adminlogin.php"><li>User Logbook</li></a>                   				
				</ul>                
			</div>
            <div>
                <ul>					
					<a href="#"><li class="home">Sign up</li></a>                    				
				</ul>                 
            </div>			
		</div>
	</div>
    <!-- End of Header & Navigation Bar -->

    <center><h1 class="intro"> VSESC E-LOGBOOK </h1></center>
    <center><h3 class="intro"> ADMIN LOGIN PAGE </h3></center>

    <!-- Beginning of Login & Registration Form -->
    <div class="login-box">
        <div class="row">
            <!-- Begining of Login Section -->
            <div class="col-md-6 login-left m-auto">

                <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-user"></span></div>

                <h2>Admin Login</h2>

                <form action="adminvalidation.php" method="post">

                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="user" class="form-control" autocomplete="off" required >
                    <div class="form-group">	            
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" autocomplete="off" required>
                </div>
                <button type="submit" class="btn btn-primary"> Login </button>                    
                </form>
            </div>
            <!-- End of Login Section -->            
        </div>
    </div><!-- End of Login & Registration Form -->
</div><!-- End of Header & Navigation Bar -->

</body>
</html>