<?php session_start(); ?>
<?php require 'connection/connection.php' ?>

<?php 


// signup code start
if(isset($_POST['signup']))
{

  $signUpEmail = $_POST['signUpEmail'];
  $signUpPassword = $_POST['signUpPassword'];
  $signUpConfirmPassword = $_POST['signUpConfirmPassword'];
  
  $password_hash = password_hash($signUpPassword, PASSWORD_BCRYPT);



  if(empty($signUpEmail) || empty($signUpPassword) || empty($signUpConfirmPassword))
  {


    echo "<script>alert('Kindly fill all the feilds')</script>";

  }
  else
  {
    if($signUpPassword == $signUpConfirmPassword)
    {
  

      $signup_query = "INSERT INTO `signup`(`email`, `password`) VALUES (:email, :password)";

      $signup_prepare = $connection->prepare($signup_query);
      $signup_prepare->bindParam(':email', $signUpEmail);
      $signup_prepare->bindParam(':password', $password_hash);
      $signup_prepare->execute();
      echo "<script>alert('User Registerd Successfully')</script>";
      // header('location:login.php');




    }
    else
    {

      echo "<script>alert('Kindly verify your password')</script>";
    }


  }







}
// signup code end

$login_query = "SELECT * FROM `signup`";
$login_prepare = $connection->prepare($login_query);
$login_prepare->execute();
$user_data = $login_prepare->fetchAll(PDO::FETCH_ASSOC);

print_r($user_data);

// Login Code Start
if(isset($_POST['loginBtn']))
{
  $email = $_POST['email'];
  $password = $_POST['password'];
  if(empty($email) || empty($password))
  {
    echo "<script>alert('Kindly fill all the fields')</script>";
  }
  else
  {

    $userNotFound = false;
   
  foreach($user_data as $user)
  {
    if($user['email'] === $email && password_verify($password, $user['password']))
    {
    echo "<script>alert('Login Successfully')</script>";
    $_SESSION['email'] = $email;
      header('location:index.php');
    }
    else
    {
    $userNotFound = true;
    
    }
  }

  if($userNotFound)
  {
    echo "<script>alert('Incorrect username or password')</script>";
    
  }









  }

}



?>





<!DOCTYPE html>
<!---Coding By CoderGirl | www.codinglabweb.com--->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login & Registration Form | CoderGirl</title>
  <!---Custom CSS File--->
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <div class="container">
    <input type="checkbox" id="check">
    <div class="login form">
      <header>Login</header>
      <form action="login.php" method="post">
        <input type="text" placeholder="Enter your email" name="email">
        <input type="password" placeholder="Enter your password" name="password">
        <a href="#">Forgot password?</a>
        <input type="submit" class="button" value="Login" name="loginBtn">
      </form>
      <div class="signup">
        <span class="signup">Don't have an account?
         <label for="check">Signup</label>
        </span>
      </div>
    </div>
    <div class="registration form">
      <header>Signup</header>
      <form action="login.php" method="post">
        <input type="text" placeholder="Enter your email" name="signUpEmail">
        <input type="password" placeholder="Create a password" name="signUpPassword">
        <input type="password" placeholder="Confirm your password" name="signUpConfirmPassword">
        <input type="submit" class="button" value="Signup" name="signup">
      </form>
      <div class="signup">
        <span class="signup">Already have an account?
         <label for="check">Login</label>
        </span>
 
      </div>
    </div>
  </div>
</body>
</html>
