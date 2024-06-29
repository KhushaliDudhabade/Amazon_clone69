<?php

$db = mysqli_connect('localhost', 'root', '', 'amazon_db');
// if($db==true){
//   echo "Connection was successful<br>";
// }

if (isset($_POST['submit']))
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
// LOGIN USER
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (isset($_POST['login']))  {
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
   header("location:index.php");
  }
   else{
   $showerror ="Invalid Credentials";
   echo $showerror;
}

}
}


?>