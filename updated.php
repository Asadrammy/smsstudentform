<?php

$section_name=$_POST['section_name'];
$section_id=$_POST['section_id'];
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
   $slc = "UPDATE sections SET section_name='$section_name' WHERE section_id='$section_id'";
   //echo $slc;
   $result=mysqli_query($con,$slc);
   if($result){
      echo "<script>
  window.alert('deleted');
  </script>";
      header('location:tabled.php');
  }
      else{
         echo"not deleted to db";}
         ?>