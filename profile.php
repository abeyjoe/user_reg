<?php
include 'logbook/connect.php';
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
<body class="bg-light text-dark">
    <!-- Biginning of Header & Navigation Bar -->
    <div class="header">
		<div class="logo">
			<a href="#" style="cursor: auto;"><img src="logo.png" /></a>
		</div>
		<div class="nav">
			<div class="link">
				<ul>
					<a href="home.php"><li>Home</li></a>                    
					<a href="logbook/logbook.php"><li>Logbook</li></a>
					<a href="logbook/displaylogbook.php"><li>Activity</li></a>
					<a href="profile.php"><li class="home">Profile</li></a>
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

    <div class="container py-5 m-5">

        <a class="float-right" href="logout.php"> LOGOUT </a>

        <h1 class="">Welcome <?php echo $_SESSION['username']; ?> </h1>

        <?php
    
    $user = $_SESSION['username'];

    $sql="Select * from usertable where name='$user' ";
    $result=mysqli_query($con,$sql);
    if($result){
        while($row=mysqli_fetch_assoc($result)){            
            $surname=$row['surname'];            
            $lastName=$row['lastName'];
            $name=$row['name'];
            $matricNumber=$row['matricNumber'];
            $gender=$row['gender'];
            $program=$row['program'];
            $department=$row['department'];
            $level=$row['level'];
            $phoneNumber=$row['phoneNumber'];
            $email=$row['email'];

            $image=$row['picture'];

            $trade=$row['trade'];
            $studentship=$row['studentship'];
            $semester=$row['semester'];
            $session=$row['session'];
            
            //Image Div Container
            echo'<div class="profile-picture">
                    <img src="uploads/'.$image.'" alt="Profile Picture" id="profile">
                </div>';

            //Profile Details Div Container
            echo '<div class="container">
                <div class="container">
                
                    <p>Full Name: '.$surname.' '.$lastName.' <span><i>(@'.$name.')</i></span></p>
                    <p>Username: @'.$name.' </p>
                    <p>Matric No: '.$matricNumber.'</p>
                    <p>Gender: '.$gender.'</p>
                    <p>Program: '.$program.'</p>
                    <p>Department: '.$department.'</p>
                    <p>Level: '.$level.'</p>
                    <p>Phone Number: '.$phoneNumber.'</p>
                    <p>Email Address: '.$email.'</p>            
                    <p>Trade: '.$trade.'</p>
                    <p>Studentship: '.$studentship.'</p>
                    <p>Semester: '.$semester.'</p>
                    <p>Session: '.$session.'</p>
            
                </div>
            </div>';
            
            }            
        }
    ?>
    </div>

    <footer>
        <marquee behavior="horizontal" direction="horizontal">The Polytechnic Ibadan sango ibadan...  Vocational Skill Enterpreneurship Scheme (VSESC)</marquee><br><br><br>
        <center><p> Developed By Adedapo Abiodun Copyright @2022 </p></center>
    </footer>
</body>
</html>