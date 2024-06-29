<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amazon Sign In</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="sign-style.css">
</head>
<body>
    <div class="container">
        <div class="logo">

        </div>
        <div class="form-box">
            <form method="post" action="amazon-signin.php">

                <h1>Sign in</h1>
                <div class="input-group">
                
                    <div class="input-field">
                        <label>Email or mobile number</label>
                        <i class="fa-solid fa-envelope"></i><br>
                        <input type="text" placeholder="Email" name="email">
                    </div>

                    <div class="input-field">
                        <label>Password</label>
                        <i class="fa-solid fa-lock"></i><br>
                        <input type="password" placeholder="Password" name="password">
                    </div>
                </div>
                <button type="submit" class="continue" name="login">Continue</button>
                <p>By continuing, you agree to Amazon's <span> Conditions of Use and Privacy Notice.</span></p>
                <div style="font-size:20px">Want to sign in as a Admin <a href="admin-signin.php" style="font-size: 25px;text-decoration: none;color: blue;">Click Here</a></div>
                <hr>
                <p>Buying for work? <br>
                <span>Shop on Amazon Business</span></p>
            </form>

        <p>New to Amazon?</p>
        <div class="create-new">
           <a href="amazon-signUp.php"> Create Your Amazon Account </a>
        </div>
        </div>
    </div>
</body>
</html>