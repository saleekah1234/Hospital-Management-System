<?php 
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,'hmsdb');
if(isset($_POST['login_submit'])){
$username=$_POST['username'];
$password=$_POST['password'];
$query="select * from login where username='$username'  and password='$password'";
$result=mysqli_query($con,$query);
$count=mysqli_num_rows($result);

if($count==1)
    {
    header("Location:admin.php");
    }
    else{
        header("Location:index.php");
    }
}
?>