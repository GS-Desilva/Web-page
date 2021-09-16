<?php
include_once 'connection.php';

/*$db="CREATE DATABASE personaldetails;";



if(mysqli_query($con,$db))

{

    echo "Database Created";

}

else

{

    echo "Databse creation failed".mysqli_error($con);

}*/

$usedb="USE personaldetails;";

mysqli_query($con,$usedb);

$table="CREATE TABLE details(uname varchar(20),cnum int(10),comments varchar(50),mail varchar(30));";

if(mysqli_query($con,$table))
{
echo "table is created";

}
else
{
echo"table creation failed".mysqli_error($con);
}
mysqli_close($con);
?>