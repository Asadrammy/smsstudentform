<?php

$user_id=$_POST['user_id'];
$student_name=$_POST['student_name'];
$father_name=$_POST['father_name'];
$date_of_birth=$_POST['date_of_birth'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$enrolled_date=$_POST['enrolled_date'];
$father_cnic=$_POST['father_cnic'];
$student_bform=$_POST['student_bform'];
$student_id=$_POST['student_id'];

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
   $slc="update students set user_id='$user_id',student_name='$student_name',father_name='$father_name',date_of_birth='$date_of_birth', gender='$gender', address='$address', phone='$phone', email='$email', enrolled_date='$enrolled_date', father_cnic='$father_cnic', student_bform='$student_bform' where student_id='$student_id'";
   $result=mysqli_query($con,$slc);
   if($result){
      echo "<script>
  window.alert('deleted');
  </script>";
      header('location:select.php');
  }
      else{
         echo"not deleted to db";}
         ?>