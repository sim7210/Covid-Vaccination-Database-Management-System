
<html>
<head> 
<title>
MEDICAL RECORDS
</title>
</head>

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

<Html>
    <head> 
    <title>
    DETAILS
    </title>
    </head>

    <body background="C:\MAMP\htdocs\New\img12.jpg">
    <br>
    <br>
    <br><br>
    <center>
       <h2>CANDIDATE MEDICAL HISTORY SHOULD BE ENTERED HERE.</h2>
        <h1>MEDICAL RECORDS</h1>
    <center>

    
<form action="md.php" method="get" >

    <label> Adhaar: </label>       
   <input type="text" name="adhaar" id="adhaar"/> <br> <br>
   <label> Firstname:   </label>
   <input type="text" name="firstname" id="firstname"/> <br><br>
   <label> Lastname: </label>       
   <input type="text" name="lastname" id="lastname"/> <br> <br>
   <label> Anyissues: </label>   
   <input type="text" name="annyissue" id="anyissue"/> <br> <br>
   <label> Residential Address:  </label>       
   <input type="text" name="resadd" id="resadd"/> <br> <br>


   <input type="submit" value="Submit" name="button">
</form>

       
    </body>
    </Html>



    