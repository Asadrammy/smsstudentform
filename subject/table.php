<?php


$servername="localhost";
$username="root";
$password="";
$db="sms";
$con= mysqli_connect($servername, $username, $password,$db);
/*if($con){
echo "connected to db";}
else{
   echo"not connected to db";}*/
   $slc=" select * from subjects";
   $result=mysqli_query($con,$slc);
   echo "<table border='2px'>";
   echo "<tr>";
    echo "<th>"."Subject id."."</th>";
    echo "<th>"."Subject Name"."</th>";
    echo "<th>"."Class id"."</th>";
    echo "<th>"."Teacher id"."</th>";
    echo "<th colspan='2'>"."change"."</th>";
   echo "</tr>";
   while($row=mysqli_fetch_assoc($result)){
   $subject_id=$row['subject_id'];
   echo "<tr>";
   echo "<td>".$row['subject_id']."</td>";
   echo "<td>".$row['subject_name']."</td>";
   echo "<td>".$row['class_id']."</td>";
   echo "<td>".$row['teacher_id']."</td>";
   echo "<td>"."<a href='editform.php?subject_id=".$subject_id."'>"."Edit"."</a>"."</td>";
   echo "<td>"."<a href='delete.php?subject_id=".$subject_id."'>"."Delete"."</a>"."</td>";

    echo "</tr>";
}
echo "</table>";

?>