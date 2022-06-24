<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:adminlogin.php');
}
?>

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
    
    <title>E-Logbook</title>    
</head>
<body class="bg-light">
    <!-- Biginning of Header & Navigation Bar -->
    <div class="header">
		<div class="logo">
			<a href="#" style="cursor: auto;"><img src="../logo.png" /></a>
		</div>
		<div class="nav">
			<div class="link">
				<ul>
					<a href="adminhome.php"><li class="home">Dashboard</li></a>                    
					<a href="user.php"><li>User</li></a>
					<a href="useractivity.php"><li>User Activity</li></a>
				</ul>
			</div>
            <div>
                <ul>					
					<a href="adminlogout.php"><li>Logout</li></a>                    				
				</ul>                 
            </div>			
		</div>
	</div>
    <div class="container">
        <a class="float-right" href="../logout.php"> LOGOUT </a>
    <!-- End of Header & Navigation Bar -->
        <!-- Echo user name -->
        <h1 class="intro p-5 m-5">Welcome <?php echo $_SESSION['username']; ?> </h1>
    <div>
    <br><br>
    
    <!-- SOME BRIEF INTRODUNTION TO THE WEBSITE HERE -->




    <!-- GET STARTED BUTTON -->
    <!--
        <a href="useractivity.php"><button type="submit" class="btn btn-primary" name="submit"> View Students Logbook </button></a>
    -->
        </div>
    </div>
    
</body>
</html>