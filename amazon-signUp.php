<?php include('server.php') ?>
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
            <form action="amazon-signUp.php" method="post">

                <h1>Sign Up Here</h1>
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
                <div style="font-size:20px">Want to sign in as a Admin <a href="admin-signin.php" style="font-size: 25px;text-decoration: none;color: blue;">Click Here</a></div>
                <button type="submit" class="continue" name="submit">Create Account</button>
                
                <hr>
                <p>Buying for work? <br>
                <span>Shop on Amazon Business</span></p>
            </form>

        <p>Already have an account? <span><a href="amazon-signin.php" style="color: rgb(3, 69, 192);font-weight: 500;text-decoration: none;">Sign in</a> </span><br>
            By creating an account or logging in, you agree to Amazon’s <span> Conditions of Use and Privacy Policy.</span></p>
    
        </div>
    </div>
</body>
</html>