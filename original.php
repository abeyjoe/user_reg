/*
$surname = $_POST['surname'];
$lastName = $_POST['lastName'];
$matricNumber = $_POST['matricNumber'];
$gender = $_POST['gender'];
$program = $_POST['program'];
$deparment = $_POST['deparment'];
$level = $_POST['level'];
$phoneNumber = $_POST['phoneNumber'];
$email = $_POST['email'];
$picture = $_POST['picture'];
$trade = $_POST['trade'];
$studentship = $_POST['studentship'];
$semester = $_POST['semester'];
$session = $_POST['session'];
*/

$reg = "insert into usertable(name, password, surname, lastName, matricNumber, gender, program, department, level, phoneNumber, email, picture, trade, studentship, semester, session) values('$name', '$pass', '$surname', '$lastName', '$matricNumber', '$gender', '$program', '$department', '$level', '$phoneNumber', '$email', '$picture', '$trade', '$studentship', '$semester', '$session',)";



<?php

session_start();
// header('location:login.php');

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'userregistration');

$name = $_POST['user'];
$pass = $_POST['password'];


$s = "select * from usertable where name = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo "Username Already Taken";    
}else{    
    $reg = "insert into usertable(name, password) values('$name', '$pass')";
    mysqli_query($con, $reg);
    echo "Registration Successful";

}

?>