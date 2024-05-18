<?php
    session_start();
    
    include("db.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $Firstname = $_POST['Fname'];
        $Lastname = $_POST['Lname'];
        $Password = $_POST['Password'];
        $Gender = $_POST['Gender'];
        $Address = $_POST['Address'];
        $Email = $_POST['Email'];
        $Occupation = $_POST['Occupation'];

        if(!empty($Email) &&!empty($Password) &&!is_numeric($Email))
        {
            $query = "insert into form (Fname, Lname, Password, Gender, Address, Email, Occupation) values ('$Firstname', '$Lastname' , '$Password' , '$Gender' ,'$Address' , '$Email' , '$Occupation')";

            mysqli_query($con, $query);

            echo "<script type='text/javascript'> alert('Registration Successful')</script>";
        }
        else
        {
            echo "<script type='text/javascript'> alert('Enter valid information')</script>";
        }
        
        }

?>
<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <meta name="viewport"  content="width=device-width, initial scale=1">
        <title>Register Form</title>
        <link rel="stylesheet" href="style.css">
</head>
</body>
<div class="signup">
    <h1>Signup</h1>
    <form method="POST">
        <label>First Name</label>
        <input type="text" name="Fname" required>
        <label>Last Name</label>
        <input type="text" name="Lname" required>
        <label>Password</label>
        <input type="Password" name="Password" required>
        <label>Gender</label>
        <input type="text" name="Gender" required>
        <label>Address</label>
        <input type="text" name="Address" required>
        <label>Email Address</label>
        <input type="Email" name="Email" required>
        <label>Occupation</label>
        <input type="Occupation" name="Occupation" required>
        <input type="Submit" name=" " required>

    </form>
    <p>Already have an account? <a href="login.php">Login here</a></p>
</div>
</html>
        


