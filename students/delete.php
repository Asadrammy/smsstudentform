<?php


$server ="localhost";
$username="root";
$password="";
$db="sms";
$student_id=$_GET['student_id'];
$con= mysqli_connect($server, $username, $password,$db);
if($con){
echo "connected to db";}
else{
   echo"not connected to db";}
   $slc="delete from students  where student_id='$student_id'";
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
       