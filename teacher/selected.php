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
   $slc=" select * from teachers";
   $result=mysqli_query($con,$slc);
   echo "<table border='2px'>";
   echo "<tr>";
    echo "<th>"."Teacher id."."</th>";
    echo "<th>"."User Id"."</th>";
    echo "<th>"."first  Name"."</th>";
    echo "<th>"."last Name"."</th>";
    echo "<th>"."Date of birth"."</th>";
    echo "<th>"."Gender"."</th>";
    echo "<th>"."Address"."</th>";
    echo "<th>"."Phone"."</th>";
    echo "<th>"."Email"."</th>";
    echo "<th>"."hire Date"."</th>";
    
    echo "<th colspan='2'>"."change"."</th>";
   echo "</tr>";
   while($row=mysqli_fetch_assoc($result)){
   $teacher_id=$row['teacher_id'];
   echo "<tr>";
   echo "<td>".$row['teacher_id']."</td>";
   echo "<td>".$row['user_id']."</td>";
   echo "<td>".$row['first_name']."</td>";
   echo "<td>".$row['last_name']."</td>";
   echo "<td>".$row['date_of_birth']."</td>";
   echo "<td>".$row['gender']."</td>";
   echo "<td>".$row['address']."</td>";
   echo "<td>".$row['phone']."</td>";
   echo "<td>".$row['email']."</td>";
   echo "<td>".$row['hire_date']."</td>";
   
   echo "<td>"."<a href='edited.php?teacher_id=".$teacher_id."'>"."Edit"."</a>"."</td>";
   echo "<td>"."<a href='deleted.php?teacher_id=".$teacher_id."'>"."Delete"."</a>"."</td>";

    echo "</tr>";
}
echo "</table>";

?>