<?php


$server ="localhost";
$username="root";
$password="";
$db="sms";
$subject_id=$_GET['subject_id'];
$con= mysqli_connect($server, $username, $password,$db);
if($con){
echo "connected to db";}
else{
   echo"not connected to db";}
   $slc="delete from subjects where subject_id='$subject_id'";
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