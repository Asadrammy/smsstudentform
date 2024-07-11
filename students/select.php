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
   $slc=" select * from students";
   $result=mysqli_query($con,$slc);
   echo "<table border='2px'>";
   echo "<tr>";
    echo "<th>"."Student Id."."</th>";
    echo "<th>"."user Id"."</th>";
    echo "<th>"."Student Name"."</th>";
    echo "<th>"."Father Name"."</th>";
    echo "<th>"."Date of birth"."</th>";
    echo "<th>"."Gender"."</th>";
    echo "<th>"."Address"."</th>";
    echo "<th>"."Phone"."</th>";
    echo "<th>"."Email"."</th>";
    echo "<th>"."Enrolled Date"."</th>";
    echo "<th>"."Father Cnic"."</th>";
    echo "<th>"."Student B_form"."</th>";
    echo "<th colspan='2'>"."change"."</th>";
   echo "</tr>";
   while($row=mysqli_fetch_assoc($result)){
   $student_id=$row['student_id'];
   echo "<tr>";
   echo "<td>".$row['student_id']."</td>";
   echo "<td>".$row['user_id']."</td>";
   echo "<td>".$row['student_name']."</td>";
   echo "<td>".$row['father_name']."</td>";
   echo "<td>".$row['date_of_birth']."</td>";
   echo "<td>".$row['gender']."</td>";
   echo "<td>".$row['address']."</td>";
   echo "<td>".$row['phone']."</td>";
   echo "<td>".$row['email']."</td>";
   echo "<td>".$row['enrolled_date']."</td>";
   echo "<td>".$row['father_cnic']."</td>";
   echo "<td>".$row['student_bform']."</td>";
   echo "<td>"."<a href='editing.php?student_id=".$student_id."'>"."Edit"."</a>"."</td>";
   echo "<td>"."<a href='delete.php?student_id=".$student_id."'>"."Delete"."</a>"."</td>";

    echo "</tr>";
}
echo "</table>";

?>