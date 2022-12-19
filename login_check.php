<?php
include('conn.php');
$userid=$_POST['fname'];
$pass=$_POST['pw'];
// echo $userid;
// echo $pass;S

$sql="select * from masterlogin where userid='$userid' and password='$pass' ";
$res=mysqli_query($conn,$sql);
if($result=mysqli_fetch_assoc($res))
{
$_SESSION['fname']=$result['fname'];
header('location:Main_page.php');
}
else
{
header('location:assignment1.html');
}
?>