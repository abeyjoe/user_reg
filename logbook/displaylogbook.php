<?php
include 'connect.php'; 

// return to login if username is not used
session_start();
if(!isset($_SESSION['username'])){
    header('location:..\login.php');
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
					<a href="../logbook/logbook.php"><li>Logbook</li></a>
					<a href="../logbook/displaylogbook.php" class="active"><li class="home">Activity</li></a>
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

    <!-- Display Heading -->
    <center><h1>DISPLAY LOGBOOK</h1></center>


<div class="container">
    <a href="logbook.php" class="text-light">
        <button class="btn btn-primary my-5">Fill Logbook</button>
    </a>

 
    <table class="table text-dark table-striped">
        <thead>
            <tr>
            <th scope="col">S/N</th>
            <th scope="col">Week</th>
            <th scope="col">Day</th>
            <th scope="col">Topic</th>
            <th scope="col">Note</th>
            <th scope="col">Image</th>
            <th scope="col">Date</th>
            <th scope="col" class="operation-button-width">Operations</th>
            </tr>
        </thead>

        <tbody>

        <?php
    
        $user = $_SESSION['username'];
        $count = 0;

        $sql="Select * from logbook where user='$user' ";
        $result=mysqli_query($con,$sql);
        if($result){
            while($row=mysqli_fetch_assoc($result)){
                $id=$row['id'];
                $week=$row['week'];
                $day=$row['day'];
                $topic=$row['topic'];
                $note=$row['note'];
                $image=$row['image'];
                $date=$row['date'];

                $count++;

                echo '<tr>
                <th scope="row">'.$count.'</th>
                <td>'.$week.'</td>
                <td>'.$day.'</td>
                <td>'.$topic.'</td>
                <td>'.$note.'</td>
                <td>'.$image.'</td>
                <td>'.$date.'</td>
                <td>
                <a href="update.php?updateid='.$id.'" class="text-light"><button class="btn btn-primary">Update</button></a>
                <a href="delete.php?deleteid='.$id.'" class="text-light"><button class="btn btn-danger">Delete</button></a>
                </td>
                </tr>';
                }            
            }
        ?>
        </tbody>
    </table>
</div>

</body>
</html>