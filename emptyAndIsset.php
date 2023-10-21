<?php




// isset() -----> null
// empty() -----> null, undefined, not declared, 0,0.0,"0","",NULL,FALSE,array()

//  $a = '';
// //  $a = 'kjdsfkjskdfj';

//  $b;


//  echo empty($a);

//  echo "<br>";


//  if(isset($a))
//  {
//     echo 'this is true';
// }
// else
// {
//      echo 'this is false';

//  }





// if(false || false || false)
// {
//     echo 'true';
// }
// else
// {
//     echo 'false';

// }




// echo $userEmail;


if (isset($_POST['signup'])) {
    $userName = $_POST['userName'];
    $userEmail = $_POST['userEmail'];
    // $userPassword = $_POST['userPassword'];


    if(empty($userName) || empty($userEmail))
    {
        echo 'Kindly fill all the fields!';
    }
    else
    {
        // echo $userName . '<br>' . $userEmail . '<br>' . $userPassword;
        echo $userName . '<br>' . $userEmail . '<br>';

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
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <input type="text" name="userName" placeholder="Enter your User Name">
        <input type="text" name="userEmail" placeholder="Enter your User Email">
        <!-- <input type="password" name="userPassword" placeholder="Enter your User Password"> -->
        <input type="submit" name="signup">
    </form>
</body>

</html>