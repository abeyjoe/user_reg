<?php
include 'connect.php';

// return to login if if username is not used
session_start();
if(!isset($_SESSION['username'])){
    header('location:../login.php');
}

$user = $_SESSION['username'];

if(isset($_POST['submit'])){
    $week=$_POST['week'];
    $day=$_POST['day'];
    $topic=$_POST['topic'];
    $note=$_POST['note'];
    $image=$_POST['image'];
    $date=$_POST['date'];

    $sql="insert into logbook(week,day,topic,note,image,date,user) values('$week','$day','$topic','$note','$image','$date', '$user')";
    $result=mysqli_query($con,$sql);
    if($result){
        // echo "Data inserted successfully";
        header('location:displaylogbook.php');
    }else{
        die(mysqli_error($con));        
    }
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
    <link rel="stylesheet" type="text/css" href="stylelog.css">

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
<body>

    <!-- Biginning of Header & Navigation Bar -->
    <div class="header">
		<div class="logo">			
            <a href="#" style="cursor: auto;"><img src="../logo.png" /></a>
		</div>
		<div class="nav">
			<div class="link">
				<ul>
					<a href="../home.php"><li>Home</li></a>				
					<a href="../logbook/logbook.php" class="active"><li class="home">Logbook</li></a>
					<a href="../logbook/displaylogbook.php"><li>Activity</li></a>
					<a href="../profile.php"><li>Profile</li></a>                    				
				</ul>                
			</div>
            <div>
                <ul>					
					<a href="../logout.php"><li>Logout</li></a>                    				
				</ul>                 
            </div>			
		</div>
	</div>
    <!-- End of Header & Navigation Bar -->

    <div class="container my-5 text-dark bg-light">
        <form method="post">

        <!-- Heading -->
        <center><h1> FILE LOGBOOK </h1></center>

            <!-- Begining Week Selection -->
            <div class="mb-3">
                <label>Select Week</label>
                <select class="form-select" name="week">
                    <option selected disabled>Select week</option>                               
                    <option value="Week One">Week One</option>
                    <option value="Week Two">Week Two</option>
                    <option value="Week Three">Week Three</option>
                    <option value="Week Four">Week Four</option>
                    <option value="Week Five">Week Five</option>
                    <option value="Week Six">Week Six</option>
                    <option value="Week Seven">Week Seven</option>
                    <option value="Week Eight">Week Eight</option>
                    <option value="Week Nine">Week Nine</option>
                    <option value="Week Ten">Week Ten</option>
                    <option value="Week Eleven">Week Eleven</option>
                    <option value="Week Twelve">Week Twelve</option>
                </select>
            </div>
            <!-- End Week Selection -->

            <!-- Begining Day Selection -->
            <div class="mb-3">
                <label>Select Day</label>            
                <select class="form-select" name="day">
                    <option selected disabled>Select day of the week</option>                               
                    <option value="Monday">Monday</option>
                    <option value="Tuesday">Tuesday</option>
                    <option value="Wednesday">Wednesday</option>
                    <option value="Thursday">Thursday</option>
                    <option value="Friday">Friday</option>
                </select>
            </div>
            <!-- End Day Selection -->
            
            <!-- Topic section -->
            <div class="mb-3">
                <label>Topic</label>
                <input type="text" class="form-control" placeholder="Enter topic of work done for the week" name="topic" autocomplete="off" required>
            </div>

            <!-- Note section -->
            <div class="mb-3">
                <label>Note</label>
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" style="height: 200px" name="note" title="Leave a comment here" required></textarea>
                    <label>Enter Notes Here...</label>
                </div>
            </div>

            <!-- Image upload section -->
            <div class="mb-3">
                <label>Upload Image Illustration</label>
                <input type="file" class="form-control" name="image" title="choose an image">
            </div>

            <!-- Upload date section -->
            <div class="mb-3">
                <label> Date </label>
                <input type="date" class="form-control" name="date" title="choose a date" required>
            </div>            

            <!--Submit Button-->
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            
        </form>
    </div>

  </body>
</html>