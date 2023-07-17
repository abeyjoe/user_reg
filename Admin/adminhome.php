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
        <h1 class="intro p-5 m-5">Welcome <?php echo $_SESSION['username']; ?> <i>Admin!</i></h1>
    <div>
    
    <!-- SOME BRIEF INTRODUNTION TO THE WEBSITE HERE -->
    <div>
            <!-- SOME BRIEF INTRODUNTION TO THE WEBSITE HERE -->
            <div class="container">
                <h2>ABOUT US</h2>
                <p>The Centre was established in compliance with the Federal Government's initiative through NBT Ethat all tertiary institutions in Nigeria must establish Entrepreneurship Development Centres (EDC) to solve graduatesunemployment crises by ensuring that they acquire functional entrepreneurial skills, desirable work habit in addition to their formal education which will enable them to be self-reliant, self-employed and productive members of the society. To this end, Vocational Skills and Entrepreneurship Study Centre (VSESC) was resuscitated by the school management in June2008 after the extinction of the old Vocational Skills Improvement Unit (VSIU) to serve as community service and revenue generating outfit. This is a double barrel conception viz: skill acquisition programme and entrepreneurship development of graduates of this institution. In fact, Vocational Skills and Entrepreneurship Study Centre (VSESC) is to ensure that all graduates of the Polytechnic, Ibadan are practically sound in at least one vocational/entrepreneurial skill before graduation so that they can be self-reliant, self-employed and employer of labour rather than job seekers. The blue print establishing the Centre has the following vision, mission, specific objective and basic policies:</p>

                <h2>Our Vision</h2>
                <p>Develop skills, which facilitate professional and technical progress of every individual in his or her professional calling or career. Enhance the job skills of all graduates of The Polytechnic, Ibadan, as a means to self-employment, self-sustaining, and self-sufficiency.</p>

                <h2>Our Mission</h2>
                <p>The Centre shall take all measures to promote employment, develop employment, develop vocational skills and that workers and students alike shall undertake, update and upgrade their vocational, avocational skills, competencies and proficiencies.</p>
        
            </div>

    <!-- GET STARTED BUTTON -->
    <a href="user.php"><button type="submit" class="btn btn-primary" name="submit"> View All Users </button></a>

        </div>
    </div>
<br><br><br>
<footer>
    <marquee behavior="horizontal" direction="horizontal">The Polytechnic Ibadan sango ibadan...  Vocational Skill Enterpreneurship Scheme (VSESC)</marquee><br><br><br>
    <center><p> Developed By Adedapo Abiodun Copyright @2022 </p></center>
</footer>
</body>
</html>