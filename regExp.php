
<?php 


// if(isset($_POST['submit']))
// {

//     $email = $_POST['email'];
//     $password = $_POST['password'];

//     $emailReg ="/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})$/";
//     $passReg ="/^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{7,15}$/";


//     if(preg_match($emailReg,$email)){
//         echo 'valid email'."<br>";
//     }else {
//         echo 'Invalid email'."<br>";
//     }
//     if(preg_match($passReg,$password)){
//         echo 'valid password'."<br>";
//     }else {
//         echo 'Invalid password'."<br>";
//     }
// }



    if(isset($_POST['submit']))
    {


        $emailRegularExp = '/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/';
        $passRegularExp = '/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/';
        $phoneRegularExp = '/^[0-9]{11}$/';




        if(preg_match($emailRegularExp,$_POST['email'])){
            echo "Your email is correct <br>";
        }
        else
        {
            echo "Your email is incorrect <br>";
        }
        if(preg_match($passRegularExp,$_POST['password'])){
            echo "Your Password is correct <br>";
        }
        else
        {
            echo "Your Password must contains at least one lowercase letter, one uppercase letter, one numeric digit, and one special character <br>";
        }
        if(preg_match($phoneRegularExp,$_POST['phone'])){
            echo "Your Phone is correct <br>";
        }
        else
        {
            echo "Your phone is incorrect <br>";
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
    <input type="text" name="phone" id="">
    <input type="submit" name="submit" id="">
    </form>
</body>
</html>


