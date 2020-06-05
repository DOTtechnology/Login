<?php

$conn = mysqli_connect('localhost','root','','dot') or die("Connection Failed Login to Database");

$email =$_POST['user_id'];
$password =$_POST['pass'];
	$rs=mysqli_query($conn,"select * from signup where email='$email' and password='$password'");
	if(mysqli_num_rows($rs)<1)
	{
		$found="Not Registered";
         header('location: login.php');
	}
    
	else
	{
		$_SESSION["login"]=$email;
        $_SESSION["sname"]=$sname;
        header('location: ../management-dashboard/Item.php');
	}

if (isset($_SESSION["login"]))
{
echo  "<h1 align=center>Hye you are sucessfully login!!!</h1>" ;
exit;
}
?>