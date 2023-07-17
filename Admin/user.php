<?php
include '../logbook/connect.php'; 

// return to login if if username is not used
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
    <!-- External Logbook CSS link -->
    <link rel="stylesheet" type="text/css" href="../stylelog.css">
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
                <a href="adminhome.php"><li>Dashboard</li></a>                    
					<a href="user.php"><li class="home">User</li></a>
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
    <!-- End of Header & Navigation Bar -->
    <!-- Display Heading -->
    <center><h1>DISPLAY LOGBOOK</h1></center>
<div class="container">
<!--
    <a href="logbook.php" class="text-light">
        <button class="btn btn-primary my-5">Fill Logbook</button>
    </a>
-->
    <h2>Available Users</h2><hr>
    <table class="table text-dark table-striped">
        <thead>
            <tr>
            <th scope="col">S/N</th>
            <th scope="col">Username</th>
            <th scope="col">Surname</th>
            <th scope="col">Lastname</th>
            <th scope="col">Matric Number</th>
            <th scope="col">Gender</th>
            <th scope="col">Program</th>
            <th scope="col">Department</th>
            <th scope="col">Level</th>
            <th scope="col">Phone No</th>
            <th scope="col">Email</th>
            <th scope="col">Trade</th>
            <th scope="col">Studentship</th>
            <th scope="col">Semester</th>
            <th scope="col">Session</th>

            <!-- Newly Added -->            
            <th scope="col" class="operation-button-width">Operations</th>
            </tr>
        </thead>

        <tbody>

        <?php
    
        $user = $_SESSION['username'];
        $count = 0;

        $sql="Select * from usertable "; //where user='$user' 
        $result=mysqli_query($con,$sql);
        if($result){
            while($row=mysqli_fetch_assoc($result)){                
                $id=$row['id'];
                $name=$row['name'];
                $surname=$row['surname'];                
                $lastName=$row['lastName'];
                $matricNumber=$row['matricNumber'];
                $gender=$row['gender'];
                $program=$row['program'];
                $department=$row['department'];
                $level=$row['level'];
                $phoneNumber=$row['phoneNumber'];
                $email=$row['email'];
                $trade=$row['trade'];
                $studentship=$row['studentship'];
                $semester=$row['semester'];
                $session=$row['session'];         

                $count++;

                echo '<tr>
                    <th scope="row">'.$count.'</th>
                    <td>'.$name.'</td>
                    <td>'.$surname.'</td>
                    <td>'.$lastName.'</td>
                    <td>'.$matricNumber.'</td>
                    <td>'.$gender.'</td>
                    <td>'.$program.'</td>
                    <td>'.$department.'</td>
                    <td>'.$level.'</td>
                    <td>'.$phoneNumber.'</td>
                    <td>'.$email.'</td>
                    <td>'.$trade.'</td>
                    <td>'.$studentship.'</td>
                    <td>'.$semester.'</td>
                    <td>'.$session.'</td>
                    <td>
                        <a href="delete.php?deleteid='.$id.'" class="text-light"><button class="btn btn-danger">Delete</button></a>
                    </td>
                </tr>';
                }            
            }
        ?>        

        </tbody>
    </table>
</div>

<br><br><br><br><br><br><br><br>
<footer>
    <marquee behavior="horizontal" direction="horizontal">The Polytechnic Ibadan sango ibadan...  Vocational Skill Enterpreneurship Scheme (VSESC)</marquee><br><br><br>
    <center><p> Developed By Adedapo Abiodun Copyright @2022 </p></center>
</footer>
</body>
</html>