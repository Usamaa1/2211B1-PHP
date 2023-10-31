
<?php 


// if(isset($_POST['submit']))
// {

//     // Sanitize Method
//     // $input = filter_input(INPUT_POST,'message',FILTER_SANITIZE_SPECIAL_CHARS);
//     // $input = filter_input(INPUT_POST,'message',FILTER_SANITIZE_NUMBER_INT);
//     // $input = filter_input(INPUT_POST,'message',FILTER_SANITIZE_URL);

//     // Validation Method
//     // $input = filter_input(INPUT_POST,'message',FILTER_VALIDATE_EMAIL);

//     echo $input;

// }


    if(isset($_POST['submit']))
    {
        // echo $_POST['input'];


        // Sanitization Methods
        // $message = filter_input(INPUT_POST,'input',FILTER_SANITIZE_SPECIAL_CHARS);
        // $message = filter_input(INPUT_POST,'input',FILTER_SANITIZE_NUMBER_INT);
        // $message = filter_input(INPUT_POST,'input',FILTER_SANITIZE_NUMBER_FLOAT);

        // echo $message;
      
      
      
        // Validate Methods
        // $message = filter_input(INPUT_POST,'input',FILTER_VALIDATE_EMAIL);
        // $message = filter_input(INPUT_POST,'input',FILTER_VALIDATE_URL);

        // echo $message;



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
    <form action="formValidation.php" method="post">
        <input type="text" name="input">
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
