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
COVID RECORDS
</title>
</head>

    <body background="C:\MAMP\htdocs\New\img12.jpg">
    <br>
    <br>
    <br>
    <center>
        <h1>COVID RECORDS</h1>
    <center>
    <form action="cov.php" method="get">
    
    <label> Adhaar: </label>       
    <input type="text" name="adhaar" id="adhaar"/> <br> <br>
    <label> Firstname:   </label>
    <input type="text" name="firstname" id="firstname"/> <br><br>
    <label> Lastname: </label>       
    <input type="text" name="lastname" id="lastname"/> <br> <br>
    <label> Affected (Y/N): </label>   
    <input type="text" name="aff" id="aff"/> <br> <br>
    <label> Resedential Address:  </label>       
    <input type="text" name="resa" id="resa"/> <br> <br>

    <input type="submit" value="Submit" name="button">
    
    </form>
    </body>
    </Html>
    

    