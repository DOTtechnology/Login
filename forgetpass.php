<?php

$con= mysqli_connect('localhost','root','','dot')or die("Connection Failed");

$email=$_POST['email']

$s= "Select * from signup where email ='$email'";
$result = mysqli_query($con,$s) or die("Query Unsucessfull");

$num = mysqli_num_rows($result);

if($num == 0)
{
    echo "Account Does not exits.";
}
else
{
    
}