
<!------ Include the above in your HEAD tag ---------->
<?php 
$db=mysqli_connect("localhost","root","","login");
if($db==TRUE)

?>
<!DOCTYPE html>
<html lang="en">

    <head> 

  <link rel="stylesheet" href="login.css">

	</head>
	<body>
	<center>
	  <div class="mainbox">
		<form method="POST" style="border:1px solid #ccc">

    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" >

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" >

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="re_psw" >

    

 
    <div class="clearfix">
    
     <center> <button type="submit" class="signupbtn" name="submit" value="submit">Sign Up</button></center>
    </div>
  </div>
</form>
<?php 
if (isset($_POST['submit']))
{

$email=$_POST['email'];
$psw=$_POST['psw'];
$re_psw=$_POST['re_psw'];


$sql="INSERT INTO `signup`( `email`, `password`, `repeatpassword`) VALUES ('".$email."','".$psw."','".$re_psw."') ";

$query=mysqli_query($db,$sql);

if($query>0)
{
	Echo "You succesfully registered";
	
	
}
else{echo "error in connection";}
	
}
?>
</center>
	</body>
</html>
