<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "project1";
$conn = mysqli_connect($servername,$username,$password,$dbname);

$ad=$_GET['adhaar'];
$fn=$_GET['firstname'];
$ln=$_GET['lastname'];
$ai=$_GET['anyissue'];
$ra=$_GET['resadd'];

$query="INSERT INTO medicalrec VALUES ('$ad', '$fn', '$ln', '$ai', '$ra')";
$data=mysqli_query($conn,$query);
if($data)
{
 echo "Data inserted";
}
else
{
 echo "Failed to insert";
}
?>