<?php
$conn = mysqli_connect("localhost","root","","fullstackdev");

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}
?>