<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "project1";
$conn = mysqli_connect($servername,$username,$password,$dbname);
//$id=$_GET['id'];
$ad=$_GET['adhaar'];
$fn=$_GET['firstname'];
$ln=$_GET['lastname'];
$ag=$_GET['aff'];
$hs=$_GET['resa'];

$query="INSERT INTO covrec VALUES ('$ad', '$fn', '$ln', '$ag','$hs')";
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