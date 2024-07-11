<?php



$server ="localhost";
$username="root";
$password="";
$db="sms";
$subject_id=$_GET['subject_id'];
$con= mysqli_connect($server, $username, $password,$db);
/*if($con){
echo "connected to db";}
else{
   echo"not connected to db";}*/
   $slc=" select * from subjects where subject_id='$subject_id'";
   $result=mysqli_query($con,$slc);
   while($row=mysqli_fetch_assoc($result)){
    $subject_id=$row['subject_id'];

    $subject_name=$row['subject_name'];
    $class_id=$row['class_id'];
    $teacher_id=$row['teacher_id'];
   }
   ?>

<form action="update.php" method="POST">
<input type="hidden"  name="subject_id" value="<?php echo $subject_id;?>"><br><br>
    <label>subject name:</label>
<input type="id" name="subject_name" value="<?php echo $subject_name;?>"><br><br>
<label>class id:</label>
<input type="id" name="class_id" value="<?php echo $class_id;?>"><br><br>
<label>Teacher id:</label>
<input type="text" name="teacher_id" value="<?php echo $teacher_id;?>"><br><br>
<input type="submit" Value="updated"/>
</form>