<?php
$insert=false;
if(isset($_POST['subject_name']))
{
$server="localhost";
$username="root";
$password="";
$db="sms";
$con=mysqli_connect($server,$username,$password,$db);
if(!$con){
    die("connection to this database failed due to".
    mysqli_connect_error());
}
//echo "connecting to the database "
$subject_name=$_POST['subject_name'];
$class_id=$_POST['class_id'];
$teacher_id=$_POST['teacher_id'];

$sql="INSERT INTO `subjects` ( `subject_name`, `class_id`, `teacher_id`) VALUES ('$subject_name', '$class_id', '$teacher_id');";
//echo $sql;

if ($con->query($sql)==true){
    //echo"successfully inserted";
    $insert=true;
}
else{
echo"ERROR:$sql <br> $con->error";
}
$con->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>subject</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <form action="subject.php" method="POST">
        <label>Subject Name:</label>
        <input type="text" name="subject_name" placeholder="Enter subject name"><br><br>
        <label>Class ID:</label>
        <input type="text" name="class_id" placeholder="Enter class id"><br><br>
        <label>Teacher ID:</label>
        <input type="text" name="teacher_id" placeholder="Enter teacher id"><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>