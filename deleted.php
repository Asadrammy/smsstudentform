<?php


$server ="localhost";
$username="root";
$password="";
$db="sms";
$section_id=$_GET['section_id'];
$con= mysqli_connect($server, $username, $password,$db);
if($con){
echo "connected to db";}
else{
   echo"not connected to db";}
   $slc="delete from sections  where section_id='$section_id'";
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