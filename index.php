<?php
include "db.php";

if(isset($_POST['name'])){

$name = $_POST['name'];
$age = $_POST['age'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];

$sql = "INSERT INTO users (name, age, email, phone, password)
VALUES ('$name','$age','$email','$phone','$password')";

if(mysqli_query($conn,$sql)){
    echo "User added successfully";
}else{
    echo "Error: " . mysqli_error($conn);
}

}
?>