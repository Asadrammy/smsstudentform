<?php


$server ="localhost";
$username="root";
$password="";
$db="sms";
$exam_id=$_GET['exam_id'];
$con= mysqli_connect($server, $username, $password,$db);
if($con){
echo "connected to db";}
else{
   echo"not connected to db";}
   $slc="delete from exams where exam_id='$exam_id'";
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