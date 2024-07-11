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
   $slc=" select * from exams";
   $result=mysqli_query($con,$slc);
   echo "<table border='2px'>";
   echo "<tr>";
    echo "<th>"."Exam id."."</th>";
    echo "<th>"."Subject id"."</th>";
    echo "<th>"."Exam date"."</th>";
    echo "<th>"."Total Marks"."</th>";
    echo "<th colspan='2'>"."change"."</th>";
   echo "</tr>";
   while($row=mysqli_fetch_assoc($result)){
   $exam_id=$row['exam_id'];
   echo "<tr>";
   echo "<td>".$row['exam_id']."</td>";
   echo "<td>".$row['subject_id']."</td>";
   echo "<td>".$row['exam_date']."</td>";
   echo "<td>".$row['total_marks']."</td>";
   echo "<td>"."<a href='editform.php?exam_id=".$exam_id."'>"."Edit"."</a>"."</td>";
   echo "<td>"."<a href='delete.php?exam_id=".$exam_id."'>"."Delete"."</a>"."</td>";

    echo "</tr>";
}
echo "</table>";

?>