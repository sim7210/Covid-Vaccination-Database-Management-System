<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "project1";
$conn = mysqli_connect($servername,$username,$password,$dbname);
//$id=$_GET['id'];
$fn=$_GET['firstname'];
$ln=$_GET['lastname'];
$ad=$_GET['adhaar'];
$ag=$_GET['age'];
$hs=$_GET['hospital'];
$dt=$_GET['date'];

$query="INSERT INTO details VALUES ('$fn', '$ln', '$ad', '$ag','$hs', '$dt')";
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