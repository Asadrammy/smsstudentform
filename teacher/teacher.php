<?php
$insert=false;
if(isset($_POST['user_id']))
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
$user_id=$_POST['user_id'];
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$date_of_birth=$_POST['date_of_birth'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$hire_date=$_POST['hire_date'];

$sql="INSERT INTO `teachers` (`user_id`, `first_name`, `last_name`, `date_of_birth`, `gender`, `address`, `phone`, `email`, `hire_date`) VALUES ('$user_id', '$first_name', '$last_name', '$date_of_birth', '$gender', '$address', '$phone', '$email', '$hire_date')";
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
    <title>Teacher Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>Teacher Form</h2>

    <form action="teacher.php" method="POST">
        <label>User ID:</label>
        <input type="id" name="user_id" placeholder="Enter User ID"><br><br>

        <label>First Name:</label>
        <input type="text" name="first_name" placeholder="Enter First Name"><br><br>

        <label>Last Name:</label>
        <input type="text" name="last_name" placeholder="Enter Last Name"><br><br>

        <label>Date of Birth:</label>
        <input type="date" name="date_of_birth"><br><br>

        <h4>Gender</h4>
        <label>Male</label>
        <input type="radio" name="gender" value="male"><br>
        <label>Female</label>
        <input type="radio" name="gender" value="female"><br>
        <label>Other</label>
        <input type="radio" name="gender" value="other"><br><br>

        <label>Address:</label>
        <input type="text" name="address" placeholder="Enter Your Address"><br><br>

        <label>Phone:</label>
        <input type="phone" name="phone" placeholder="Enter Phone Number"><br><br>

        <label>Email:</label>
        <input type="email" name="email" placeholder="Enter Email Address"><br><br>

        <label>Hire Date:</label>
        <input type="date" name="hire_date"><br><br>

        <input type="submit" value="Add Teacher"/>
    </form>

</body>
</html>