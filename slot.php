<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "project1";
$conn = mysqli_connect($servername,$username,$password,$dbname);

$ad=$_GET['adhaar'];
$fn=$_GET['firstname'];
$ln=$_GET['lastname'];
$mp=$_GET['mop'];
$ap=$_GET['amtp'];
$al=$_GET['amtl'];
$ti=$_GET['slot'];
$dt=$_GET['date'];


$query="INSERT INTO booking VALUES ('$ad', '$fn', '$ln', '$mp', '$ap', '$al', '$ti','$dt')";
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