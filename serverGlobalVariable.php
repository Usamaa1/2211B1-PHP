<?php

echo "<pre>";
print_r($_SERVER);
echo "</pre>";


echo "+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++";


if(isset($_POST['submit']))
{
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    
    echo "<br>". $num1 + $num2;
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
    
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    <input type="text" name="num1" placeholder="Number1">
    <input type="text" name="num2" placeholder="Number2">
    <input type="submit" name="submit">
    </form>

</body>

</html>