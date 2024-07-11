<?php

$name=$_POST['username'];
$word=$_POST['password'];
$role=$_POST['role'];
$created_at=$_POST['created_at'];

$user_id=$_POST['user_id'];

$server ="localhost";
$username="root";
$password="";
$db="sms";
//$sno=$_GET['sno'];
$con= mysqli_connect($server, $username, $password,$db);
if($con){
echo "connected to db";}
else{
   echo"not connected to db";}
   $slc="update users set username='$name',password='$word',role='$role',created_at='$created_at' where user_id='$user_id'";
   $result=mysqli_query($con,$slc);
   if($result){
      echo "<script>
  window.alert('deleted');
  </script>";
      header('location:table.php');
  }
      else{
         echo"not deleted to db";}
         ?>