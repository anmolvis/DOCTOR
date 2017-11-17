<html>
<title>My login page</title>
<head>
    <link rel="stylesheet" href="login.css" type="text/css"/>
<h1>WELCOME TO CAREWELL HOSPITAL...</h1>
    </head>
    <body> 
<div class="loginbox">
        <img src="user-group-icon.png" class="user">
    <h2>Log In Here</h2>
    <form action="#" method="post">
    <p>Patient Id</p>
        <input type="text" name="pid" placeholder="Enter Patient Id">
        <p>Password</p>
        <input type="password" name="password" placeholder="*********">
        <input type="submit" name="submit" value="Sign In">
        <a href="#">Forget Password</a>
        
    </form>
</div>
</body>
</html>

<?php 
$server = "localhost";
$user = "root";
$password="123";
$dbase="ost";
$conn = mysqli_connect($server,$user,$password,$dbase);
if($conn->connect_error)
    die("connection Failed".$conn->connect_error);
$sql="Select * from Patient";
$result= mysqli_query($conn,$sql);
$iid=$_POST[pid];
while($a=mysqli_fetch_array($result)){
    if($a['Id']==$iid)
    {
        if($a['Password']==$_POST[password]){
            header('location:appointmentpage.php');
        }
        else
        {
            echo '<script>alert("Enter the password correctly");</script>';
        }
    }
}
?>