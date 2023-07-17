<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- External CSS link -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- online bootstrap file -->
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">    
    <!-- Online Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- offline bootstrap CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- bootstrap icon & font -->  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"/>
    
    <title>E-Logbook</title>    
</head>
<body class="text-dark">
<!-- Biginning of Header & Navigation Bar -->
<div class="header">
		<div class="logo">
			<a href="#" style="cursor: auto;"><img src="logo.png" /></a>
		</div>
		<div class="nav">
			<div class="link">
				<ul>
					<a href="login.php"><li>Home</li></a>				
					<a href="login.php"><li>Logbook</li></a>
					<a href="login.php"><li>Activity</li></a>
					<a href="login.php"><li>Profile</li></a>                    				
				</ul>                
			</div>
            <div>
                <ul>					
					<a href="signup.php"><li class="home">Sign up</li></a>                    				
				</ul>                 
            </div>			
		</div>
	</div>
    <!-- End of Header & Navigation Bar -->

    <center><h1 class="visesc"> VSESC E-LOGBOOK </h1></center>

    <!-- Beginning of Login & Registration Form -->
    <div class="container">
    <div class="login-box p-5">
        <div class="row">

            <!-- Begining of Login Section -->
            <div class="col-md-6 login-left m-auto">
                <h2>Login Here</h2>
                <form action="validation.php" method="post">
                <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="user" class="form-control" autocomplete="off" required >
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" autocomplete="off" required>
                    </div>
                    <button type="submit" class="btn btn-primary"> Login </button>
                </form>
            </div><!-- End of Login Section -->            
        </div>
    </div><!-- End of Login & Registration Form -->
</div><!-- End of Header & Navigation Bar -->

<br><br><br><br><br><br>
<footer>
    <marquee behavior="horizontal" direction="horizontal">The Polytechnic Ibadan sango ibadan...  Vocational Skill Enterpreneurship Scheme (VSESC)</marquee><br><br><br>
    <center><p> Developed By Adedapo Abiodun Copyright @2022 </p></center>
</footer>
</body>
</html>