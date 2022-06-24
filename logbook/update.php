<?php
include 'connect.php';

// return to login if username is not used
session_start();
if(!isset($_SESSION['username'])){
    header('location:../login.php');
}

$id=$_GET['updateid'];


$sql="Select * from logbook where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$week=$row['week'];
$day=$row['day'];
$topic=$row['topic'];
$note=$row['note'];
$image=$row['image'];
$date=$row['date'];

if(isset($_POST['submit'])){
    $week=$_POST['week'];
    $day=$_POST['day'];
    $topic=$_POST['topic'];
    $note=$_POST['note'];
    $image=$_POST['image'];
    $date=$_POST['date'];

    $sql="update logbook set id=$id,week='$week',day='$day',topic='$topic',note='$note',image='$image',date='$date'";
    $result=mysqli_query($con,$sql);
    if($result){
        // echo "Updated successfully";
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
			<a href="#" style="cursor: auto;"><img src="../logo.png" /></a>
		</div>
		<div class="nav">
			<div class="link">
				<ul>
					<a href="../home.php"><li class="home">Home</li></a>				
					<a href="../logbook/logbook.php"><li>Logbook</li></a>
					<a href="../logbook/displaylogbook.php"><li>Activity</li></a>
					<a href="#"><li>Profile</li></a>                    				
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

    <div class="container my-5">
        <form method="post">
            
            <!-- Heading -->
            <center><h1>UPDATE LOGBOOK</h1></center>

            <!-- Begining Week Selection -->
            <div class="mb-3">
                <label>Select Week</label>
                <select class="form-select" name="week">
                    <option selected disabled>Select week</option>                               
                    <option value="weekOne">Week One</option>
                    <option value="weekTwo">Week Two</option>
                    <option value="weekThree">Week Three</option>
                    <option value="weekFour">Week Four</option>
                    <option value="weekFive">Week Five</option>
                    <option value="weekSix">Week Six</option>
                    <option value="weekSeven">Week Seven</option>
                    <option value="weekEight">Week Eight</option>
                    <option value="weekNine">Week Nine</option>
                    <option value="weekTen">Week Ten</option>
                    <option value="weekEleven">Week Eleven</option>
                    <option value="weekTwelve">Week Twelve</option>
                </select>
            </div>
            <!-- End Week Selection -->

            <!-- Begining Day Selection -->
            <div class="mb-3">
                <label>Select Day</label>            
                <select class="form-select" name="day">
                    <option selected disabled>Select day of the week</option>                               
                    <option value="monday">Monday</option>
                    <option value="tuesday">Tuesday</option>
                    <option value="wednesday">Wednesday</option>
                    <option value="thursday">Thursday</option>
                    <option value="friday">Firday</option>
                </select>
            </div>
            <!-- End Day Selection -->
            
            <!-- Topic section -->
            <div class="mb-3">
                <label>Topic</label>
                <input type="text" class="form-control text-light" placeholder="Enter topic of work done for the week" name="topic" autocomplete="off" required>
            </div>                 
            
            <!-- Note section -->
            <div class="mb-3">
                <label>Note</label>
                <div class="form-floating">
                    <textarea class="form-control text-light" placeholder="Leave a comment here" style="height: 200px" name="note" title="Leave a comment here" required></textarea>
                    <label>Enter Notes Here...</label>
                </div>
            </div>
            
            <!-- Image upload section -->
            <div class="mb-3">
                <label>Upload Image Illustration</label>
                <input type="file" class="form-control text-light" name="image" title="choose an image">
            </div>
            
            <!-- Upload date section -->
            <div class="mb-3">
                <label> Date </label>
                <input type="date" class="form-control text-light" name="date" title="choose a date" value=<?php echo $date;?> required>
            </div>            

            <!--Submit Button-->
            <button type="submit" class="btn btn-primary" name="submit">Update</button>
            
        </form>
    </div>

  </body>
</html>