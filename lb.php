

















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="lb.php" method="POST">
<label>Class:</label>
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
































