<?php



$server ="localhost";
$username="root";
$password="";
$db="sms";
$result_id=$_GET['result_id'];
$con= mysqli_connect($server, $username, $password,$db);
/*if($con){
echo "connected to db";}
else{
   echo"not connected to db";}*/
   $slc=" select * from exam_results where result_id='$result_id'";
   $result=mysqli_query($con,$slc);
   while($row=mysqli_fetch_assoc($result)){
    $result_id=$row['result_id'];

    $exam_id=$row['exam_id'];
    $student_id=$row['student_id'];
    $obtained_marks=$row['obtained_marks'];
   }
   ?>

<form action="update.php" method="POST">
<input type="hidden"  name="result_id" value="<?php echo $result_id;?>"><br><br>
    <label>exam_id:</label>
<input type="id" name="exam_id" value="<?php echo $exam_id;?>"><br><br>
<label>student id:</label>
<input type="id" name="student_id" value="<?php echo $student_id;?>"><br><br>
<label>Obtained marks:</label>
<input type="marks" name="obtained_marks" value="<?php echo $obtained_marks;?>"><br><br>


<input type="submit" Value="updated"/>
</form>