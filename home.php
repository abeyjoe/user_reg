<?php

session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}
?>

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
<body class="bg">
    <!-- Biginning of Header & Navigation Bar -->
    <div class="header">
		<div class="logo">
			<a href="#" style="cursor: auto;"><img src="logo.png" /></a>
		</div>
		<div class="nav">
			<div class="link">
				<ul>
					<a href="home.php"><li class="home">Home</li></a>                    
					<a href="logbook/logbook.php"><li>Logbook</li></a>
					<a href="logbook/displaylogbook.php"><li>Activity</li></a>
					<a href="profile.php"><li>Profile</li></a>
				</ul>
			</div>
            <div>
                <ul>					
					<a href="logout.php"><li>Logout</li></a>                    				
				</ul>                 
            </div>			
		</div>
	</div>
    <!-- End of Header & Navigation Bar -->

    <div class="container">

        <a class="float-right" href="logout.php"> LOGOUT </a>

        <h1 class="intro m-5 py-5">Welcome <?php echo $_SESSION['username']; ?> </h1>
        

        <div>
            <!-- SOME BRIEF INTRODUNTION TO THE WEBSITE HERE -->




            <!-- GET STARTED BUTTON -->
            <center><a href="logbook/logbook.php"><button type="submit" class="btn btn-primary" name="submit"> Get Started </button></a></center>
        </div>
    </div>
    
</body>
</html>