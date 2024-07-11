<?php

$user_id=$_POST['user_id'];
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$date_of_birth=$_POST['date_of_birth'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$hire_date=$_POST['hire_date'];


$teacher_id=$_POST['teacher_id'];

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
   $slc="update teachers set user_id='$user_id',first_name='$first_name',last_name='$last_name',date_of_birth='$date_of_birth', gender='$gender', address='$address', phone='$phone', email='$email', hire_date='$hire_date' where teacher_id='$teacher_id'";
   $result=mysqli_query($con,$slc);
   if($result){
      echo "<script>
  window.alert('deleted');
  </script>";
      header('location:selected.php');
  }
      else{
         echo"not deleted to db";}
         ?>