
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

    <h1>LOG IN</h1>
    <p>Please fill in this form for log in.</p>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" >

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" >

   

 
    <div class="clearfix">
    
     <center> <button type="submit" class="signupbtn" name="submit" value="submit">log IN</button></center>
    </div>
  </div>
</form>
<?php 
if (isset($_POST['submit']))
{

$email=$_POST['email'];
$psw=$_POST['psw'];



$sql="SELECT  `email`, `password` FROM `signup` WHERE 1";

$query=mysqli_query($db,$sql);
$data=mysqli_fetch_row($query);
if($data>0)
{
	Echo "You succesfully log in ";
	
	
}
else{echo "error in log in";}
	
}
?>
</center>
	</body>
</html>
