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
<body>
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

            $picture=$row['picture'];

            $trade=$row['trade'];
            $studentship=$row['studentship'];
            $semester=$row['semester'];
            $session=$row['session'];


            echo '<div>
            
            <h4>Full Name: '.$surname.' '.$lastName.' <span><i>(@'.$name.'  )</i></span></h4>
            <h4>Username: @'.$name.' </h4>
            <h4>Matric No: '.$matricNumber.'</h4>
            <h4>Gender: '.$gender.'</h4>
            <h4>Program: '.$program.'</h4>
            <h4>Department: '.$department.'</h4>
            <h4>Level: '.$level.'</h4>
            <h4>Phone Number: '.$phoneNumber.'</h4>
            <h4>Email Address: '.$email.'</h4>


            <img src="uploads"<?php echo $picture ?>" alt="Profile Picture">
            <img src="uploads/<?php echo $group[$i]['picture'] ?>" alt="Group image">
            
            
            <div class="profilepicture">Profile Picture: '.$picture.'</div>

            <h4>Trade: '.$trade.'</h4>
            <h4>Studentship: '.$studentship.'</h4>
            <h4>Semester: '.$semester.'</h4>
            <h4>Session: '.$session.'</h4>
        
            </div>';
            }            
        }
    ?>
    </div>

</body>
</html>