
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
    BOOKING
    </title>
    </head>

    <body background="C:\MAMP\htdocs\New\img12.jpg">
    <br>
    <br>
    <form action="slot.php" method="get">
    <center>
        <h1>SLOT BOOKING AND PAYMENT DETAILS</h1>

    <label> Adhaar: </label>       
    <input type="text" name="adhaar" id="adhaar"/> <br> <br>
    <label> Firstname: </label>   
    <input type="text" name="firstname" id="firstname"/> <br> <br>
    <label> Lastname: </label>       
    <input type="text" name="lastname" id="lastname"/> <br> <br>
    <label> Mode of payment:  </label>       
    <input type="text" name="mop" id="mop"/> <br> <br>
    <label> Amount Paid: </label>   
    <input type="text" name="amtp" id="amtp"/> <br> <br>
    <label> Amount Left: </label>   
    <input type="text" name="amtl" id="amtl"/> <br> <br>
    <label>Slot Time: </label>   
    <input type="slot" name="slot" id="slot"/> <br> <br>
    <label>Slot Date: </label>   
    <input type="text" name="date" id="date"/> <br> <br>
     
    <input type="submit" value="Submit" name="button"> 
</center>

    </form>
    </body>
    </Html>

    
    