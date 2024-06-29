<?php include('admin-server.php');
// LOGIN USER
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['ad-login']))  {
      $mail = $_POST['email'];
      $pass = $_POST['password'];
    
      $query = "select * from signup_form where Email='$mail' AND Password='$pass'";
      $result = mysqli_query($db, $query);
      $num= mysqli_num_rows($result);
      
      if($num>=1){
       $login=true;
       session_start();
       $_SESSION['loggedin']=true;
       $_SESSION['email']=$mail;
       header("location:dashboard.php");
      }
       else{
       $showerror ="Invalid Credentials";
       echo $showerror;
    }
    
    }
    }
    
?>
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
            <form method="post" action="admin-signin.php">

                <h1>Admin Sign in</h1>
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
                <button type="submit" class="continue" name="ad-login">Continue</button>
                <p>By continuing, you agree to Amazon's <span> Conditions of Use and Privacy Notice.</span></p>
                <hr>
                <p>Buying for work? <br>
                <span>Shop on Amazon Business</span></p>
            </form>

        <p>New to Amazon?</p>
        <div class="create-new">
           <a href="admin-signUp.php"> Create Your Amazon Account </a>
        </div>
        </div>
    </div>
</body>
</html>