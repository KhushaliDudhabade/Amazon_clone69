<?php include('admin-server.php');
if (isset($_POST['ad-submit']))
{
$mail = $_POST['email'];
$mob = $_POST['mobile'];
$pass = $_POST['password'];

$qry ="INSERT INTO `signup_form`(`Id`, `Email`, `Mobile`, `Password`) VALUES ('null','$mail','$mob','$pass')";
$result = mysqli_query($db, $qry);
if ($result)
{
  echo "Your data successfully registered. Thank you!!<br>";
  echo "Sign In Now";
}
else
{
  echo "We are unable to got your data. Please try again...";
}

}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amazon Sign Up</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="sign-style.css">
</head>
<body>
    <div class="container">
    
        <div class="logo" style="width: 100px;height:30px;left:45%;">  
        </div>
        <!-- <div class="alert alert-success" role="alert" style="width:40%">
             Success : You have successfully Signed up!!
            </div> -->
        <div class="form-box" style="margin-top: 50px;">
            <form action="admin-signUp.php" method="post">

                <h1>Admin Sign Up Here</h1>
                <div class="input-group">
                
                    <div class="input-field">
                        <label>Email Id</label>
                        <i class="fa-solid fa-user"></i><br>
                        <input type="text" placeholder="Email Id" name="email">
                    </div>
                    <div class="input-field">
                        <label>Mobile Number</label>
                        <i class="fa-solid fa-phone"></i><br>
                        <select><option>+91</option></select><input type="text" placeholder="Mobile Number" name="mobile">
                    </div>

                    <div class="input-field">
                        <label>Password</label>
                        <i class="fa-solid fa-lock"></i><br>
                        <input type="password" placeholder="Password" name="password">
                    </div>
                </div>
                <p>Passwords must be at least 6 characters.</p>
                
                <button type="submit" class="continue" name="ad-submit">Create Account</button>
                
                <hr>
                <p>Buying for work? <br>
                <span>Shop on Amazon Business</span></p>
            </form>

        <p>Already have an account? <span><a href="admin-signin.php" style="color: rgb(3, 69, 192);font-weight: 600;text-decoration: none;font-size: 20px;">Sign in</a> </span><br>
            By creating an account or logging in, you agree to Amazon’s <span> Conditions of Use and Privacy Policy.</span></p>
    
        </div>
    </div>
</body>
</html>