<?php


$server ="localhost";
$username="root";
$password="";
$db="sms";
$teacher_id=$_GET['teacher_id'];
$con= mysqli_connect($server, $username, $password,$db);
if($con){
echo "connected to db";}
else{
   echo"not connected to db";}
   $slc="delete from teachers  where teacher_id='$teacher_id'";
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