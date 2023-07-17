<?php

session_start();
header('location:login.php');

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'userregistration');

$name = $_POST['user'];
$pass = $_POST['password'];

$surname = $_POST['surname'];
$lastName = $_POST['lastName'];
$matricNumber = $_POST['matricNumber'];
$gender = $_POST['gender'];
$program = $_POST['program'];
$department = $_POST['department'];
$level = $_POST['level'];
$phoneNumber = $_POST['phoneNumber'];
$email = $_POST['email'];

$image=$_FILES['picture']['name'];
$tmp_name=$_FILES['picture']['tmp_name'];

$trade = $_POST['trade'];
$studentship = $_POST['studentship'];
$semester = $_POST['semester'];
$session = $_POST['session'];

$s = "SELECT * FROM usertable WHERE name = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo "Username Already Taken";    
}else{
    move_uploaded_file($tmp_name,"./uploads/$image");
    $reg = "INSERT INTO usertable(name, password, surname, lastName, matricNumber, gender, program, department, level, phoneNumber, email, picture, trade, studentship, semester, session) values('$name', '$pass', '$surname', '$lastName', '$matricNumber', '$gender', '$program', '$department', '$level', '$phoneNumber', '$email', '$image', '$trade', '$studentship', '$semester', '$session')";
    mysqli_query($con, $reg);
    echo "Registration Successful";
}
/*
$reg = "INSERT INTO usertable(name, password, surname, lastName, matricNumber, gender, program, department, level, phoneNumber, email, picture, trade, studentship, semester, session) values('$name', '$pass', '$surname', '$lastName', '$matricNumber', '$gender', '$program', '$department', '$level', '$phoneNumber', '$email', '$picture', '$trade', '$studentship', '$semester', '$session',)";
    mysqli_query($con, $reg);
    echo "Registration Successful";
*/
if($result){  
    /*  
    echo '<script>
    alart("Registration successfull");
    window.location="../";
    </script>';
    */
    header("Refresh:0; url='login.php'");
    echo "<script>alert('Registration successful!')</script>";
    }else{
        die(mysqli_error($con));
    }

?>
