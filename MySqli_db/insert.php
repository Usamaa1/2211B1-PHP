<?php 
require 'connection.php' 
?>

<?php 
    // if(isset($_POST['submit']))
    // {
    //     $firstName = $_POST['firstName'];
    //     $email = $_POST['email'];
    //     $password = $_POST['password'];

    //     $hash_pass = password_hash('123', PASSWORD_BCRYPT);

    //     echo "$hash_pass <br> $password";

    //     // password_verify();

    //     if(password_verify($password,$hash_pass))
    //     {
    //         echo "Correct Password";
    //     }
    //     else
    //     {
    //         echo "Wrong Password";
    //     }

    //     try
    //     {
         
    //        $insert = "INSERT INTO `user_info` (`user_name`, `email`, `password`) VALUES ('$firstName', '$email', '$hash_pass')";
    //         mysqli_query($connection, $insert);
    //     }
    //     catch(mysqli_sql_exception $e)
    //     {
    //         echo $e->getMessage();
    //     }
    // }



    // mysqli_query($connection,'Select * from dbname')


        if(isset($_POST['submit']))
        {
            $firstName = $_POST['firstName'];
            $email = $_POST['email'];
            $password = $_POST['password'];


            try
            {
                mysqli_query($connection,"INSERT INTO `d1`(`user`, `email`, `pass`) VALUES ('$firstName','$email','$password')");

                echo "Insertion Successfully done";
            }
            catch(mysqli_sql_exception)
            {
                echo "Insertion unsuccessfull";
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
    <form action="insert.php" method="post">
        <input type="text" name="firstName" id="" placeholder="First Name"><br><br>
        <input type="text" name="email" id="" placeholder="Email"><br><br>
        <input type="password" name="password" id="" placeholder="Password"><br><br>
        <input type="submit" name="submit" id=""><br><br>
    </form>
</body>
</html>