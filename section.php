<?php
$insert=false;
if(isset($_POST['section_name']))
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
$section_name=$_POST['section_name'];


$sql="INSERT INTO `sections` ( `section_name`) VALUES ( '$section_name');";
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
$sql="SELECT * FROM `sections`";
$result=mysqli_query($con,$sql);
?>

<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sms</title>
</head>
<body>
    <form action="section.php" method="POST">
    <label>Section name:</label>
<input type="text" id="section_name" name="section_name" placeholder="Enter your section name"><br><br>
<button>submit</button>
</form>
</body>
</html>-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Section Form</title>
</head>
<body>

    <form action="section.php" method="POST">
        <label for="section">Section:</label>
        <select>
        <?php while ($row=mysqli_fetch_array($result)):;?>
        <option value="<?php echo $row[0];?>"><?php echo $row[1];?></option>
        <?php endwhile;?>
        </select>
        <button type="submit">Submit</button>
    </form>
        
    
</body>
</html>