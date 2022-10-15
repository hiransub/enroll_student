<?php 

include_once 'db_conn.php';


$fName = $_POST['firstName'];
$lName = $_POST['lastName'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$bdate = $_POST['birthdate'];
$phone = $_POST['phone'];
$email = $_POST['email'];


$sql = "INSERT INTO student (firstName,lastName,address,gender,birthdate,phone,email) VALUES ('$fName','$lName','$address','$gender','$bdate','$phone','$email')";

$result = mysqli_query($conn,$sql);

header("Location:test.php?submit=success");



?>