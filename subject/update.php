<?php

$subject_name=$_POST['subject_name'];
$class_id=$_POST['class_id'];
$teacher_id=$_POST['teacher_id'];



$subject_id=$_POST['subject_id'];

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
   $slc="update subjects set subject_name='$subject_name',class_id='$class_id',teacher_id='$teacher_id' where subject_id='$subject_id'";
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