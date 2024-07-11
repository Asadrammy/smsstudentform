<?php

$subject_id=$_POST['subject_id'];
$exam_date=$_POST['exam_date'];
$total_marks=$_POST['total_marks'];



$exam_id=$_POST['exam_id'];

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
   $slc="update exams set subject_id='$subject_id',exam_date='$exam_date',total_marks='$total_marks' where exam_id='$exam_id'";
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