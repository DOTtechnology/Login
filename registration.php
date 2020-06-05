<?php

session_start();

$name =$_POST['name'];
$sname = $_POST['shopname'];
$Email =$_POST['email'];
$contact =$_POST['number'];
$pass =$_POST['password'];
$conpass =$_POST['passwordrep'];
$add = $_POST['address'];
$City =$_POST['city'];
$State =$_POST['state'];

$connect = mysqli_connect('localhost','root','','dot') or die("Connection Failed");

$s="Select * From signup where email='$Email'";

$result=mysqli_query($connect,$s) or die("Query Unsucessfull.");

$num = mysqli_num_rows($result);

if($pass != $conpass)
{
    echo "Password is not same";     
}

else 
{
        if($num == 1)
        {
            echo "Username Already Taken";
        }
       else
        {
            $reg = "Insert into signup(name,shop_name,Email,Contact_Number,password,address_shop,city,state)
                    values('$name','$sname','$Email','$contact','$pass','$add' ,'$City','$State');";
           
            mysqli_query($connect,$reg) or die("Query Unsucessfull");
           header('location:Login.php');
        }
}
?>