<?php

$class_name=$_POST['class_name'];
$class_id=$_POST['class_id'];
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
 
   $slc="update classes set class_name='$class_name' where class_id='$class_id'";

   //echo $slc;
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