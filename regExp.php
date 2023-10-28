
<?php 


if(isset($_POST['submit']))
{

    $email = $_POST['email'];
    $password = $_POST['password'];

    $emailReg ="/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})$/";
    $passReg ="/^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{7,15}$/";


    if(preg_match($emailReg,$email)){
        echo 'valid email'."<br>";
    }else {
        echo 'Invalid email'."<br>";
    }
    if(preg_match($passReg,$password)){
        echo 'valid password'."<br>";
    }else {
        echo 'Invalid password'."<br>";
    }
}



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="regExp.php" method="post">

    <input type="text" name="email" id="">
    <input type="text" name="password" id="">
    <input type="submit" name="submit" id="">
    </form>
</body>
</html>


