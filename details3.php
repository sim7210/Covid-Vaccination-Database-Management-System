
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "project1";
$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
   echo "connection ok";
}
else
{
   echo "connection failed" .mysql_connect_error();
}
?>

<html>
<head> 
<title>
DETAILS
</title>
</head>

<body background="C:\MAMP\htdocs\New\img12.jpg">
<br>
<br>
<br>
<center>
    <h2>PLEASE ENTER THE DETAILS OF THE VACCINATED CANDIDATES HERE</h2>
<h1>DETAILS</h1> 
<center>
    <form action="insert2.php" method="get" >

<label> Firstname:   </label>
<input type="text" name="firstname" id="firstname"/> <br><br>
<label> Lastname: </label>       
<input type="text" name="lastname" id="lastname"/> <br> <br>
<label> Adhaar: </label>       
<input type="text" name="adhaar" id="adhaar"/> <br> <br>
<label> Age: </label>   
<input type="text" name="age" id="age"/> <br> <br>
<label> Hospital:  </label>       
<input type="text" name="hospital" id="hospital"/> <br> <br>
<label> Date: </label>   
<input type="text" name="date" id="date"/> <br> <br>

<input type="submit" value="Submit" name="button">
</form>
</body>
</html>