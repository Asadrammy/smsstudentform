<?php

$exam_id=$_POST['exam_id'];
$student_id=$_POST['student_id'];
$obtained_marks=$_POST['obtained_marks'];



$result_id=$_POST['result_id'];

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
   $slc="update exam_results set exam_id='$exam_id',student_id='$student_id',obtained_marks='$obtained_marks' where result_id='$result_id'";
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