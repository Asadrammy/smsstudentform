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
   $slc=" select * from exam_results";
   $result=mysqli_query($con,$slc);
   echo "<table border='2px'>";
   echo "<tr>";
    echo "<th>"."Result id."."</th>";
    echo "<th>"."Exam Id"."</th>";
    echo "<th>"."Student id"."</th>";
    echo "<th>"."Obtained marks"."</th>";
    echo "<th colspan='2'>"."change"."</th>";
   echo "</tr>";
   while($row=mysqli_fetch_assoc($result)){
   $result_id=$row['result_id'];
   echo "<tr>";
   echo "<td>".$row['result_id']."</td>";
   echo "<td>".$row['exam_id']."</td>";
   echo "<td>".$row['student_id']."</td>";
   echo "<td>".$row['obtained_marks']."</td>";
   echo "<td>"."<a href='editform.php?result_id=".$result_id."'>"."Edit"."</a>"."</td>";
   echo "<td>"."<a href='delete.php?result_id=".$result_id."'>"."Delete"."</a>"."</td>";

    echo "</tr>";
}
echo "</table>";

?>