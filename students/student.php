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
$sql="SELECT * FROM `classes`";
$result=mysqli_query($con,$sql);

//echo "connecting to the database "
$user_id=$_POST['user_id'];
$student_name=$_POST['student_name'];
$father_name=$_POST['father_name'];
$date_of_birth=$_POST['date_of_birth'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$enrolled_date=$_POST['enrolled_date'];
$father_cnic=$_POST['father_cnic'];
$student_bform=$_POST['student_bform'];

$sql="INSERT INTO `students` (`user_id`, `student_name`, `father_name`, `date_of_birth`, `gender`, `address`, `phone`, `email`, `enrolled_date`, `father_cnic`, `student_bform`) VALUES ('$user_id', '$student_name', '$father_name', '$date_of_birth', '$gender', '$address', '$phone', '$email', '$enrolled_date', '$father_cnic', '$student_bform')";
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
$server="localhost";
$username="root";
$password="";
$db="sms";
$con=mysqli_connect($server,$username,$password,$db);
if(!$con){
    die("connection to this database failed due to".
    mysqli_connect_error());
}
$sql="SELECT * FROM `classes`";
$result=mysqli_query($con,$sql);




?>









<!--INSERT INTO `students` (`student_id`, `user_id`, `student_name`, `father_name`, `date_of_birth`, `gender`, `address`, `phone`, `email`, `enrolled_date`, `father_cnic`, `student_bform`) VALUES (NULL, '1', 'Asad Rammy', 'Asif Rammy', '2005-05-19', 'male', 'chichawatni Sahiwal ', '0314-0479594', 'asadrammy9594@gmail.com', '2024-06-10', '36501-039', '36501-7017')-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student form</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
        margin: 0;
        padding: 0;
    }
    form {
        max-width: 600px;
        margin: 20px auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    label {
        display: block;
        margin-bottom: 8px;
    }
    input[type="text"],
    input[type="date"],
    input[type="email"],
    input[type="phone"],
    input[type="cnic"],
    select {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }
    input[type="radio"],
    input[type="checkbox"] {
        margin-right: 10px;
    }
    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
    }
    input[type="submit"]:hover {
        background-color: #45a049;
    }
    h4 {
        margin-top: 0;
    }
    h2 {
        text-align: center;
        margin-bottom: 20px;
    }
</style>
</head>
<body>
<h2>Student Admission form</h2>
<form action="student.php" method="POST">
<label>Class:</label>
<select>


        <?php while ($row=mysqli_fetch_array($result)):;?>
        <option value="<?php echo $row[0];?>"><?php echo $row[1];?></option>
        <?php endwhile;?>
</select>
<label>section:</label>
<?php $sql="SELECT * FROM `sections`";
$result=mysqli_query($con,$sql);?>
<select>
        <?php while ($row=mysqli_fetch_array($result)):;?>
        <option value="<?php echo $row[0];?>"><?php echo $row[1];?></option>
        <?php endwhile;?>
</select>
    <label>user_id:</label>
<input type="id" id="student" name="user_id" placeholder="Enter user_id"><br><br>
<label>Student name:</label>
<input type="text" id="name" name="student_name" placeholder="Enter student name"><br><br>
<label>Father name:</label>
<input type="text" id="father" name="father_name" placeholder="Enter father name"><br><br>
<label>Date of Birth:</label>
<input type="date" id="birthday" name="date_of_birth" ><br><br>
<h4>Gender</h4>
<label>Male</label>
<input type="radio" id="male" name="gender" value="male"><br>
<label>Female</label>
<input type="radio" id="female" name="gender" value="female"><br>
<label>other</label>
<input type="radio" id="other" name="gender" value="other"><br><br>
<label>Address:</label>
<input type="text" id="adress" name="address" placeholder="Enter your address"><br><br>
<label>Phone:</label>
<input type="phone" id="phone" name="phone" placeholder="Enter phone number"><br><br>
<label>Email:</label>
<input type="email" id="email" name="email" placeholder="Enter email address"><br><br>
<label>Enrolled date:</label>
<input type="date" id="enrolled" name="enrolled_date" placeholder="Enter enroll date"><br><br>
<label>Father cnic:</label>
<input type="cnic" id="cnic" name="father_cnic" placeholder="Enter father cnic"><br><br>
<label>student B-form:</label>
<input type="cnic" id="form" name="student_bform" placeholder="Enter student B-form"><br><br>
<input type="submit" Value="Add Student"/>
</form>



</body>
</html>