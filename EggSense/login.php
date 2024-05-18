<?php
    session_start();
    
    include("db.php");
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $Email = $_POST['Email'];
        $Password = $_POST['Password'];

        if(!empty($Email) &&!empty($Password) &&!is_numeric($Email))
        {
           $query = "select * from form where email = '$Email' limit 1";
           $result = mysqli_query($con, $query);
           
           if($result)
           {
            if($result && mysqli_num_rows($result) > 0)
            {
                $user_data = mysqli_fetch_assoc($result);

                if($user_data['Password'] == $Password)
                {
                    header("location: index.php");
                    die;
                }
            }
            
           }
           echo "<script type='text/javascript'> alert('Wrong Username or Password')</script>";
        }
        else{
            echo "<script type='text/javascript'> alert('Wrong Username or Password')</script>";
        }
    }

?>


<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <meta name="viewpoert"  content="width=device-width, initial scale=1">
        <title>Register Form</title>
        <link rel="stylesheet" href="style.css">
</head>
<body> 
    <div class="login">
        <h1>Login</h1>
        <form method="POST">
            <label>Email Address</label>
            <input type="Email" name="Email" required>
            <label>Password</label>
            <input type="Password" name="Password" required>
            <input type="Submit" name=" " required>
    
        </form>
        <p>Dont have an account yet? <a href="signup.php">Signup Here</a></p>
        </p>
</body>
</html>