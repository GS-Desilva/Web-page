<?php

$servername="localhost";

$username="root";

$password="";

$dbname="personaldetails";



// mysqli_connect($uname,$cnum,$comments,$mail)

$con=mysqli_connect("localhost","root","","personaldetails");



 if($con)

{

    echo "Connection successful";

}

else

{

    echo "Connection failed".mysqli_error($con);

}

 



?>